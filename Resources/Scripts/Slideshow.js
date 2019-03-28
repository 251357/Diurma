var Index= 0;
// Start the loop (; 
Slide();

function Slide() {
    var i;
    // Declare x and assign all slides to it.
    var x = document.getElementsByClassName("Slide");
    // Set display to none for every slide in x.
    for(i = 0; i < x.length; i++){
        x[i].style.display = "none";
    }
    Index++;
    // Reset index.
    // Set the correct display to block.
    if(Index > x.length){
     Index = 1   
    }
    x[Index - 1].style.display = "Block";
    setTimeout(Slide, 8000);
}