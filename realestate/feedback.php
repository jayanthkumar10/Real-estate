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
$sql="INSERT INTO `feedback` (`id`, `name`, `contact_number`, `rating`, `suggestions`) VALUES ('', '$_POST[name]', '$_POST[contact_number]', '$_POST[rating]', '$_POST[suggestions]')";
if(!mysqli_query($con,$sql))
{
    die('Error in posting values: '.mysqli_error($con));
}
echo "THANKS FOR THE FEEDBACK..!";
mysqli_close($con)

?>