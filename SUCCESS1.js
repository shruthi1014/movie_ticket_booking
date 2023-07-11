 
 setTimeout(HIDE,2000);
 setTimeout(TICK,2500);
 //setTimeout(NAV,3000);

 //function NAV(){
 //  window.location.replace("FEEDBACK.php");
//}

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

