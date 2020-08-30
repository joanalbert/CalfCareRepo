var animalElements = document.getElementById("animalsList").children;
var filtreElement = document.getElementById("filtre");


//Script pel filtre del llistat d'animals


window.onload = function(){
    
    filtreElement.addEventListener("input", () => {
        filter(filtreElement.value);
    });
    
}

function filter(explotacioFiltre){
        
    var explotacioLlista;
    var li;
        
    console.log("filtering")    
    
    if(explotacioFiltre == ""){
        showAll();
        return;
    }
        
    for(var i = 0; i < animalElements.length; i++){
       
       li = animalElements[i];
       explotacioLlista = document.getElementById("explotacio_td_"+i).innerHTML;
       
       if(explotacioFiltre != explotacioLlista){
           li.classList.add("d-none");
           li.classList.remove("d-flex");
       }
       else{
           li.classList.remove("d-none");
           li.classList.add("d-flex");          
       }
       
       
    }
    
}

function showAll(){  
    for(var i = 0; i < animalElements.length; i++){      
        animalElements[i].classList.remove("d-none");
        animalElements[i].classList.add("d-flex");         
    }
}






