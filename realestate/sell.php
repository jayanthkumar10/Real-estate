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

$files=$_FILES['file'];
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored)){
    $destinationfile='uploadimage/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
}
$sql="INSERT INTO `assests`(`property_id`, `city`, `area`, `price`, `bhk`, `address`, `description`, `name`, `contact_number`, `mail`, `image_name`) VALUES ('','$_POST[city]','$_POST[area]', '$_POST[price]', '$_POST[bhk]', '$_POST[address]', '$_POST[description]', '$_POST[name]','$_POST[contact_number]', '$_POST[mail]','$destinationfile')";
if(!mysqli_query($con,$sql))
{
    die('Error in posting values: '.mysqli_error($con));
}
echo "Successfully Registered in our database..!Will be sold soon";
mysqli_close($con)

?>