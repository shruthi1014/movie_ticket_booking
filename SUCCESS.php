<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFIRM</title>
    <link rel="stylesheet" type="text/css" href="SUCCESS1.css">
    <script src="SUCCESS.js"></script>
</head>

<body>
    <center>
        <img src="LOADING.gif" alt="LOADING" id="LOADING">
    <center>

    <div id="CONFIRM">
        <img src="TICK.gif" alt="TICK" id="TICK"> <img src="TICK.png" alt="TICK" id="CORRECT">
        <h3>THANK YOU FOR BOOKING WITH US </h3> 
        <h4>Your Ticket has been sent to your registered Email ID </h4>
    </div>
</body>
</html>




<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//]require 'vendor/autoload.php';

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

session_start();
$EMAIL = $_SESSION['EMAIL'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'swabhale@gmail.com';                   //SMTP username
    $mail->Password   = 'bzveyxgepmfgxinu';                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('swabhale@gmail.com', 'BOOK MY MOVIE');
    $mail->addAddress($EMAIL,'SPARSH WABHALE 20BCE1651');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/pdfGeneration/TICKETS/ticket.pdf', 'E-TICKET.pdf');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'RE';
    $mail->Body    = 'HELLO';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}