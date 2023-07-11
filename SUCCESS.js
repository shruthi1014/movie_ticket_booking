 
 setTimeout(HIDE,3000);
 setTimeout(TICK,3500);


 function HIDE(){
    var LOAD = document.getElementById("LOADING");
    LOAD.style.display = "NONE";
 }

 function TICK(){
    var CONFIRM = document.getElementById("CONFIRM");
    var CORRECT = document.getElementById("TICK");
    var CORRECT_PIC = document.getElementById("CORRECT");

    CONFIRM.style.display = "BLOCK";
    setTimeout(ANIM,500);
 }
 function ANIM(){
    var CONFIRM = document.getElementById("CONFIRM");
    var CORRECT = document.getElementById("TICK");
    var CORRECT_PIC = document.getElementById("CORRECT");

    CORRECT.style.display = "NONE";
    CORRECT_PIC.style.display = "BLOCK";
 }