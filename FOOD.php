    <html>
    <head>
        <title>Book food</title>
        <link rel="stylesheet" type="text/css" href="FOOD.css">
        <script src="https://kit.fontawesome.com/c84fd45aeb.js" crossorigin="anonymous"></script>
        <script src="FOOD1.js"></script>
    </head>
    <body>
     <br>
      <center><h1>Food for the View!</h1><h3>Order delicious food while you enjoy the show</h3></center>
        <form action="" method="post">
            <table border=1 cellspacing=0 width="100%">
                <tr>
                    <th>FOOD</th>
                    <th>ITEM</th>
                    <th>COST</th>
                    <th>FOOD</th>
                    <th>ITEM</th>
                    <th>COST</th>
                    <th>FOOD</th>
                    <th>ITEM</th>
                    <th>COST</th>
                </tr>
            <tr>
                <td><img src="popcorn.jpg"></td>
                <td>Classic salt popcorn <br> <br> <center> <i class="fa-regular fa-square-minus" onclick=SUB1()> </i> <input type="text" name="data1" value="0" size="5" id="F1" >  <i class="fa-regular fa-square-plus" onclick=ADD1()></i></center></td>
                <td>₹30(60gm)</td>
                <td><img src="burger.jpg"></td>
                <td>Beetroot patty burger <br> <br><center> <i class="fa-regular fa-square-minus" onclick=SUB2()> </i> <input type="text" name="data2" value="0" size="5" id="F2" > <i class="fa-regular fa-square-plus" onclick=ADD2()></i></center></td>
                <td>₹60</td>
                <td><img src="Sandwich.jpg"></td>
                <td>Masala-cheese sandwich <br> <br><center> <i class="fa-regular fa-square-minus" onclick=SUB3()></i> <input type="text" name="data3" value="0" size="5" id="F3" > <i class="fa-regular fa-square-plus" onclick=ADD3()></i> </center></td>
                <td>₹50</td>
            </tr>
            <tr>
                <td><img src="fries.jpg"></td>
                <td>Fries <br> <br><center><i class="fa-regular fa-square-minus" onclick=SUB4()> </i> <input type="text" name="data4" value="0" size="5" id="F4" >  <i class="fa-regular fa-square-plus" onclick=ADD4()></i>  </center></td>
                <td>₹30</td>
                <td><img src="softdrinks.jpg"></td>
                <td>Thumbs Up <br> <br><center> <i class="fa-regular fa-square-minus" onclick=SUB5()> </i> <input type="text" name="data5" value="0" size="5" id="F5" > <i class="fa-regular fa-square-plus" onclick=ADD5()></i> </center></td>
                <td>₹40(750ml)</td>
                <td><b>!! SPECICAL COMBO !!</b></td>
                <td>Masala cheese Sandwich/Chicken Egg Sandwich+Fries+Fanta <br> <br><center>  <i class="fa-regular fa-square-minus" onclick=SUB6()> </i> <input type="text" name="data6" value="0" size="5" id="F6" > <i class="fa-regular fa-square-plus" onclick=ADD6()></i> </center><h4></h4></td>
                <td>₹110</td>
            </tr>
            </table>
            <br> <br>
            <center>
                <input type="submit" name="submit" value="SUBMIT" id="SUB">
            </center>
        </form>
    </body>
    </html>

    <?php
    if(isset($_POST['submit']))
    {
        session_start();
        $n1=$_POST['data1'];
        $n2=$_POST['data2'];
        $n3=$_POST['data3'];
        $n4=$_POST['data4'];
        $n5=$_POST['data5'];
        $n6=$_POST['data6'];
        
        $SEATS = $_SESSION["NO_OF_SEATS"];
        
        $total=($n1*30)+($n2*60)+($n3*50)+($n4*30)+($n5*40)+($n6*110)+($SEATS*150);

        
        $_SESSION['AMOUNT'] = $total;

        header('Location:BILL.php');
    }
    ?>