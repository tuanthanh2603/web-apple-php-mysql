<?php
    include_once('connect.php');
    
    if(isset($_POST[''])){

    }
    else {
        $id = $_GET['iddonhang'];
        $sql_xoa = "DELETE FROM tbl_dathang WHERE id_khachhang='".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location: form-quanlydonhang.php');
    }
?>