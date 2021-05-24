<?php

$servername="localhost";
$username="root";
$password="";
$dbname="feedback_wtdbms";

$con= mysqli_connect($servername,$username,$password,$dbname);
if (!$con)
{
    die('could not connect:'.mysqli_error());
}

mysqli_select_db($con,"feedback_wtdbms");
if(isset($_POST['uploadfilesub'])) {
    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];
    $folder = 'uploadimage/';

    move_uploaded_file($filetmpname,$folder.$filename);

    $sql="INSERT INTO `assests`(`image_name`) VALUES ('$filename')";

    echo "Uploaded file..!";

}

?>
 
 
<!DOCTYPE html>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data" >
<input type="file" name="uploadfile" />
<input type="submit" name="uploadfilesub" value="upload" />
</form>
</body>
</html>