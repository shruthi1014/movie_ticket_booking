<html>
<head>
<title>Feed back</title>
<style>
body{
background: #141414;
color:yellow;
}
input[type=submit]{
background-color:black;
color:white;
}
input[type=submit]:hover{
background-color:white;
color:purple;
}
footer
{
width=100%;
height:150px;
background-color:yellow;
color:purple;
}
</style>

</head>
<body>
<center><h1>Please provide your feed back!</h1></center>
<form method="post", action="feedbackphp.php">

<h4>Ease of booking:<input type="range" name="data1" id="eb1" min="0" max="5" onchange="show_value1(this.value)"> &nbsp<span id="slider_value1"></span></h4>

<h4>User Experience:<input type="range" name="data2" id="eb2" min="0" max="5" onchange="show_value2(this.value)"> &nbsp<span id="slider_value2"></span></h4>

<h4>How likely are you to recomend the application:<br><input type="range" name="data3" id="eb3" min="0" max="5" onchange="show_value3(this.value)"> &nbsp<span id="slider_value3"></span></h4>
<br><h4>Would you like to give any other Information:<br><textarea name="sugestion" style="width:400px;height:200px"></textarea></h4>
<input type="submit" name="submit">
</form>

<script type="text/javascript">
function show_value1(x)
{
 document.getElementById("slider_value1").innerHTML=x;
}
function show_value2(x)
{
 document.getElementById("slider_value2").innerHTML=x;
}
function show_value3(x)
{
 document.getElementById("slider_value3").innerHTML=x;
}
</script>
</body>
</html>



<?php
if(isset($_POST['submit']))
{
$n1=$_POST['data1'];
$n2=$_POST['data2'];
$n3=$_POST['data3'];
}
?>