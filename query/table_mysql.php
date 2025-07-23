<?php

include('php_connect.php');
include('delete_field.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h2 style="text-align: center; color:blue;">Products Profit List</h2>
        <table class="table table-primary table-striped-columns mt-5">
                <tr>
                    <th scope="col" class="text-center">Id</th>
                    <th scope="col" class="text-center">Products</th>
                    <th scope="col" class="text-center">Sales Price</th>
                    <th scope="col" class="text-center">Purchase Price</th>
                    <th scope="col" class="text-center">Unit</th>
                    <th scope="col" class="text-center">Profit</th>
                    <th scope="col" class="text-center" colspan="2">Action</th>
                </tr>
            <?php
                $net_profit = $profit_db->query("select * from net_profit");
                 while(list($id,$product,$sales,$purchase,$unit,$profit)=  $net_profit->fetch_row()){
     
                echo  "<tr>
                    <th class='text-center'>$id</th>
                    <td class='text-center'>$product</td>
                    <td class='text-center'>$sales</td>
                    <td class='text-center'>$purchase</td>
                    <td class='text-center'>$unit</td>
                    <td class='text-center'>$profit</td>
                    <td>
                        <a href='delete_field.php?deleteid=$id'><span style='display: flex; justify-content: center; align-items: center;'>  <i class='bi bi-trash-fill' title='Delete'></i>
</span></a>
                      
                    </td>
                    <td>
                        <a href='edit-update.php?id=$id'><span style='display: flex; justify-content: center; align-items: center;'> <i class='bi bi-pencil-square' title='Edit'></i></span></i></a>
                       
                    </td>
                    
                    </tr>";
                    
                    }
            ?>
        </table>
        
        <a href="form_insert.php"><button style="color:aliceblue;background-color:green;font-weight:bold;">Submit New Data </button></a>

    </div>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>