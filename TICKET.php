<html>
    <head>
        <script src="TICKET.js"></script>
        <link rel="stylesheet" type="text/css" href="TICKET1.css">
    </head>
</html>


<?php require 'CONNECT.php';  
session_start();
?>


<?php require('fpdf.php'); ?>

<?php
class myPDF extends FPDF
{
    function header()
    {
        $this->Image('logo.png',80,10,40,40);
        $this->Ln(40);
    }
}
//$_SESSION["EMAIL"] = "swabhale@gmail.com";
error_reporting(0);
$EMAIL = $_SESSION["EMAIL"];
$sql = "SELECT * FROM ticket WHERE Email = '$EMAIL'";
$result = mysqli_query($conn,$sql);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $MOVIE_ID = $row['movie_id'];
        $THEATRE = $row['theatre'];
        $MOVIE_DATE = $row['movie_date'];
        $SEAT_NO = $row['seat_no'];
    }
}

 $sql2 = "SELECT * FROM movie WHERE MOVIE_ID = '$MOVIE_ID'";
 $result2 = mysqli_query($conn,$sql2);
if($result2)
{
    while($row2 = mysqli_fetch_assoc($result2))
    {
        $MOVIE_NAME = $row2['MOVIE_NAME'];
        $MOVIE_BANNER = $row2['MOVIE_BANNER'];
    }
}


$pdf = new myPDF();
$pdf->SetFont('courier','B',16);
$pdf->Cell(80);
$pdf->AddPage();
$pdf->setFillColor(0,0,0); 
$pdf->Cell(0,120,' ',1,1,'L',1); 
$pdf->SetFont('courier','B',16);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(190,-220,'BOOK MY MOVIE - E - TICKET',0,0,'C');
$pdf->Ln(5);
$pdf->Ln(20);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(227,-240,'SHOW DATE : ',0,0,'C');
$pdf->Cell(-160,-240,$MOVIE_DATE,0,0,'C');
$pdf->Ln(5);
$pdf->Cell(190,-90,$THEATRE,0,0,'C');
$pdf->Ln(5);
$pdf->SetTextColor(197,44,53);    
$pdf->Cell(220,-180,'MOVIE NAME',0,0,'C');
$pdf->Ln(5);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(235,-180,$MOVIE_NAME,0,0,'C');
$pdf->Ln(5);
$pdf->SetTextColor(197,44,53);    
$pdf->Cell(230,-240,'SEAT NUMBERS ',0,0,'C');
$pdf->Ln(2);
$pdf->SetTextColor(255,255,255);    
$pdf->Cell(225,-230,substr($SEAT_NO,1),0,0,'C');
$pdf->Ln(5);
$pdf->Image("./banners/" . $MOVIE_BANNER,20,70,60,80);
$pdf->Ln(5);

$pdf->Output('ticket.pdf','F');
?>

