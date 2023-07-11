<?php include "CONNECT.php"; ?>
<?php
    session_start();
    error_reporting(0);
    $arr=$_POST['seat'];
    $h=explode(',',$arr);
    for($i=1;$i<count($h);$i++)
    $mid=$_SESSION["MOVIE_ID"];
    $email=$_SESSION["EMAIL"];
    $theatre=$_SESSION["VAR"];
    $showdate=$_SESSION["MOVIE_DATE"];
    $_SESSION["NO_OF_SEATS"] = count($h) - 1;
    for($i=1;$i<count($h);$i++)
    {
        $r=$h[$i];
        $sql="INSERT INTO seats VALUES('$email','$mid','$theatre','$showdate','$r')";
        $result=mysqli_query($conn,$sql);
        if(!$result)
        echo "not inserted";
    }
    ?>


<?php
        $arr=$_POST['seat'];
        $sql="INSERT INTO ticket VALUES('$email','$mid','$theatre','$showdate','$arr')";
        $result=mysqli_query($conn,$sql);
        if(!$result)
        echo "not inserted";
?>




<html>
    <head>
        <link rel="stylesheet" type="text/css" href="VALIDATE.css">
        <script src="VALIDATE1.js"></script>
    </head>

    <body>
        <center>
            <img src="LOADING.gif" alt="LOADING" id="LOADING">
        <center>
    </body>
</html>




