<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

/* Para redifusionar un evento inmediatamente podemos usar la cola sync o
 * hacer que la clase implemente ShouldBroadcastNow 
 */
class AcceptedChallenge implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    // sólo se emiten los miembros publicos
    public $gameId;
    //, $user;
   // public $oppoId, $oppoName, $oppoCountry, $oppoAvatar;
    //public $lang;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($gameId, $user, $oppo) {
        
        $this->gameId = $gameId;
       // $this->user = $user;
     //   $this->oppoId = $oppo->id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn() {
        return new Channel('user.345');//$this->user->id);
    }
}
