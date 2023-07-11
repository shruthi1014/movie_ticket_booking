<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['start']))
{
    $_SESSION['start'] = time();
}

if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1000000)) 
{
    //session_unset();
    //session_destroy();
    echo "<script>
                window.location.href='EXPIRED.php';
          </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="BILL.css">
    <script src="BILL1.js"></script>
    <script src="https://kit.fontawesome.com/c84fd45aeb.js" crossorigin="anonymous"></script>
    <title>PAYMENT</title>
</head>

<body>
    <?php
        session_start();
        $FOOD_AMOUNT = $_SESSION['AMOUNT'];
    ?>
    <h2 id="AMOUNT"> Food Amount = <?php echo $FOOD_AMOUNT ?> </h2>
    <div class="PAYMENT">
        <h1>BILL PAYMENT</h1>
        <div class="PO">
            <h2><button id="btn" onclick=NB()>Net Banking</button></h2>
            <h2><button id="btn" onclick=UPI()>UPI</button></h2>
            <h2><button id="btn" onclick=CC()>Credit Card</button></h2>
            <h2><button id="btn" onclick=DC()>Debit Card</button></h2>
            
        </div>
    </div>   

    <div id="NB">
        <form action="" method="post">
                <input type="radio" name="BANK"> <img src="ICICI.png" alt="ICICI BANK"> <br> <br>
                <input type="radio" name="BANK"> &nbsp;<img src="HDFC.png" alt="HDFC BANK">  <br> <br>
                <input type="radio" name="BANK"> <img src="KOTAK.png" alt="KOTAK MAHINDRA BANK"> <br> <br>
                <input type="radio" name="BANK"> <img src="AXIS.png" alt="AXIS BANK">  <br> <br> <br> <br>
                <input type="submit" value="PAY" name="NPAY" id="PAY">
        </form>
    </div>

    <div id="UPI">
                <br> <br> <br>
                <a href="pdfGeneration/TICKET.php"><img src="GOOGLEPAY.png" alt="GPAY"></a>
                <a href="pdfGeneration/TICKET.php"><img src="PAYTM.png" alt="PAYTM"></a> <br> <br> <br> <br> <br> <br>
                <a href="pdfGeneration/TICKET.php"><img src="PHONEPE.png" alt="PHONPE"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="pdfGeneration/TICKET.php"><img src="BHIM.png" alt="BHIM"></a>
                <br><br><br>
    </div>

    <div id="CC">
        <form action="" method="post">
                <h2 style="color: crimson;">CARD DETAILS</h2>   <img id="CREDIT_CARD" src="CREDIT_CARD.png" alt="CREDIT CARDS"> 
                <h3 id="ENT">ENTER CARD NUMBER</h3>
                <input type="text" name="CARD_NUMBER" id="CARD_NUMBER" placeholder="0000-0000-0000-0000" onkeypress='return FORMAT_CNUM(this,event)' onkeyup="return NUM_VALIDATION(event)" oninput=VALIDITY()> &nbsp;&nbsp;<i class="fa-solid fa-circle-check" id="SUCCESS"></i> <i class="fa-solid fa-circle-exclamation" id="ERROR"></i> <br>
                <h3>EXPIRY</h3>
                <input type="text" name="EXPIRY" id="EXPIRY" placeholder="MM / YY" onkeypress='return FORMAT_EXPIRY(this,event)' onkeyup="return NUM_VALIDATION(event)" oninput=VALIDITY()> &nbsp;&nbsp;<i class="fa-solid fa-circle-check" id="E_SUCCESS"></i> <i class="fa-solid fa-circle-exclamation" id="E_ERROR"></i>
                <h3 id="CV">CVV</h3>
                <input type="password" name="CVV" id="CVV" placeholder="CVV" maxlengthb="3" onkeypress='return FORMAT_CVV(this,event)' onkeyup="return NUM_VALIDATION(event)" oninput=VALIDITY()> &nbsp;&nbsp;<i class="fa-solid fa-circle-check" id="CV_SUCCESS"></i> <i class="fa-solid fa-circle-exclamation" id="CV_ERROR"></i>
                <br><br>
                <input type="submit" value="PAY" name="PAY" id="PAY" onclick="VALID()">
        </form>
    </div>

    <div id="DC">
        <form action="" method="post">
                <h2 style="color: crimson;">CARD DETAILS</h2>   <img id="CREDIT_CARD" src="CREDIT_CARD.png" alt="CREDIT CARDS"> 
                <h3 id="ENT">ENTER CARD NUMBER</h3>
                <input type="text" name="DC_CARD_NUMBER" id="DC_CARD_NUMBER" placeholder="0000-0000-0000-0000" onkeypress='return FORMAT_CNUM(this,event)' onkeyup="return NUM_VALIDATION(event)" oninput=VALIDITY_DC()> &nbsp;&nbsp;<i class="fa-solid fa-circle-check" id="DC_SUCCESS"></i> <i class="fa-solid fa-circle-exclamation" id="DC_ERROR"></i> <br>
                <h3>EXPIRY</h3>
                <input type="text" name="DC_EXPIRY" id="DC_EXPIRY" placeholder="MM / YY" onkeypress='return FORMAT_EXPIRY(this,event)' onkeyup="return NUM_VALIDATION(event)" oninput=VALIDITY_DC()> &nbsp;&nbsp;<i class="fa-solid fa-circle-check" id="DCE_SUCCESS"></i> <i class="fa-solid fa-circle-exclamation" id="DCE_ERROR"></i>
                <h3 id="CV">CVV</h3>
                <input type="password" name="DC_CVV" id="DC_CVV" placeholder="CVV" maxlengthb="3" onkeypress='return FORMAT_CVV(this,event)' onkeyup="return NUM_VALIDATION(event)" oninput=VALIDITY_DC()> &nbsp;&nbsp;<i class="fa-solid fa-circle-check" id="DCCV_SUCCESS"></i> <i class="fa-solid fa-circle-exclamation" id="DCCV_ERROR"></i>
                <br><br>
                <input type="submit" value="PAY" name="DC_PAY" id="PAY" onclick="VALID()">
        </form>
    </div>
</body>
</html>




<?php
if(isset($_POST['PAY']))
{
    $CNUM = $_POST['CARD_NUMBER'];
    $EXPIRY = $_POST['EXPIRY'];
    $CVV = $_POST['CVV'];

    if((strlen($CNUM) > 16) && (strlen($EXPIRY) > 4) && strlen($CVV) == 3)
    {
        echo "<script>
                    window.location.href='pdfGeneration/TICKET.php';
            </script>";
    }
    else
    {
        ?>
            <script type="text/javascript">
                alert("KINDLY ENTER CREDENTIALS !!");
            </script>
        <?php
    }
}

if(isset($_POST['NPAY']))
{
    echo "<script>
                    window.location.href='pdfGeneration/TICKET.php';
            </script>";
}

if(isset($_POST['DC_PAY']))
{
    $DC_CNUM = $_POST['DC_CARD_NUMBER'];
    $DC_EXPIRY = $_POST['DC_EXPIRY'];
    $DC_CVV = $_POST['DC_CVV'];

    if((strlen($DC_CNUM) > 16) && (strlen($DC_EXPIRY) > 4) && strlen($DC_CVV) == 3)
    {
        echo "<script>
                    window.location.href='pdfGeneration/TICKET.php';
            </script>";
    }
    else
    {
        ?>
            <script type="text/javascript">
                alert("KINDLY ENTER CREDENTIALS !!");
            </script>
        <?php
    }
}
?>