<?php include "CONNECT.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="INDEX.css">
    <script src="https://kit.fontawesome.com/c84fd45aeb.js" crossorigin="anonymous"></script>
    <title>MAIN PAGE</title>
</head>
<body>

    <?php
        $sql = "SELECT * FROM MOVIE";
        $result = $conn->query($sql);
    ?>
    <div class="INFO">
        <marquee><b>Book the best shows around you !!</b></marquee>
    </div>

    <div class="NAV">
        <img id="LOGO" src="LOGO.png" >
    </div>
    <div class="NAV1">
        <h3>BOOK MY MOVIE</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="MENU" href="MOVIES.html">MOVIES</a>
        <a id="MENU" href="STREAMS.html">STREAMS</a>
        <a id="MENU" href="NEWS.html">NEWS</a>
        <a id="MENU" href="SPORTS.html">SPORTS</a>
        <i id="SICON" class="fa-solid fa-magnifying-glass fa-lg"></i>
        <input id="Search" type="text" placeholder="Search" size="30">
        <a href="chatbot.php"><i class="fa-solid fa-right-to-bracket" id="LOGIN">&nbsp;H E L P </i> </a>
    </div>

        <div class="slideshow">
            <marquee scrollamount="20"><img src="AVENGERS.jpg"> <img src="MAJOR.jpg">  <img src="TANHAJI.jpg"></marquee>
        </div>

    <div class="MOVIES">
        <h1>MOVIES</h1>
        <br> <br>
        <?php
                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        { 
        ?>
        <div class="card">
            <a href="M_DETAILS.php?M_ID=<?php echo $row["MOVIE_ID"] ?>" id="MOVCARD"><img src="<?php echo $row["MOVIE_BANNER"] ?>"></a>
                <p> <b><?php echo $row["MOVIE_NAME"] ?></b> <br><br>
                       <?php echo $row["MOVIE_LANG"] ?>     <br><br>
                       <?php echo $row["MOVIE_CERT"] ?>     <br><br>
                </p>
        </div>
        <?php
                        }
                    }
            ?>
</body>
</html>
