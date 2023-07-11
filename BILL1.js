
function NB(){
    document.getElementById("NB").style.display = "block";
    document.getElementById("UPI").style.display = "none";
    document.getElementById("CC").style.display = "none";
    document.getElementById("DC").style.display = "none";
}

function UPI(){
    document.getElementById("NB").style.display = "none";
    document.getElementById("UPI").style.display = "block";
    document.getElementById("CC").style.display = "none";
    document.getElementById("DC").style.display = "none";
}

function CC(){
    document.getElementById("NB").style.display = "none";
    document.getElementById("UPI").style.display = "none";
    document.getElementById("CC").style.display = "block";
    document.getElementById("DC").style.display = "none";
}

function DC(){
    document.getElementById("NB").style.display = "none";
    document.getElementById("UPI").style.display = "none";
    document.getElementById("CC").style.display = "none";
    document.getElementById("DC").style.display = "block";
}

function FORMAT_CNUM(ele,e){
    if(ele.value.length<19)
    {
      ele.value= ele.value.replace(/\W/gi,'').replace(/(.{4})/g, '$1 ');
      return true;
    }
    else
    {
      return false;
    }
  }

  function FORMAT_EXPIRY(ele,e){
    if(ele.value.length<5)
    {
      ele.value= ele.value.replace(/\W/gi,'').replace(/(.{2})/g, '$1/');
      return true;
    }
    else
    {
      return false;
    }
  }

  function FORMAT_CVV(ele,e){
    if(ele.value.length<3)
    {
      ele.value= ele.value.replace(/\W/gi,'').replace(/(.{0})/g, '$1');
      return true;
    }
    else
    {
      return false;
    }
  }

  function NUM_VALIDATION(e)
  {
    e.target.value = e.target.value.replace(/[^\d ]/g,'/');
    return false;
  }

  function VALIDITY(){
    var CNUM = document.getElementById("CARD_NUMBER").value;
    var SUC = document.getElementById("SUCCESS");
    var ERR = document.getElementById("ERROR");
    
    if((CNUM.length == 19))
    {
      SUC.style.visibility = "VISIBLE";
      ERR.style.visibility = "HIDDEN";
    }
    else
    {
      SUC.style.visibility = "HIDDEN";
      ERR.style.visibility = "VISIBLE";
    }

    var EXPIRY = document.getElementById("EXPIRY").value;
    var E_SUC = document.getElementById("E_SUCCESS");
    var E_ERR = document.getElementById("E_ERROR");

    if((EXPIRY.length == 5) || (substr(EXPIRY,1)) < 12)
    {
      E_SUC.style.visibility = "VISIBLE";
      E_ERR.style.visibility = "HIDDEN";
    }
    else
    {
      E_SUC.style.visibility = "HIDDEN";
      E_ERR.style.visibility = "VISIBLE";
    }

    var CVV = document.getElementById("CVV").value;
    var CV_SUC = document.getElementById("CV_SUCCESS");
    var CV_ERR = document.getElementById("CV_ERROR");

    if((CVV.length == 3)){
      CV_SUC.style.visibility = "VISIBLE";
      CV_ERR.style.visibility = "HIDDEN";
    }
    else
    {
      CV_SUC.style.visibility = "HIDDEN";
      CV_ERR.style.visibility = "VISIBLE";
    }
}

function VALIDITY_DC(){
  var DC_CNUM = document.getElementById("DC_CARD_NUMBER").value;
  var DC_SUC = document.getElementById("DC_SUCCESS");
  var DC_ERR = document.getElementById("DC_ERROR");
  
  if((DC_CNUM.length == 19))
  {
    DC_SUC.style.visibility = "VISIBLE";
    DC_ERR.style.visibility = "HIDDEN";
  }
  else
  {
    DC_SUC.style.visibility = "HIDDEN";
    DC_ERR.style.visibility = "VISIBLE";
  }

  var DC_EXPIRY = document.getElementById("DC_EXPIRY").value;
  var DCE_SUC = document.getElementById("DCE_SUCCESS");
  var DCE_ERR = document.getElementById("DCE_ERROR");

  if((DC_EXPIRY.length == 5) || (substr(EXPIRY,1)) < 12)
  {
    DCE_SUC.style.visibility = "VISIBLE";
    DCE_ERR.style.visibility = "HIDDEN";
  }
  else
  {
    DCE_SUC.style.visibility = "HIDDEN";
    DCE_ERR.style.visibility = "VISIBLE";
  }

  var DCCVV = document.getElementById("DC_CVV").value;
  var DCCV_SUC = document.getElementById("DCCV_SUCCESS");
  var DCCV_ERR = document.getElementById("DCCV_ERROR");

  if((DCCVV.length == 3)){
    DCCV_SUC.style.visibility = "VISIBLE";
    DCCV_ERR.style.visibility = "HIDDEN";
  }
  else
  {
    DCCV_SUC.style.visibility = "HIDDEN";
    DCCV_ERR.style.visibility = "VISIBLE";
  }
}
  