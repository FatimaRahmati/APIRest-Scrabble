//GUTENBERG - BOTÓN LEER MÁS

let leermasButton = document.getElementById('botonLeer');
console.log(leermasButton);
leermasButton.addEventListener('click', changeContent());
let leermasDiv = document.getElementById('leermas');

function changeContent(){

    if(leermasDiv.classList.contains('show') == true){
        leermasButton.innerHTML = "............. Leer más .............";
    }else{
        leermasButton.innerHTML = "............. Leer menos ............."
    }
}




//LOS TRABAJOS EN UNA IMPRENTA DEL S.XV.

let forwardFinally = document.querySelector("#forward-finally > a");
let forwardComposer = document.querySelector("#forward-composer > a");
let returnComposer = document.querySelector("#returncomposer > a");
let returnTirador = document.querySelector("#returntirador > a");

forwardComposer.addEventListener('click', () => {
   document.getElementById("componedor").classList.remove('show');   
})

forwardFinally.addEventListener('click', () => {
    document.getElementById("entintador").classList.remove('show');    
})

returnComposer.addEventListener('click', () => {
    document.getElementById('returncomposer').classList.remove('show');
    document.getElementById("yahora").classList.remove('show');
    document.getElementById("entintador").classList.remove('show');        
})

returnTirador.addEventListener('click', () => {
    document.getElementById('returntirador').classList.remove('show');
    document.getElementById("finally").classList.remove('show');
    document.getElementById("tirador").classList.remove('show');  
})



//LOS PRIMEROS LIBROS EN ESPAÑA. 
//Funcionalidad de carousel.
let obras = document.getElementById("obres");
let compren = document.getElementById("comprensorium");
let valencian = document.getElementById("valencian");
let libros = document.getElementById("spainbooks");

obras.addEventListener("mouseover", selectElement);
compren.addEventListener("mouseover", selectElement);
valencian.addEventListener("mouseover", selectElement);


function selectElement(event){

    //Quitamos el overlap de cualquier elemento para que no se superponga cuando no toca. 
    obras.classList.remove('overlap');
    valencian.classList.remove('overlap');
    
    //Obtenemos datos del elemento seleccionado
    const current = event.currentTarget; 
    const currentPosition = current.dataset.slideshow;  
    const currentClass = current.className;
    const diferentClasses = currentClass.split(" ");    

    //Obtenemos datos del elemento central
    let currentCentral = document.querySelector('[data-slideshow = "center"]');    
    currentCentral.classList.remove('set-center');

    switch(currentPosition){
        case 'left':                       
            currentCentral.classList.add('centro-derecha');   
            currentCentral.classList.add('overlap');         
            currentCentral.dataset.slideshow = 'right';            
            break;
        case 'right':                  
            currentCentral.classList.add('centro-izquierda');    
            currentCentral.classList.add('overlap');        
            currentCentral.dataset.slideshow = 'left';            
            break;
        default:           
            break;
    }  
    
    //Actualizamos las clases del elemento que tiene el ratón encima:
    current.dataset.slideshow = 'center';    
    current.classList.remove(diferentClasses[1]);   
    current.classList.add('set-center');
}


//MÉTODOS PARA PÁGINA SCRABBLE

async function currentGames() {
    // 3 últimas partida en juego vía AJAX
    try{
        
        
        const promise = await fetch("/api/info/currentgames/3");
        const response = await promise.json();  
        console.log(response);        
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
currentGames();

function ranking() {
    // Rankig de los tres mejores usuario en español
    const promise = axios.get("/api/info/ranking/es/3");
    promise
      .then((response) => {
        console.log("Ranking:", response);
        this.createCard(
          "Ranking",
          response.status,
          response.statusText,
          response.data
        );
      })
      .catch((error) => {
        console.log("ERROR: " + error);
        this.createCard(
          "Ranking",
          error.response.status,
          error.response.statusText,
          error.response.data
        );
      });
  }



