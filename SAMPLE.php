<html>
    <head>
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>
</html>
<?php

$apiKey = urlencode('NDk3MDU4NTA0ZDY5NGU1NTQ5NDIzNzMwNGU0YjU1Nzk=	');
$Textlocal = new Textlocal(false, false, $apiKey);
$numbers = "6380326044";
$sender = 'TLTEST';
$message = "Welcome. Your Registration is successful. Login to your Account and Update your details. Your password is " . $otp;
try
 { 
   $Textlocal->sendSms($numbers, $message, $sender);
   echo json_encode(array("type"=>"success", "message"=> "Mobile number is Registered. Password has been sent to registered Mobile Number. Login to fillup the details" ));
   exit();
 }
   catch(Exception $e)
   {
        die('Error: '.$e->getMessage());
   }
?>