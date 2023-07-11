<?php include "CONNECT.php"; ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="ADMIN.CSS">
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
        <br><br><br>
                <h2>INSERT MOVIE RECORDS</h2>
            <fieldset>
                <table>
                    <tr> <td>ENTER MOVIE ID :           </td>   <td><input type="text" name="MOVIE_ID">   <br><br> </td> </tr>
                    <tr> <td>ENTER MOVIE NAME :         </td>   <td><input type="text" name="MOVIE_NAME"> <br><br> </td> </tr>
                    <tr> <td>ENTER MOVIE LANGUAGE :     </td>   <td><input type="text" name="MOVIE_LANG"> <br><br> </td> </tr>
                    <tr> <td>ENTER MOVIE CERTIFICATION :</td>   <td><input type="text" name="MOVIE_CERT"> <br><br> </td> </tr>
                    <tr> <td>UPLOAD MOVIE BANNER :      </td>   <td><input type="file" name="MOVIE_BANNER"> <br><br> </td> </tr>   
                </table>
            </fieldset>
        
        <div class="DETAILS">
            <h2>INSERT MOVIE DETAILS</h2>
            <fieldset>
                <table>
                    <tr> <td>ENTER DIRECTOR NAME :      </td>   <td><input type="text" name="MOVIE_DIR">   <br><br> </td> </tr>
                    <tr> <td>ENTER MOVIE YEAR :         </td>   <td><input type="text" name="MOVIE_YEAR"> <br><br> </td> </tr>
                    <tr> <td>ENTER MOVIE TIME :         </td>   <td><input type="text" name="MOVIE_TIME"> <br><br> </td> </tr>
                    <tr> <td>ENTER GENRE :              </td>   <td><input type="text" name="MOVIE_GENRE"> <br><br> </td> </tr>
                    <tr> <td>ENTER DETAILS :            </td>   <td><input type="text" name="MOVIE_DETAILS"> <br><br> </td> </tr>
                    <tr> <td>UPLOAD MOVIE EXCERPT:      </td>   <td><input type="file" name="MOVIE_POSTER"> <br><br> </td> </tr>   
                </table>
            </fieldset>
        </div>
                    <br><br><br>
                    <center>
                        <input type="submit" name="SUBMIT" value="SUBMIT" id="submit">
                    </center>
        </form>
    </body>
</html>

<?php
if(isset($_POST['SUBMIT']))
{
    $MOVIE_ID = $_POST['MOVIE_ID'];
    $MOVIE_NAME = $_POST['MOVIE_NAME'];
    $MOVIE_LANG = $_POST['MOVIE_LANG'];
    $MOVIE_CERT = $_POST['MOVIE_CERT'];
    $MOVIE_DIR = $_POST['MOVIE_DIR'];
    $MOVIE_YEAR = $_POST['MOVIE_YEAR'];
    $MOVIE_TIME = $_POST['MOVIE_TIME'];
    $MOVIE_GENRE = $_POST['MOVIE_GENRE'];
    $MOVIE_DETAILS = $_POST['MOVIE_DETAILS'];

    $MOVIE_BANNER = $_FILES["MOVIE_BANNER"]["name"];
    $TEMP_NAME = $_FILES["MOVIE_BANNER"]["tmp_name"];
    $FOLDER = "./pdfGeneration/banners/" . $MOVIE_BANNER;

    $MOVIE_POSTER = $_FILES["MOVIE_POSTER"]["name"];
    $TMP_NAME = $_FILES["MOVIE_POSTER"]["tmp_name"];
    $FILE = "./Posters/" . $MOVIE_POSTER;

    $sql = "INSERT INTO MOVIE (MOVIE_ID,MOVIE_NAME,MOVIE_LANG,MOVIE_CERT,MOVIE_BANNER,MOVIE_DIR,MOVIE_YEAR,MOVIE_TIME,MOVIE_GENRE,MOVIE_DETAILS,MOVIE_POSTER) VALUES ('$MOVIE_ID','$MOVIE_NAME','$MOVIE_LANG','$MOVIE_CERT','$MOVIE_BANNER','$MOVIE_DIR','$MOVIE_YEAR','$MOVIE_TIME','$MOVIE_GENRE','$MOVIE_DETAILS','$MOVIE_POSTER')";


    if (mysqli_query($conn, $sql) && move_uploaded_file($TEMP_NAME, $FOLDER) && move_uploaded_file($TMP_NAME, $FILE)) 
    {
        echo '<script type="text/javascript">
                    alert("Record Inserted Successfully!!"); 
            </script>'; 
    } else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>