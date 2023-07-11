<?php include "CONNECT.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" type="text/css" href="LOGIN.css">
</head>
<body align="center">
    <div class="register-form" align="center">
        <h1> REGISTERATION FORM </h1>
        <form action="" method="POST" onsubmit="return validate()">
        <table>
            <tr>
                <td><label for="username">Username:</td>  <td><input type="text" id="username" name="username"></label> </td> 
            </tr>
            <tr>
                <td><label for="password">Password:</td>  <td><input type="password" id="password" name="password"></label> </td> <br><br>
            </tr>
            <tr>
                <td><label for="confirm">Confirm Password:</td>  <td><input type="password" id="cpassword" name="cpassword"></label> </td> <br>
                <p id="cp"></p><br><br>
            </tr>
            <tr>
                <td><label for="email">Email:</td>  <td><input type="email" id="email" name="email"></label> </td> <br><br>
            </tr>
            <tr>
                <td><label for="phonenumber">Phone number:</td>  <td><input type="tel" id="phonenumber" name="phonenumber"></label> </td> <br><br>
                <p id="fill"></p><br>
            </tr>
        </table>
        <br>
        <input type="submit" class="lbtn" value="Register" name="REG">
        </form>
    </div>
    <script>
        function validate(){
            var u=document.getElementById("username").value;
            var p=document.getElementById("password").value;
            var e=document.getElementById("email").value;
            var t=document.getElementById("phonenumber").value;
            var c=document.getElementById("cpassword").value;
            var emailregex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var phonenumberregex=/^[1-9][0-9]{9}/;
            var passwordregex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/
            if(u=='' || p=='' || e=='' || t=='' || c==''){
                alert("Please fill all the details");
                return false;
            }
            else if(p!=c)
            {
                alert("Password not matched");
                return false;
            }
            else if(!e.match(emailregex))
            {
                alert("Enter a valid email id");
                return false;
            }
            else if(!t.match(phonenumberregex))
            {
                alert("Phone number pattern incorrect");
                return false;
            }
            else if(!p.match(passwordregex))
            {
                alert("Password must have atleast one lowercase,uppercase,digit,secial character and minimum of 8 charcters");
                return false;
            }
            return true;
        }

        function reset(){
            alert("resetted");
            document.getElementById("fill").innerHTML="";
            document.getElementById("cp").innerHTML="";
            return true;
        }
    </script>
</body>
</html>


<?php
if(isset($_POST['REG']))
{
    error_reporting(0);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $sql="SELECT username FROM credentials WHERE username='$username' AND pass='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        echo '<script type="text/javascript"
                    alert("ALREADY FILLED");
              </script>';
    }
    else{
        $sql="INSERT INTO credentials VALUES('$username','$password','$email','$phonenumber')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "Insertion done successfully";
            header('Location:LOGIN.php');
        }
        else{
            echo "not inserted";
        }
    }
}
?>