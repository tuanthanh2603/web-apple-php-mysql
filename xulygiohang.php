<?php
    session_start();
    include('connect.php');
    // cong so luong
    if(isset($_GET['cong'])){
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!= $id){
                $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'motasp'=>$cart_item['motasp']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong']<=9){
                    
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'motasp'=>$cart_item['motasp']);

                }else{
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'motasp'=>$cart_item['motasp']);
                }
                $_SESSION['cart'] = $product;
            }
            
        }
        header('Location: giohang.php?quanly=giohang');
    }
    // tru so luong
    if(isset($_GET['tru'])){
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!= $id){
                $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'motasp'=>$cart_item['motasp']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong']>1){
                    
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'motasp'=>$cart_item['motasp']);

                }else{
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'motasp'=>$cart_item['motasp']);
                }
                $_SESSION['cart'] = $product;
            }
            
        }
        header('Location: giohang.php?quanly=giohang');
    }
    // xoa san pham trong gio hang
    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'motasp'=>$cart_item['motasp']);
            }

            $_SESSION['cart'] = $product;
            header('Location: giohang.php?quanly=giohang');
        }
    }
    if(isset($_POST['themgiohang'])){
        $id = $_GET['idsanpham'];
        $soluong=1;
        $sql_giohang = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
        $query_giohang = mysqli_query($conn, $sql_giohang);
        $row_giohang = mysqli_fetch_array($query_giohang);
        if($row_giohang){
            $new_product = array(array('tensanpham'=>$row_giohang['tensanpham'],'chip'=>$row_giohang['chip'],'gia'=>$row_giohang['gia'],'hinhanh'=>$row_giohang['hinhanh'],'id'=>$id,'soluong'=>$soluong,'motasp'=>$row_giohang['motasp']));

            /// Kiểm tra giỏ hàng tồn tại

            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    // Dữ liệu trùng
                    if($cart_item['id']==$id){
                        $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'motasp'=>$cart_item['motasp']);
                        $found = true;
                    }else{
                        // Dữ liệu không trùng
                        $product[]= array('tensanpham'=>$cart_item['tensanpham'],'chip'=>$cart_item['chip'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'motasp'=>$cart_item['motasp']);
                        $_SESSION['cart'][] = $product;
                    }
                }
                if($found == false){
                    $_SESSION['cart']= array_merge($product, $new_product);
                }else{
                    $_SESSION['cart']= $product;
                }
            }else{
                $_SESSION['cart']= $new_product;
            }
        }
        header('Location: giohang.php?quanly=giohang');
    }



    function taodonhang($tenkhach,$email,$diachikhach,$sdtkhach,$total,$pttt){
        $connn = ketnoi();
        $sql_thanhtoan = "INSERT INTO tbl_dathang (tenkhachhang,email,diachi,dienthoai,total,pttt) 
        VALUES ('$tenkhach','$email','$diachikhach','$sdtkhach','$total','$pttt')";
        $connn->exec($sql_thanhtoan);
        $last_id = $connn->lastInsertId();
        $connn = null;
        return $last_id;
           
    
    }
    function ketnoi(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "web1";
        try {
            $connn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $connn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connn;
        } catch(PDOException $e){
            return $e->getMessage();
        }
    
    }
    function taogiohang($tensp, $hinhsp, $dongia, $soluong2, $thanhtien, $idbill){
        $connn= ketnoi();
        $sql_giohang = "INSERT INTO tbl_cart (tensp,hinhsp,dongia,soluong,thanhtien,idbill) VALUES ('$tensp','$hinhsp','$dongia','$soluong2','$thanhtien','$idbill')";
        $connn->exec($sql_giohang);
        $connn = null;
        
    }
?>