///////////////////////////////////////////////////////////////////////////////////// SIDE MENU //////////////////////////////////////////////////////////////////////////
var sideFormToggler = document.getElementById("main");
var mySidebar = document.getElementById("mySidebar");
var open = true;
///////////////////////OPEN CLOSE SIDE MENU///////////////////////////
function openNav() {
  mySidebar.style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  toggleColumns();
}

function closeNav() {
  mySidebar.style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  toggleColumns();
  
  makeItemsInvisible();
}

function toggleColumns(){
       
    if(open){           
        sideFormToggler.classList.remove("d-flex");
        sideFormToggler.style.display = "none";  
    }
    else{           
        sideFormToggler.classList.add("d-flex");
        sideFormToggler.style.display = ""; 
    }
    
    open = !open;
}
///////////////////////END OPEN CLOSE SIDE MENU///////////////////////////

/////////////////////FADE IN SIDEMENU ITEMS AFTER IT OPENS//////////////
sideFormToggler.addEventListener("click", () => {
    
   setTimeout(function(){
       
      var mItems = mySidebar.children;
      for(let i = 0; i < mItems.length; i++){
          mItems[i].style.animation = "fadein 2s";
          mItems[i].style.visibility = "visible";
      }
    
   }, 480);   
    
});


function makeItemsInvisible(){
    var mItems = mySidebar.children;
   
    for(let i = 0; i < mItems.length; i++){
        mItems[i].style.visibility = "hidden";
        mItems[i].style.animation = "";
    } 
}
///////////////////////////////////////////////////////////////////////////////// END SIDE MENU //////////////////////////////////////////////////////////////////////////

