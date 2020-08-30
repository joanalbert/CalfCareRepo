var animalItems = document.getElementsByClassName("animalListItem");


for(let i = 0; i < animalItems.length; i++){
    animalItems[i].addEventListener("click", (event) => {
        let formulari = document.getElementById("detailForm_"+i);
        formulari.submit();
    });
}




