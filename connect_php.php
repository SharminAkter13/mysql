<?php
$link =  mysqli_connect("localhost","root","","cars" ); //mysqli_connet is updated version

if(!$link){
   die('Could not connect: ');
}
echo "<h2 style='color:green;text-align:center;font-size:16pt; '>Connected successfully</h2>";
?>