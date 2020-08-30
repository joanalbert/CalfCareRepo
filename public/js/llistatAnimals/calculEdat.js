var animalElements = document.getElementById("animalsList").children;
var dataActual = new Date();
var dataAnimal;

var MILIS_TO_MONTHS = 2592000000;

for(var i = 0; i < animalElements.length; i++){    
    
    var data_td_element = document.getElementById("edat_td_"+i);
    dataAnimal = new Date(data_td_element.innerHTML);
    
    var milis = dataActual - dataAnimal;
    
    data_td_element.innerHTML = Math.floor(milis / MILIS_TO_MONTHS);
}




