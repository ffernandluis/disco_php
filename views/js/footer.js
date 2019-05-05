
 
let whatsapp = document.getElementById("whatsapp");
let messenger = document.getElementById("messenger");
let telegram =  document.getElementById("telegram");

let lista = [whatsapp,messenger,telegram];

/*

De esta manera con estructuras de control
function myFunction() {
    for(let i=0; i<lista.length; i++){
        if(lista[i].id == "whatsapp"){
            lista[i].classList.toggle("whatsapp");
        }
        if(lista[i].id == "messenger"){
            lista[i].classList.toggle("messenger");
        }
        if(lista[i].id =="telegram"){
            lista[i].classList.toggle("telegram");
        }
    }
 }
*/
//let hola;
 function myFunction() {
    for(let i=0; i<lista.length; i++){
        //hola = lista[i].id; tambien vale esta opcion
        lista[i].classList.toggle(lista[i].id);
    }
 }