<?php include "CONNECT.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="M_DETAILS.css">
    <script src="https://kit.fontawesome.com/c84fd45aeb.js" crossorigin="anonymous"></script>
    <title>MOVIE</title>
</head>
<body>


<?php if(isset($_GET['M_ID']))  ?>
<?php
$VAR;
session_start();
$_SESSION['MOVIE_ID'] = $_GET['M_ID'];
$sql= "SELECT * FROM movie WHERE MOVIE_ID = ".$_GET['M_ID']."";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc()) 
                        {
?>
<div class="MOVIE_CARD" id="bright">
    <div class="INFO">
      <div class="MOVIE_H">
        <img class="BANNER" src="<?php echo $row["MOVIE_BANNER"] ?>"/>
        <h1><?php echo strtoupper($row["MOVIE_NAME"]) ?></h1> 
        <h4><?php echo strtoupper($row["MOVIE_YEAR"]) ?>, <?php echo $row["MOVIE_DIR"] ?></h4>
        <span class="TIME"><?php echo $row["MOVIE_TIME"] ?></span>
        <p class="GENRE"><?php echo $row["MOVIE_GENRE"] ?></p>
        <p class="GENRE"><?php echo $row["MOVIE_CERT"] ?></p>
      </div>
      <div class="MOVIE_DESC">
        <p class="DESC">
        <?php echo $row["MOVIE_DETAILS"] ?>
        </p>
      </div>
    </div>
    <div class="BLUR BLUR_BANNER" style="background-image: url('<?php echo $row["MOVIE_POSTER"] ?>');"">
    </div>
  </div>
<?php 
                        }
                    }
?>
  <div class="SHOWS">
    <div class="date">
        <br> <br>
        <form action="SEATING.php" method="post">
          SHOW DATES : &nbsp;&nbsp;&nbsp;<input type="date" name="MOVIE_DATE">
        </div>
            <table cellspacing="0">
                <tr>
                    <td>Cinepolis: BSR Mall, OMR, Thoraipakkam</td>
                    <td> <button type="submit" value="11:00, Cinepolis: BSR Mall, OMR, Thoraipakkam" name="VAR">11:00</td>
                    <td> <button type="submit" value="02:00, Cinepolis: BSR Mall, OMR, Thoraipakkam" name="VAR">02:00</td>
                    <td> <button type="submit" value="05:00, Cinepolis: BSR Mall, OMR, Thoraipakkam" name="VAR">05:00</td>
                </tr>
                <tr>
                    <td>INOX National: Arcot Road</td>
                    <td> <button type="submit" value="11:00, INOX National: Arcot Road" name="VAR">11:00</td>
                    <td> <button type="submit" value="02:00, INOX National: Arcot Road" name="VAR">02:00</td>
                    <td> <button type="submit" value="05:00, INOX National: Arcot Road" name="VAR">05:00</td>
                </tr>
                <tr>
                    <td>PVR: Ampa Mall, Nelson Manickam Road</td>
                    <td> <button type="submit" value="11:00, PVR: Ampa Mall, Nelson Manickam Road" name="VAR">11:00</td>
                    <td> <button type="submit" value="02:00, PVR: Ampa Mall, Nelson Manickam Road" name="VAR">02:00</td>
                    <td> <button type="submit" value="05:00, PVR: Ampa Mall, Nelson Manickam Road" name="VAR">05:00</td>
                </tr>
                <tr>
                    <td>PVR: Grand Mall, Velachery</td>
                    <td> <button type="submit" value="11:00, PVR: Grand Mall, Velachery" name="VAR">11:00</td>
                    <td> <button type="submit" value="02:00, PVR: Grand Mall, Velachery" name="VAR">02:00</td>
                    <td> <button type="submit" value="05:00, PVR: Grand Mall, Velachery" name="VAR">05:00</td>
                </tr>
                <tr>
                    <td>PVR: Heritage RSL ECR, Chennai</td>
                    <td> <button type="submit" value="11:00, PVR: Heritage RSL ECR, Chennai" name="VAR">11:00</td>
                    <td> <button type="submit" value="02:00, PVR: Heritage RSL ECR, Chennai" name="VAR">02:00</td>
                    <td> <button type="submit" value="05:00, PVR: Heritage RSL ECR, Chennai" name="VAR">05:00</td>
                </tr>
            </table>
    </div>
    </form>
  </body>
  </html>
