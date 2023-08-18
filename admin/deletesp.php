<?php
include_once('connect.php');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM tbSanPham WHERE idC='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Xoá thành công"); </script>';
        header("Location:form-quanlysanpham.php");
    }
    else
    {
        echo '<script> alert("Xoá thất bại"); </script>';
    }
}

?>