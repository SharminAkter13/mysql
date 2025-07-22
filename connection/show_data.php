<?php
$database = mysqli_connect("localhost","root","","cars" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <table class="table table-success table-striped">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Model</th>
      <th scope="col">Brand</th>
      <th scope="col">Color</th>
    </tr>
 
    <?php
    $cars_details = $database->query("select * from cars_details");
      while(list($id,$name,$model,$brand,$color)=  $cars_details->fetch_row()){
     
   echo  "<tr>
      <th>$id</th>
      <td>$name</td>
      <td>$model</td>
      <td>$brand</td>
      <td>$color</td>
    </tr>";
       
      }
      ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>