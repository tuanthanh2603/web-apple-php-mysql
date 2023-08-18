<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../Css/admin.css">
    <style>
      .g1{
        cursor: pointer;
        
        box-shadow: 0 2px tomato;
        padding: 1px;
        color:black;
        width: 30px;
      

      }
      .g1:hover{
        color: orangered;
        box-shadow:  0 2px yellow;
      }
    </style>
</head>
<body onload="time()" class="app sidebar-mini rtl">
    <header class="app-header">
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
          aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
    
          <li><a class="app-nav__item" href="../login.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>
          </li>
        </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <aside class="app-sidebar">
        
        <hr>
        <ul class="app-menu">
          <li><a class="app-menu__item haha" href="form-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
              <span class="app-menu__label">Bán Hàng</span></a></li>
              <li><a class="app-menu__item " href="form-quanlysanpham.php"></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
          </li>
          
         
          
          <li><a class="app-menu__item active" href="form-quanlydonhang.php"><span
                class="app-menu__label">Quản lý đơn hàng</span></a></li>
       
          
       
          <li><a class="app-menu__item" href="../admin.php"><span class="app-menu__label">Cài
                đặt hệ thống</span></a></li>
        </ul>
      </aside>

      <main class="app-content">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">
                <div class="row element-button">
                 
                 
                </div>

                <div class="card">
                <div class="card-body">

                    <?php
                require_once("connect.php");

                $query = "SELECT * FROM tbl_dathang";
                $query_run = mysqli_query($conn, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col"> Email</th>
                                <th scope="col"> Địa chỉ </th>
                                <th scope="col"> Số điện thoại </th>
                                <th scope="col"> Tổng tiền </th>
                                
                                <th scope="col"> VIEW </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
               <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_run)){
                    $i++;

               ?>
                        <tbody>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td> <?php echo $row['tenkhachhang']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['diachi']; ?> </td>
                                <td> <?php echo $row['dienthoai']; ?> </td>
                                <td> $<?php echo $row['total']; ?> </td>
                               
                                
                                <td>
                                    <a href="xemdonhang.php?chitietdonhang=<?php echo $row['id_khachhang'] ?>" class="btn btn-success" > VIEW </button>
                                </td>
                                <td>
                                    <a type="button" href="./deletedonhang.php?iddonhang=<?php echo $row['id_khachhang'] ?>" class="btn btn-danger "> DELETE </a>
                                </td>
                            </tr>
                        </tbody>
                    
                        <?php
                }
                        ?>
                    </table>
                </div>
            </div>
              
                
                    
                    
                  
              </div>
            </div>
          </div>
          
        </div>
      </main>
     
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php
                  require_once("connect.php");
                  $sql_lietke_dh = "SELECT * FROM tbl_cart ORDER BY id_cart DESC";
                  $query_lietke_dh = mysqli_query($conn, $sql_lietke_dh);
              ?>
              <table style="width: 100%;" border="1" style="border-collapse: collapse;">
                <tr>
                  <td>STT</td>
                  <td>Tên sản phẩm</td>
                  <td>Hình ảnh</td>
                  <td>Đơn giá</td>
                  <td>Số lượng</td>
                  <td>Thành tiền</td>
                </tr>
                <?php 
                  $i = 0;
                  while($row = mysqli_fetch_array($query_lietke_dh)){
                      $i++;
                ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <?php
                  }
                ?>
              </table>
              

            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    
   

      
      
      <script src="../JS/bootstrap.min.js"></script>
      <script src="../JS/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../JS/bootstrap.min.js"></script>
      <script type="text/javascript">
        $('#sampleTable').DataTable();
        //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
    </script>
    
   

    
</body>
</html>