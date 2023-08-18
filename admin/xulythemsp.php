<?php 
    include_once('connect.php');
    
    $tensanpham = $_POST['tensanpham'];
    $masanpham = $_POST['masanpham'];
    $chip = $_POST['chip'];
    $giasanpham = $_POST['giasanpham'];
    $motasanpham = $_POST['motasanpham'];
    $tinhtrang = $_POST['tinhtrang'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    

    
    

    if(isset($_POST['themsanpham'])){
        
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham, chip, masp, gia, hinhanh, motasp, tinhtrang) VALUE('".$tensanpham."', '".$chip."', '".$masanpham."', '".$giasanpham."', '".$hinhanh."', '".$motasanpham."', '".$tinhtrang."')";
        mysqli_query($conn, $sql_them);
        
        move_uploaded_file($hinhanh_tmp,'photo/'.$hinhanh);
        header('Location: form-quanlysanpham.php');
        
    }else if(isset($_POST[''])){
        
        if($_POST['hinhanh']){
            $sql_update = "UPDATE tbl_sanpham SET tensanpham= '$tensanpham',chip= '$chip',masp= '$masanpham',gia= '$giasanpham',hinhanh= '$hinhanh',
            motasp= '$motasanpham', tinhtrang= '$tinhtrang' WHERE id_sanpham='$_GET[idsanpham]'";
        }else{
            $sql_update = "UPDATE tbl_sanpham SET tensanpham= '$tensanpham',chip= '$chip',masp= '$masanpham',gia= '$giasanpham',
            motasp= '$motasanpham', tinhtrang= '$tinhtrang' WHERE id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query($conn,$sql_update);
        header('Location: ./form-quanlysanpham.php');

    } else {
        $id = $_GET['idsanpham'];
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location: form-quanlysanpham.php');
    }
    
?>