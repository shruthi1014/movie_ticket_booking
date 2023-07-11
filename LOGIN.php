<?php include "CONNECT.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="LOGIN.css">
</head>
<body align="center">
    <div class="login-form" align="center">
        <h1> LOGIN FORM </h1>
    <form action="" method="POST" onsubmit=" return validate();">
            <label for="email">EMAIL:  <input type="email" name="email" id="email"></label>
            <p id="user"></p>
            <br><br>
            <label for="password">Password:  <input type="password" name="password" id="password"></label>
            <p id="pass"></p>
            <input type="submit" value="LOGIN" name="LOGIN" class="lbtn">
            <input type="reset" value="RESET" class="lbtn"> <br> <br> 
            <a href="REGISTER.php" class="REG">REGISTER</a>
    </form>    
    </div>


    <script>
        function validate(){
            var u=document.getElementById("email").value;
            var p=document.getElementById("password").value;
            if(u=='' && p!=''){
            document.getElementById("user").innerHTML="Please enter email";
            document.getElementById("pass").innerHTML="";
            return false;}
            else if(u!='' && p==''){
            document.getElementById("pass").innerHTML="Please enter password";
            document.getElementById("user").innerHTML="";
            return false;}
            else if(u=='' && p=='')
            {
                document.getElementById("user").innerHTML="Please enter email";
                document.getElementById("pass").innerHTML="Please enter password";
                return false;
            }
            else
            return true;
        }
    </script>
</body>
</html>


<?php
if(isset($_POST['LOGIN']))
{
    error_reporting(0);
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION['EMAIL'] = $email;
    $sql="SELECT * FROM credentials WHERE email='$email' AND pass='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        header('Location:INDEX.php');
    }
    else{
        echo '<script type=text/javascript>
                    alert("CREDENTIALS WRONG !!");
              </script>';
    }
}
?>