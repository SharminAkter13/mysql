<?php
include('php_connect.php');

if(isset($_POST['submit'])){
    $pr = $_POST['pproduct'];
    $s = $_POST['psales_price'];
    $pp = $_POST['ppurchase_price'];
    $u = $_POST['punit'];
    $p = $_POST['pprofit'];


    $query ="INSERT INTO net_profit(product,sales_price,purchase_price,unit,profit) VALUES($pr,$s, $pp, $u,$p)";
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
    <title>Document</title>
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
        <h2 style="text-align: center; color:black;">Insert Products Profit </h2>
    <div class="container mt-5">
        <form action="">
            <fieldset>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Products</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="pproduct"  placeholder="Enter Product Name">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Sales Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="psales_price"  placeholder="Enter Sales Price">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Purchase Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="ppurchase_price"  placeholder="Enter Purchase Price">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Unit</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="punit"  placeholder="Total Unit">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Profit</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="pprofit"  placeholder="Profit">
                </div>
                <div class="mb-3">
                <input type="submit" class="form-control" id="formGroupExampleInput2" name="submit" value="Submit">
                </div>
            </fieldset>
        </form>
    </div>
    <div>
    <a href="form_insert.php"><button>Submit Data </button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>