<?php
include('php_connect.php');

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
                <label for="formGroupExampleInput" class="form-label">Products</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="pproduct" value="<?php echo $product?>">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Sales Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="psales_price" value="<?php echo $sales?>" >
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Purchase Price</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="ppurchase_price"  value="<?php echo $purchase?>">
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