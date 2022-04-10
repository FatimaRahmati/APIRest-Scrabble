//MÉTODOS PARA PÁGINA SCRABBLE

async function currentGames() {
    // 3 últimas partida en juego vía AJAX
    try{       
        const promise = await fetch("/api/info/currentgames/3");
        const response = await promise.json();      
        for (let i=0; i<response.length; i++){
            /* console.log(document.querySelector(`[data-player="1"]`)); */            
            ({language, player1, player2, player_1_score, player_2_score} = response[i]);
            document.querySelector(`[data-player="${i}"]`).innerHTML = `${player1.name}: ${player_1_score} puntos`;
            document.querySelector(`[data-player="${i}-${i}"]`).innerHTML = `${player2.name}: ${player_2_score} puntos`;          
        } 

    }
    catch (error) {
    console.log(error);
    }
}
/* currentGames(); */

async function ranking() {
    // Rankig de los tres mejores usuario en español
    try{       
        const promise = await fetch("/api/info/ranking/es/3");
        const response = await promise.json();
        for (let i=0; i<response.length; i++){                     
            ({user, won, level} = response[i]);
            document.querySelector(`[data-ranking="${i}"] > h5`).innerHTML = `${user.name}`;
            document.querySelector(`[data-player="${i}"]`).innerHTML = `Ha ganado: ${won} partidas`;
            document.querySelector(`[data-player="${i}-${i}"]`).innerHTML = `Nivel: ${level}`;          
        }
    }
    catch (error) {
    console.log(error);
    }
  }
ranking();