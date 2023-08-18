<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../Css/admin.css">
</head>
<body>
<aside class="app-sidebar">
        
        <hr>
        <ul class="app-menu">
          <li><a class="app-menu__item haha" href="form-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
              <span class="app-menu__label">Bán Hàng</span></a></li>
              <li><a class="app-menu__item active" href="form-quanlysanpham.php"></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
          </li>
          
         
          
          <li><a class="app-menu__item " href="form-quanlydonhang.php"><span
                class="app-menu__label">Quản lý đơn hàng</span></a></li>
       
    
       
          <li><a class="app-menu__item" href="../admin.php"><span class="app-menu__label">Cài
                đặt hệ thống</span></a></li>
        </ul>
</aside>
<main class="app-content">
<div class="app-title">
          <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Sửa sản phẩm</b></a></li>
          </ul>
          
</div>
<div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">
     
                <?php 
                    include_once('connect.php');
                    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]'";
                    $query_sua_sp = mysqli_query($conn, $sql_sua_sp);
                ?>
                    <table style="width: 100%;" border="1" style="border-collapse: collapse;">
                    <?php
                        while($row = mysqli_fetch_array($query_sua_sp)){
                    ?>
                    <form method="post" action="" enctype="multipart/form-data">
                        
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>
                                <input type="text" value="<?php echo $row['masp']; ?>" name="masanpham">
                            </td>
                        </tr>
                        <tr>
                            <td>Tên sản phẩm</td>
                            <td>
                                <input type="text" value="<?php echo $row['tensanpham']; ?>" name="tensanpham">
                            </td>
                        </tr>
                        <tr>
                            <td>Chip</td>
                            <td>
                                <input type="text" value="<?php echo $row['chip']; ?>" name="chip">
                            </td>
                        </tr>
                        <tr>
                            <td>Giá sản phẩm ($)</td>
                            <td>
                                <input type="text" value="<?php echo $row['gia']; ?>" name="giasanpham">
                            </td>
                        </tr>
                        <tr>
                            <td>Hình ảnh</td>
                            <td>
                                <input type="file"  name="hinhanh">
                                <img src="./photo/<?php echo $row['hinhanh']; ?>" width="100px">
                            </td>
                        </tr>
                        <tr>
                            <td>Mô tả sản phẩm</td>
                            <td>
                                <textarea name="motasanpham" id="" cols="50" rows="10" ><?php echo $row['motasp']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Tình trạng</td>
                            <td>
                                <select name="tinhtrang" id="">
                                    <?php
                                        if($row['tinhtrang']==1){
                                    ?>
                                    <option value="1" selected>Kích hoạt</option>
                                    <option value="0">Ẩn</option>
                                    <?php
                                    }else{
                                    ?>
                                    <option value="1">Kích hoạt</option>
                                    <option value="0" selected>Ẩn</option>
                                    <?php 
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                
                                <input type="submit" value="Lưu lại" name="suasanpham" >
                                <a href="./form-quanlysanpham.php" class="btn btn-primary">Thoát</a>
                            </td>
                        </tr>

                    
                        
                    </form>
                    
                    <?php
                        }
                    ?>
                    </table>
                    <?php
                        include_once('connect.php');
                        if(isset($_POST['suasanpham'])){
                            $id = $_GET['idsanpham'];
                            $masanpham = $_POST['masanpham'];
                            $tensanpham = $_POST['tensanpham'];
                            $chip = $_POST['chip'];
                            $giasanpham = $_POST['giasanpham'];
                            
                            $mota = $_POST['motasanpham'];
                            $tinhtrang = $_POST['tinhtrang'];
                            $hinhanh = $_FILES['hinhanh']['name'];
                            $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

                            $query = "UPDATE tbl_sanpham SET tensanpham='$tensanpham',chip='$chip',masp='$masanpham',gia='$giasanpham',hinhanh='$hinhanh',motasp='$mota',tinhtrang='$tinhtrang' WHERE id_sanpham='$id' ";
                            $query_run = mysqli_query($conn, $query);
                            move_uploaded_file($hinhanh_tmp,'photo/'.$hinhanh);

                            if($query_run){
                                echo '<script> alert("Cập nhật thành công"); </script>';
                                header('Location: form-quanlysanpham.php');
                            }
                            else{
                                echo '<script> alert("Cập nhật thất bại"); </script>';
                            }
                        }
                    ?>
                
                    
              </div>
            </div>
        </div>
    </div>                  
            
   
   
</main>
</body>

</html>