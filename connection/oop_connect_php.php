<?php
// object system 
$host ="localhost";
$user ="root";
$pass ="";
$dbname ="e_commerce";

$link = new mysqli($host,$user,$pass,$dbname ); //mysqli_connet is updated version

if($link->connect_error){
   die('Could not connect: ' .$link->connect_error);
}
echo "<h2 style='color:green;text-align:center;font-size:16pt; '>Connected successfully</h2>";
?>