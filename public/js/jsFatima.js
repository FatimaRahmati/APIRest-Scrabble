//LOS TRABAJOS EN UNA IMPRENTA DEL S.XV.

let forwardComposer = document.querySelector("#forward-composer > a");
let forwardFinally = document.querySelector("#forward-finally > a");
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

obras.addEventListener("mouseover", selectElement);
compren.addEventListener("mouseover", selectElement);
valencian.addEventListener("mouseover", selectElement);

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


/* function exitElement(event){
    event.target;
    const obrasClass = obras.className;
    const obrasClasses = currentClass.split(" ");  
    obras.classList.remove(obrasClasses[1]);
    obras.classList.add('centro-izquierda');

    const comprenClass = compren.className;
    const comprenClasses = comprenClass.split(" ");  
    compren.classList.remove(comprenClasses[1]);
    compren.classList.add('set-center');

    const valencianClass = valencian.className;
    const valencianClasses = valencianClass.split(" ");  
    valencian.classList.remove(valencianClasses[1]);
    valencian.classList.add('centro-derecha');

} */