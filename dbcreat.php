<?php

echo "This Tutorial is All About Datatbase Creation <br>";


$servername ="localhost";
$username ="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if (!$conn) {
die("Sorry Failed To Connect: <br>".mysqli_connect_error());

}
echo "Connection sucessful....";

?>

