<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="Css/admin.css">
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
    
          <li><a class="app-nav__item" href="login.php"><i class='bx bx-log-out bx-rotate-180'></i> </a>
          </li>
        </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        
        <hr>
        <ul class="app-menu">
          <li><a class="app-menu__item haha" href="admin/form-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
              <span class="app-menu__label">Bán Hàng</span></a></li>
              <li><a class="app-menu__item " href="admin/form-quanlysanpham.php"></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
          </li>
         
         
          
          <li><a class="app-menu__item" href="admin/form-quanlydonhang.php"><span
                class="app-menu__label">Quản lý đơn hàng</span></a></li>
       
          
       
          <li><a class="app-menu__item active" href="#"><span class="app-menu__label">Cài
                đặt hệ thống</span></a></li>
        </ul>
      </aside>

      <main class="app-content">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Tài khoản đăng nhập</b></a></li>
            
          </ul>
          <div id="clock"></div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">
                
              <?php 
                require_once("connect.php");
                $sql1 = "SELECT * FROM tbLogin";
                $result1 = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1)>0){
                  echo '<table class="table">
                  <thead>
                    <tr>
                      <th>Tên đăng nhập</th>
                      <th>Mật khẩu</th>
                      <th>Tuỳ chỉnh</th>
                    </tr>
                  </thead>
                  <tbody>';
                  while($row = $result1->fetch_assoc()){
                    echo '
                    <tr>
                      <td>' .$row["taikhoan"]. '</td>
                      <td>' .$row["matkhau"]. '</td>
                      <td><a class="g1" href="deleteadmin.php?id= '.$row["id"]. '">Xoá</a>
                          
                    </tr>
                  ';
                  }
                  echo' </tbody>
                  </table>';
                } else
                echo "Khong ton tai!";

                mysqli_close($conn);
        ?>
                
                
              </div>
            </div>
          </div>
        </div>
        
<br><br>

       

              <input type="button" value="Thêm quản trị viên" class="btn btn-primary" onclick="window.location.href='addadmin.php'">
          
           
              
      </main>
      
      

    
</body>
</html>