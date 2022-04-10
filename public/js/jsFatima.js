//GUTENBERG - BOTÓN LEER MÁS
let leermasButton = document.getElementById('botonLeer');
leermasButton.addEventListener('click', changeContent);
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
/* libros.addEventListener("mouseout", exitElement); */

/* obras.addEventListener("mouseout", exitElement);
compren.addEventListener("mouseout", exitElement);
valencian.addEventListener("mouseout", exitElement); */

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

function currentGames() {
    // 3 últimas partida en juego vía AJAX
    const promise = axios.get("/api/info/currentgames/3");
    promise
      .then((response) => {
        console.log("currescr_indexnt games:", response);
        this.createCard(
          "Current Games",
          response.status,
          response.statusText,
          response.data
        );
      })
      .catch((error) => {
        console.log("ERROR: " + error);
        this.createCard(
          "Current Games",
          error.response.status,
          error.response.statusText,
          error.response.data
        );
      });
}
