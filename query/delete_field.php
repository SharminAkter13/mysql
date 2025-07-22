<?php
include('php_connect.php');

if(isset($_GET['deleteid'])){
    $id_del =$_GET['deleteid'];
    $del_query ="DELETE FROM net_profit WHERE id =$id_del";
    if(mysqli_query($profit_db,$del_query) == TRUE){
        header('location:table_mysql.php');
    }
}
?>