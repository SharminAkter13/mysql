<?php
if(isset($_POST['deleted'])){
    $id_del =$_POST['deleted'];
    $del_query ="DELETE FROM net_profit WHERE id =$id_del";
    if(mysqli_query($profit_db,$del_query) == TRUE){
        header('location:table_mysql.php');
    }
}
?>