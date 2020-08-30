window.onload = () =>{
    const grid = document.querySelector(".grid");
    
    const masonry = new Masonry(grid, {
        itemSelector: '.grid-item',
        gutter: 10,
        originTop: false,
        isFitWidth: true,
        columnWidth: 168
    });
}




var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var content = document.getElementsByClassName("modal-content")[0];
var span = document.getElementsByClassName("close")[0];
var text = document.getElementById("modalText");
var isVisible = false;


// When the user clicks on the button, open the modal
btn.onclick = function() {
  animations();
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  animations();    
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) animations();      
}


//animacions
function animations(){
        
    if(!isVisible) moveDown();
    else moveUp();
    
    isVisible = !isVisible;
    
    console.log(isVisible);
}

function moveDown(){
    modal.style.display = "block";
    content.style.animation = "animatetop 0.4s";
    
    content.addEventListener("animationend", remove);
    
    function remove(){
       content.removeEventListener("animationend", remove);
       content.style.animation = ""; 
    }
}

function moveUp(){
    content.style.animation = "animatebotom 0.4s";
    
    content.addEventListener("animationend", add);
    
    function add(){
       content.removeEventListener("animationend", add);
       content.style.animation = "";

       modal.style.display = "none"; 
    }
}

var pinsoElements = document.getElementsByClassName("borrarPinsoButton");
var si = document.getElementById("si");
var no = document.getElementById("no");
var form;

for(var p = 0; p < pinsoElements.length; p++){
    pinsoElements[p].addEventListener("click", (event)=> {
        form = event.target.nextElementSibling;
        PopupDeletePinso(event.target);
    });
}

function PopupDeletePinso(target){
    let nom;
    
    if(target.tagName == "I") nom = target.id;
    else nom = target.children[0].id;

    text.innerHTML = "Desitgeu eliminar el pinso '<strong>"+nom+"</strong>' ?"

    btn.click();   
}


no.addEventListener("click", ()=> {
    btn.click();
});

si.addEventListener("click", ()=> {
    form.submit();
});



