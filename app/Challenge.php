<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\AcceptedChallenge;

class Challenge extends Model
{
    // nombre de la tabla (no haría falta porque se define con el mismo nombre del modelo)
    protected $table = "challenges";

    /**
     * Relación con Language. Un reto tiene un idioma, pero un idioma puede ser 
     * asignado a mucho retos
     */
    public function language() {
        // se le indica el modelo y, opcionalmente, la clave externa que se utiliza
        // en el caso de que no sea language_id (nombre del metodo + _id) y 
        // la clave primaria del padre (language) en el caso de que no sea id
        return $this->belongsTo('App\Language', 'language', 'language');
    }

    /**
     * Relación con User peticionario. Un reto sólo tiene un jugador retador, pero un jugador 
     * puede ser retador en muchos retos
     */
    public function requestPlayer() {
        return $this->belongsTo('App\User', 'requesting_player');
    }

    /**
     * Relación con User oponente. Un reto sólo tiene un jugador oponente, pero un jugador 
     * puede ser oponente en muchos retos
     */
    public function opponentPlayer() {
        return $this->belongsTo('App\User', 'opposing_player');
    }

    /** 
     * Empareja retos 
     * */
    public static function pairChallenges($inputChallenge) {

        $request = $inputChallenge->requestPlayer()->get(['id']);
        $levelRequest = Level::firstOrCreate(['user_id' => $request->first()->id],['language_code' => $inputChallenge->language])->level;
    
        if ($inputChallenge->level == "0" && $inputChallenge->opposing_player == NULL) { // aleatorio
            
            unset($levels);
            $levels = array(0, $levelRequest);

            for ($i = 5;$i >= $levelRequest;$i = $i-1) { array_push($levels, -1*$i); }
            for ($i = 10;$i <= 10*$levelRequest;$i = $i+10) { array_push($levels, $i); }

            //  var_dump($levels);
            $oppoChallenge = Challenge::where('language', $inputChallenge->language)
                    ->whereIn('level', $levels)
                    ->where('opposing_player', NULL)        // me aseguro de que no quiera jugar contra alguien en concreto
                    ->where('id', '<>', $inputChallenge->id)
                    ->where('requesting_player', '<>', $request->first()->id)
                    ->orderBy('created_at','asc')->first();

            if ($oppoChallenge) {   // he encontrado rival

                // creo la partida
                $game = new Game;

                $game->language = $inputChallenge->language;
                $game->player_1 = $request->first()->id;
                $game->player_2 = $oppoChallenge->requesting_player;
                $game->state = 'unstarted';
                
                $game->save();

                $opponent = User::find($oppoChallenge->requesting_player);

                // emito el evento
                event(new AcceptedChallenge($game->id, $inputChallenge->language, $request->first(), $opponent));
                // al contrincante
                event(new AcceptedChallenge($game->id, $inputChallenge->language, $opponent, $request->first()));
            }

        } else if ($inputChallenge->level != "0" && $inputChallenge->opposing_player == NULL) { // nivel
            
            // nivel que puede exigir el contrincante
            unset($levels);
            $levels = array(0, $levelRequest);

            for ($i = 5;$i >= $levelRequest;$i = $i-1) { array_push($levels, -1*$i); }
            for ($i = 10;$i <= 10*$levelRequest;$i = $i+10) { array_push($levels, $i); }

            // calculo el vector de niveles que exige el peticionario
            unset($levelsRequire);
            $levelsRequire=[];

            if (intval($inputChallenge->level) < 0) {
                for ($i = intval($inputChallenge->level);$i < 0; $i = $i+1) { array_push($levelsRequire, -1*$i); }
            } else if (intval($inputChallenge->level) < 10) {
                array_push($i);
            } else {
                for ($i = intval($inputChallenge->level);$i <= 50; $i = $i+10) { array_push($levelsRequire, $i/10); }
            }
          //var_dump($levels);
          //var_dump($levelsRequire);
            $oppoChallenge = Challenge::where('language', $inputChallenge->language)
                    ->whereIn('challenges.level', $levels)
                    ->where('opposing_player', NULL)        // me aseguro de que no quiera jugar contra alguien en concreto
                    ->where('id', '<>', $inputChallenge->id)
                    ->where('requesting_player', '<>', $request->first()->id)
                    ->join('levels', function ($join) use ($inputChallenge,$levelsRequire) {
                        $join->on('requesting_player', '=', 'levels.user_id')
                            ->where('levels.language_code','=', $inputChallenge->language)
                            ->whereIn('levels.level', $levelsRequire);
                    })
                    ->orderBy('created_at','asc')->first();

            if ($oppoChallenge) {   // he encontrado rival

                // creo la partida
                $game = new Game;

                $game->language = $inputChallenge->language;
                $game->player_1 = $request->first()->id;
                $game->player_2 = $oppoChallenge->requesting_player;
                $game->state = 'unstarted';
                
                $game->save();

                $opponent = User::find($oppoChallenge->requesting_player);

                // emito el evento al que genera la petición
                event(new AcceptedChallenge($game->id, $inputChallenge->language, $request->first(), $opponent));
                // al contrincante
                event(new AcceptedChallenge($game->id, $inputChallenge->language, $opponent, $request->first()));
            }

        } else {
            // TODO
        }

    
    }
}
