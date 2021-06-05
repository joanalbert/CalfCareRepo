///////////////////////////////////INIT MASONRY///////////////////////////
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
////////////////////////////////END INIT MASONRY///////////////////////////