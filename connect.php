<?php
$servername="localhost";
$user="root";
$pass="";
$db="project";

$conn = mysqli_connect($servername,$user,$pass) or die("not connected".mysqli_error());
if(!$conn)
{
    echo"Not connected";
}
    mysqli_select_db($conn,$db);
?>