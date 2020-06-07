<?php


// DB Connection 
$servername ="localhost";
$username ="root";
$password="";


$conn=mysqli_connect($servername,$username,$password);

// Crete A Db

$sql="CREATE DATABASE man";
mysqli_query($conn,$sql);



if (!$conn) {
die("Sorry Failed To Connect: <br>".mysqli_connect_error());

}
echo "Connection sucessful....";

?>

