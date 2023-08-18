<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../Css/admin.css">
    
</head>
<body onload="time()" class="app sidebar-mini rtl">
    <header class="app-header">
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
          aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
    
    
          <!-- User Menu-->
          <li><a class="app-nav__item" href="../login.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>
    
          </li>
        </ul>
      </header>
      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
        
        <hr>
        <ul class="app-menu">
          <li><a class="app-menu__item haha" href="form-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
              <span class="app-menu__label">Bán Hàng</span></a></li>
              <li><a class="app-menu__item active" href="form-quanlysanpham.php"></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
          </li>
          
         
          
          <li><a class="app-menu__item" href="form-quanlydonhang.php"><span
                class="app-menu__label">Quản lý đơn hàng</span></a></li>
       
         
       
          <li><a class="app-menu__item" href="../admin.php"><span class="app-menu__label">Cài
                đặt hệ thống</span></a></li>
        </ul>
      </aside>
        <main class="app-content">
        <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Thêm mới sản phẩm</li>
        
      </ul>
      <div id="clock"></div>
    </div>
            <div class="row">
      <div class="col-md-12">
        <div class="tile">
          

          <table border="1" width="100%" style="border-collapse:collapse;">
            <form action="xulythemsp.php" method="post" enctype="multipart/form-data">
                <tr>
                  <td>Mã sản phẩm</td>
                  <td>
                    <input type="text" name="masanpham">
                  </td>
                </tr>
                <tr>
                  <td>Tên sản phẩm</td>
                  <td>
                    <input type="text" name="tensanpham">
                  </td>
                </tr>
                <tr>
                  <td>Chip</td>
                  <td>
                    <input type="text" name="chip">
                  </td>
                </tr>
                <tr>
                  <td>Giá sản phẩm</td>
                  <td>
                    <input type="number" name="giasanpham">
                  </td>
                </tr>
                <tr>
                  <td>Hình ảnh</td>
                  <td>
                    <input type="file" name="hinhanh">
                  </td>
                </tr>
                <tr>
                  <td>Mô tả sản phẩm</td>
                  <td>
                    <textarea name="motasanpham" id="" cols="30" rows="10"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>Tình trạng</td>
                  <td>
                      <select name="tinhtrang">
                          <option value="1">Kích hoạt</option>
                          <option value="0">Ẩn</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <input type="submit" name="themsanpham" value="Thêm sản phẩm">
                  </td>
                </tr>
            </form>
          </table>
          

        </div>
      </div>
    </div>

    <div class="app-title">
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
                </ul>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                  
                                    
                               <?php 
                                    require_once("connect.php");
                                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
                                    $query_lietke_sp = mysqli_query($conn, $sql_lietke_sp);
                               ?>

                               <table style="width: 100%;" border="1" style="border-collapse: collapse;">
                               
                                <tr>
                                    <th>STT</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Chip</th>
                                    <th>Giá</th>
                                    <th>Hình ảnh</th>
                                    <th>Mô tả sản phẩm</th>
                                    <th>Trạng thái</th>
                                    <th>Tuỳ chọn</th>
                                </tr>
                                <?php 
                                    $i = 0;
                                    while($row = mysqli_fetch_array($query_lietke_sp)){
                                        $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['masp'] ?></td> 
                                    <td><?php echo $row['tensanpham'] ?></td> 
                                    <td><?php echo $row['chip'] ?></td> 
                                    <td>$<?php echo $row['gia'] ?></td> 
                                    <td><img src="./photo/<?php echo $row['hinhanh'] ?>" width="100px"></td> 
                                    <td><?php echo $row['motasp'] ?></td> 
                                    <td><?php if ($row['tinhtrang']==1){
                                        echo 'Kích hoạt';
                                    }else{
                                        echo 'Ẩn';
                                    }
                                    
                                    ?></td> 
                                    <td>
                                      
                                      <a href="./xulythemsp.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a>   |   
                                      <a href="./editsanpham.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                                      
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                
                                </table>

                        </div>
                    </div>
                </div>
            </div>
            
            

              
              
        </main>
        

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