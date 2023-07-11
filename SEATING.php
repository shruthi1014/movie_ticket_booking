<?php include "CONNECT.php"; ?>

<?php
    session_start();
    
    $_SESSION["VAR"] = $_REQUEST['VAR'];
    $_SESSION["EMAIL"];
    $_SESSION["MOVIE_ID"];
    $E=$_SESSION["EMAIL"];
    $M=$_SESSION["MOVIE_ID"];
    $D=$_SESSION["VAR"];
    $SD = $_POST['MOVIE_DATE'];
    $_SESSION['MOVIE_DATE'] = $SD;

    include "CONNECT.php";
    $sql="SELECT seat_no FROM seats WHERE Email='$E' AND movie_id='$M' AND theatre='$D' AND movie_date='$SD'";
    
    $result=mysqli_query($conn,$sql);
    $data=array();
    $x=0;
    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
    {
        $data[$x++]=$row[0];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEATS</title>
    <link rel="stylesheet" type="text/css" href="SEAT.css">
</head>
<body>
    <h3 style="color:white"> TICKET PRICE = Rs.150 each </h3>
    <form action="validate_seating.php" method="POST" onsubmit="return seat_confirm()">
    <div class="line">
        <center><h3> THE SCREEN IS THIS WAY </h3>
        __________________________________________________________________________ </center>
    </div>
    <br><br><br><br>
    <table align="center" cellspacing="10" style="border-collapse:separate;border-spacing: 10px 17px;">
        <tr>
            <td class="rowname">A</td>
            <td class="seat" id="A1" value="A1" onclick="change('A1')">1</td>
            <td class="seat" id="A2" value="A2" onclick="change('A2')">2</td>
            <td class="seat" id="A3" value="A3" onclick="change('A3')">3</td>
            <td class="seat" id="A4" value="A4" onclick="change('A4')">4</td>
            <td class="seat" id="A5" value="A5" onclick="change('A5')">5</td>
            <td class="gap"></td>
            <td class="seat" id="A6" value="A6" onclick="change('A6')">6</td>
            <td class="seat" id="A7" value="A7" onclick="change('A7')">7</td>
            <td class="seat" id="A8" value="A8" onclick="change('A8')">8</td>
            <td class="seat" id="A9" value="A9" onclick="change('A9')">9</td>
            <td class="seat" id="A10" value="A10" onclick="change('A10')">10</td>
            <td class="seat" id="A11" value="A11" onclick="change('A11')">11</td>
            <td class="seat" id="A12" value="A12" onclick="change('A12')">12</td>
            <td class="seat" id="A13" value="A13" onclick="change('A13')">13</td>
            <td class="seat" id="A14" value="A14" onclick="change('A14')">14</td>
            <td class="seat" id="A15" value="A15" onclick="change('A15')">15</td>
            <td class="gap"></td>
            <td class="seat" id="A16" value="A16" onclick="change('A16')">16</td>
            <td class="seat" id="A17" value="A17" onclick="change('A17')">17</td>
            <td class="seat" id="A18" value="A18" onclick="change('A18')">18</td>
            <td class="seat" id="A19" value="A19" onclick="change('A19')">19</td>
            <td class="seat" id="A20" value="A20" onclick="change('A20')">20</td>
        </tr>
        <tr>
            <td class="rowname">B</td>
            <td class="seat" id="B1" value="B1" onclick="change('B1')">1</td>
            <td class="seat" id="B2" value="B2" onclick="change('B2')">2</td>
            <td class="seat" id="B3" value="B3" onclick="change('B3')">3</td>
            <td class="seat" id="B4" value="B4" onclick="change('B4')">4</td>
            <td class="seat" id="B5" value="B5" onclick="change('B5')">5</td>
            <td class="gap"></td>
            <td class="seat" id="B6" value="B6" onclick="change('B6')">6</td>
            <td class="seat" id="B7" value="B7" onclick="change('B7')">7</td>
            <td class="seat" id="B8" value="B8" onclick="change('B8')">8</td>
            <td class="seat" id="B9" value="B9" onclick="change('B9')">9</td>
            <td class="seat" id="B10" value="B10" onclick="change('B10')">10</td>
            <td class="seat" id="B11" value="B11" onclick="change('B11')">11</td>
            <td class="seat" id="B12" value="B12" onclick="change('B12')">12</td>
            <td class="seat" id="B13" value="B13" onclick="change('B13')">13</td>
            <td class="seat" id="B14" value="B14" onclick="change('B14')">14</td>
            <td class="seat" id="B15" value="B15" onclick="change('B15')">15</td>
            <td class="gap"></td>
            <td class="seat" id="B16" value="B16" onclick="change('B16')">16</td>
            <td class="seat" id="B17" value="B17" onclick="change('B17')">17</td>
            <td class="seat" id="B18" value="B18" onclick="change('B18')">18</td>
            <td class="seat" id="B19" value="B19" onclick="change('B19')">19</td>
            <td class="seat" id="B20" value="B20" onclick="change('B20')">20</td>
        </tr>
        <tr>
            <td class="rowname">C</td>
            <td class="seat" id="C1" value="C1" onclick="change('C1')">1</td>
            <td class="seat" id="C2" value="C2" onclick="change('C2')">2</td>
            <td class="seat" id="C3" value="C3" onclick="change('C3')">3</td>
            <td class="seat" id="C4" value="C4" onclick="change('C4')">4</td>
            <td class="seat" id="C5" value="C5" onclick="change('C5')">5</td>
            <td class="gap"></td>
            <td class="seat" id="C6" value="C6" onclick="change('C6')">6</td>
            <td class="seat" id="C7" value="C7" onclick="change('C7')">7</td>
            <td class="seat" id="C8" value="C8" onclick="change('C8')">8</td>
            <td class="seat" id="C9" value="C9" onclick="change('C9')">9</td>
            <td class="seat" id="C10" value="C10" onclick="change('C10')">10</td>
            <td class="seat" id="C11" value="C11" onclick="change('C11')">11</td>
            <td class="seat" id="C12" value="C12" onclick="change('C12')">12</td>
            <td class="seat" id="C13" value="C13" onclick="change('C13')">13</td>
            <td class="seat" id="C14" value="C14" onclick="change('C14')">14</td>
            <td class="seat" id="C15" value="C15" onclick="change('C15')">15</td>
            <td class="gap"></td>
            <td class="seat" id="C16" value="C16" onclick="change('C16')">16</td>
            <td class="seat" id="C17" value="C17" onclick="change('C17')">17</td>
            <td class="seat" id="C18" value="C18" onclick="change('C18')">18</td>
            <td class="seat" id="C19" value="C19" onclick="change('C19')">19</td>
            <td class="seat" id="C20" value="C20" onclick="change('C20')">20</td>
        </tr>
        <tr>
            <td class="rowname">D</td>
            <td class="seat" id="D1" value="D1" onclick="change('D1')">1</td>
            <td class="seat" id="D2" value="D2" onclick="change('D2')">2</td>
            <td class="seat" id="D3" value="D3" onclick="change('D3')">3</td>
            <td class="seat" id="D4" value="D4" onclick="change('D4')">4</td>
            <td class="seat" id="D5" value="D5" onclick="change('D5')">5</td>
            <td class="gap"></td>
            <td class="seat" id="D6" value="D6" onclick="change('D6')">6</td>
            <td class="seat" id="D7" value="D7" onclick="change('D7')">7</td>
            <td class="seat" id="D8" value="D8" onclick="change('D8')">8</td>
            <td class="seat" id="D9" value="D9" onclick="change('D9')">9</td>
            <td class="seat" id="D10" value="D10" onclick="change('D10')">10</td>
            <td class="seat" id="D11" value="D11" onclick="change('D11')">11</td>
            <td class="seat" id="D12" value="D12" onclick="change('D12')">12</td>
            <td class="seat" id="D13" value="D13" onclick="change('D13')">13</td>
            <td class="seat" id="D14" value="D14" onclick="change('D14')">14</td>
            <td class="seat" id="D15" value="D15" onclick="change('D15')">15</td>
            <td class="gap"></td>
            <td class="seat" id="D16" value="D16" onclick="change('D16')">16</td>
            <td class="seat" id="D17" value="D17" onclick="change('D17')">17</td>
            <td class="seat" id="D18" value="D18" onclick="change('D18')">18</td>
            <td class="seat" id="D19" value="D19" onclick="change('D19')">19</td>
            <td class="seat" id="D20" value="D20" onclick="change('D20')">20</td>        
        </tr>
        <tr>
            <td class="rowname">E</td>
            <td class="seat" id="E1" value="E1" onclick="change('E1')">1</td>
            <td class="seat" id="E2" value="E2" onclick="change('E2')">2</td>
            <td class="seat" id="E3" value="E3" onclick="change('E3')">3</td>
            <td class="seat" id="E4" value="E4" onclick="change('E4')">4</td>
            <td class="seat" id="E5" value="E5" onclick="change('E5')">5</td>
            <td class="gap"></td>
            <td class="seat" id="E6" value="E6" onclick="change('E6')">6</td>
            <td class="seat" id="E7" value="E7" onclick="change('E7')">7</td>
            <td class="seat" id="E8" value="E8" onclick="change('E8')">8</td>
            <td class="seat" id="E9" value="E9" onclick="change('E9')">9</td>
            <td class="seat" id="E10" value="E10" onclick="change('E10')">10</td>
            <td class="seat" id="E11" value="E11" onclick="change('E11')">11</td>
            <td class="seat" id="E12" value="E12" onclick="change('E12')">12</td>
            <td class="seat" id="E13" value="E13" onclick="change('E13')">13</td>
            <td class="seat" id="E14" value="E14" onclick="change('E14')">14</td>
            <td class="seat" id="E15" value="E15" onclick="change('E15')">15</td>
            <td class="gap"></td>
            <td class="seat" id="E16" value="E16" onclick="change('E16')">16</td>
            <td class="seat" id="E17" value="E17" onclick="change('E17')">17</td>
            <td class="seat" id="E18" value="E18" onclick="change('E18')">18</td>
            <td class="seat" id="E19" value="E19" onclick="change('E19')">19</td>
            <td class="seat" id="E20" value="E20" onclick="change('E20')">20</td>
        </tr>
    </table>
    <table align="center" cellspacing="10" style="border-collapse:separate;border-spacing: 10px 17px;">
        <tr>
            <td class="gaps"></td>
            <td class="rowname">F</td>
            <td class="seat" id="F1" value="F1" onclick="change('F1')">1</td>
            <td class="seat" id="F2" value="F2" onclick="change('F2')">2</td>
            <td class="seat" id="F3" value="F3" onclick="change('F3')">3</td>
            <td class="seat" id="F4" value="F4" onclick="change('F4')">4</td>
            <td class="seat" id="F5" value="F5" onclick="change('F5')">5</td>
            <td class="seat" id="F6" value="F6" onclick="change('F6')">6</td>
            <td class="seat" id="F7" value="F7" onclick="change('F7')">7</td>
            <td class="seat" id="F8" value="F8" onclick="change('F8')">8</td>
            <td class="seat" id="F9" value="F9" onclick="change('F9')">9</td>
            <td class="seat" id="F10" value="F10" onclick="change('F10')">10</td>
            <td class="gap"></td>
            <td class="seat" id="F11" value="F11" onclick="change('F11')">11</td>
            <td class="seat" id="F12" value="F12" onclick="change('F12')">12</td>
            <td class="seat" id="F13" value="F13" onclick="change('F13')">13</td>
            <td class="seat" id="F14" value="F14" onclick="change('F14')">14</td>
            <td class="seat" id="F15" value="F15" onclick="change('F15')">15</td>
            <td class="seat" id="F16" value="F16" onclick="change('F16')">16</td>
            <td class="seat" id="F17" value="F17" onclick="change('F17')">17</td>
            <td class="seat" id="F18" value="F18" onclick="change('F18')">18</td>
            <td class="seat" id="F19" value="F19" onclick="change('F19')">19</td>
            <td class="seat" id="F20" value="F20" onclick="change('F20')">20</td>
        </tr>
        <tr>
            <td class="gaps"></td>
            <td class="rowname">G</td>
            <td class="seat" id="G1" value="G1" onclick="change('G1')">1</td>
            <td class="seat" id="G2" value="G2" onclick="change('G2')">2</td>
            <td class="seat" id="G3" value="G3" onclick="change('G3')">3</td>
            <td class="seat" id="G4" value="G4" onclick="change('G4')">4</td>
            <td class="seat" id="G5" value="G5" onclick="change('G5')">5</td>
            <td class="seat" id="G6" value="G6" onclick="change('G6')">6</td>
            <td class="seat" id="G7" value="G7" onclick="change('G7')">7</td>
            <td class="seat" id="G8" value="G8" onclick="change('G8')">8</td>
            <td class="seat" id="G9" value="G9" onclick="change('G9')">9</td>
            <td class="seat" id="G10" value="G10" onclick="change('G10')">10</td>
            <td class="gap"></td>
            <td class="seat" id="G11" value="G11" onclick="change('G11')">11</td>
            <td class="seat" id="G12" value="G12" onclick="change('G12')">12</td>
            <td class="seat" id="G13" value="G13" onclick="change('G13')">13</td>
            <td class="seat" id="G14" value="G14" onclick="change('G14')">14</td>
            <td class="seat" id="G15" value="G15" onclick="change('G15')">15</td>
            <td class="seat" id="G16" value="G16" onclick="change('G16')">16</td>
            <td class="seat" id="G17" value="G17" onclick="change('G17')">17</td>
            <td class="seat" id="G18" value="G18" onclick="change('G18')">18</td>
            <td class="seat" id="G19" value="G19" onclick="change('G19')">19</td>
            <td class="seat" id="G20" value="G20" onclick="change('G20')">20</td>
        </tr>
        <tr>
            <td class="gaps"></td>
            <td class="rowname">H</td>
            <td class="seat" id="H1" value="H1" onclick="change('H1')">1</td>
            <td class="seat" id="H2" value="H2" onclick="change('H2')">2</td>
            <td class="seat" id="H3" value="H3" onclick="change('H3')">3</td>
            <td class="seat" id="H4" value="H4" onclick="change('H4')">4</td>
            <td class="seat" id="H5" value="H5" onclick="change('H5')">5</td>
            <td class="seat" id="H6" value="H6" onclick="change('H6')">6</td>
            <td class="seat" id="H7" value="H7" onclick="change('H7')">7</td>
            <td class="seat" id="H8" value="H8" onclick="change('H8')">8</td>
            <td class="seat" id="H9" value="H9" onclick="change('H9')">9</td>
            <td class="seat" id="H10" value="H10" onclick="change('H10')">10</td>
            <td class="gap"></td>
            <td class="seat" id="H11" value="H11" onclick="change('H11')">11</td>
            <td class="seat" id="H12" value="H12" onclick="change('H12')">12</td>
            <td class="seat" id="H13" value="H13" onclick="change('H13')">13</td>
            <td class="seat" id="H14" value="H14" onclick="change('H14')">14</td>
            <td class="seat" id="H15" value="H15" onclick="change('H15')">15</td>
            <td class="seat" id="H16" value="H16" onclick="change('H16')">16</td>
            <td class="seat" id="H17" value="H17" onclick="change('H17')">17</td>
            <td class="seat" id="H18" value="H18" onclick="change('H18')">18</td>
            <td class="seat" id="H19" value="H19" onclick="change('H19')">19</td>
            <td class="seat" id="H20" value="H20" onclick="change('H20')">20</td>
        </tr>
    </table>
    <br>
    <table id="choosen">

    </table>
    <input type="text" name="seat" id="seat"><br><br>
    <center><input type="submit" name="submit" id="SUB"></center>
</form>
    <script>
        var k;
        var count;
        function change(element){
            if(document.getElementById(element).style.backgroundColor=='green')
            {
                document.getElementById(element).style.backgroundColor='gainsboro';
                var nn=element+"ss";
                var ts=document.getElementById(nn);
                ts.parentNode.removeChild(ts);
            }
            else if(document.getElementById(element).style.backgroundColor=='red')
            {
                alert("Seat already taken");
            }
            else{
                document.getElementById(element).style.backgroundColor='green';
                var tr=document.createElement("tr");
                var name=element+"ss";
                tr.setAttribute("id",name);
                document.getElementById("choosen").appendChild(tr);
                var td=document.createElement("td");
                //td.setValue(element);
                var t=document.createTextNode(element);
                td.appendChild(t);
                tr.appendChild(td);
                document.getElementById("choosen").appendChild(tr);
            }
        }
        function seat_confirm()
        {
            document.getElementById("seat").value="";
            var tab=document.getElementById("choosen");
            for(var i=0;i<tab.rows.length;i++)
            {
                var objcells=tab.rows.item(i).cells;
                for(var j=0;j<objcells.length;j++)
                {
                    seat.value=seat.value+','+objcells.item(j).innerHTML;
                }
            }
        }
        function change_red()
        {
            k=<?php echo json_encode($data);?>;
            for(var j=0;j<k.length;j++)
            {
                var m=k[j].toString();
                document.getElementById(m).style.backgroundColor='red'
            }
        }
        const mytimeout=setTimeout(change_red)
    </script>
</body>
</html>