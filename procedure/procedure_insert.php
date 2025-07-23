<?php

include("oop_connect_php.php");

if(isset($_POST['submit'])){
    $pr = $_POST['cusername'];
    $s = $_POST['cemail'];
    $pp = $_POST['cpassword'];

    $link->query("call call_user('$pr','$s', '$pp')");


    $query ="INSERT INTO net_profit(products,sales_price,purchase_price,unit,profit) VALUES('$pr','$s', '$pp')";
    if(mysqli_query($profit_db,$query) == TRUE){
        echo "DATA SUBMITED";
        header('location:table_mysql.php');
    }else{
        echo "DATA NOT SUBMITED";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <style>
        fieldset{
            border: 1px solid black !important;
            padding: 30px !important;
            border-radius: 10px !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body>
        <h2 style="text-align: center; color:black;">Users Details </h2>
    <div class="container mt-5 bg-primary-subtle p-5 ">
        <form action="" method="post">
            <fieldset>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">cusername</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="pproduct"  placeholder="Enter Product Name">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">cemail</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="psales_price"  placeholder="Enter Sales Price">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">cpassword</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="ppurchase_price"  placeholder="Enter Purchase Price">
                </div>
                
                <div class="mb-3">
                <input type="submit" class="form-control" id="formGroupExampleInput2" name="submit" value="Submit">
                </div>
            </fieldset>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>