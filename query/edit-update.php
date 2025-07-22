<?php
include('php_connect.php');

if($_GET['id']){
    $_id =$_GET['id'];
    $read_query ="SELECT * FROM net_profit WHERE id=$_id";
    $rquery = mysqli_query($profit_db,$read_query);
    $data =mysqli_fetch_assoc($rquery);
    $id =$data['id'];
    $product =$data['pproduct'];
    $sales =$data['psales'];
    $purchase =$data['ppurchase'];
    $unit =$data['punit'];
    $profit =$data['pprofit'];
}

if (isset($_POST['submit'])) {
    $id =$_POST['id'];
    $product =$_POST['pproduct'];
    $sales =$_POST['psales'];
    $purchase =$_POST['ppurchase'];
    $unit =$_POST['punit'];
    $profit =$_POST['pprofit'];
    $update_query = "UPDATE net_profit SET
                 product='$product',
                 sales='$sales',
                 purchase='$purchase',
                 unit='$unit',
                 profit='$profit',
            where id = '$id' ";
    if (mysqli_query($profit_db, $update_query) == TRUE) {
        header('location:delete_field.php');
        echo "DATA update";
    } else {
        echo $sqli1 . "Data not update";
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
        <h2 style="text-align: center; color:black;">Insert Products Details </h2>
    <div class="container mt-5 bg-primary-subtle">
        <form action="" method="post">
            <fieldset>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" hidden>ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="id" value="<?php echo $id?>" hidden>
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Products</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="pproduct" value="<?php echo $product?>">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Sales Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="psales" value="<?php echo $sales?>" >
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Purchase Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="ppurchase"  value="<?php echo $purchase?>">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Unit</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="punit"  value="<?php echo $unit?>" >
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Profit</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="pprofit"  value="<?php echo $profit?>">
                </div>
                <div class="mb-3">
                <input type="submit" class="form-control" id="formGroupExampleInput2" name="submit" value="Re-submit">
                </div>
            </fieldset>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>