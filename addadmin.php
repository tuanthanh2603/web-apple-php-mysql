<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="Css/admin.css">
</head>
<body>
<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
              <li class="breadcrumb-item active"><a href="#"><b>Thêm quản trị viên</b></a></li>
              
            </ul>
            
          </div>

          
     
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  
                    <form action="" method="post" class="row">
                        <div class="form-group  col-md-3">
                            <label class="control-label">Tên đăng nhập</label>
                            <input class="form-control" type="text" name="userName">
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Mật khẩu</label>
                            <input class="form-control" type="text" name="password">
                        </div>
                        <div class="form-group  col-md-3" style="margin-top: 32px; margin-left: 40px;">
                            <input class="btn " type="submit" value="Tạo"  id="submit"  name="dangki"> 
                            <input class="btn " type="button" value="Thoát"  onclick="window.location.href='admin.php'"> 
                            
                        </div>
                    </form>
                    <?php
                      require_once("connect.php");
                      if(isset($_POST["dangki"])){
                        $username = $_POST["userName"];
                        $password = $_POST["password"];
                        $username = strip_tags($username);
                        $username = addslashes($username);
                        $password = strip_tags($password);
                        $password = addslashes($password);
                      }
                        if($username == "" || $password == ""){
                           echo "Vui lòng nhập đủ thông tin !";
                        }
                      
                        else{
                          $sql = "SELECT * FROM tbLogin WHERE taikhoan = '$username'";
                          $result = mysqli_query($conn, $sql);
                          if(mysqli_num_rows($result) > 0){
                            echo "Ten tai khoan da ton tai";
                            die();
                          } else{
                             $sql = "INSERT INTO tbLogin (taikhoan, matkhau) values('$username' ,'$password')";
                             $result = mysqli_query($conn, $sql);
                             echo "Tao thanh cong!";
                          }
                        }
                      
                      
                      mysqli_close($conn);
                    ?>

                </div>
              </div>
            </div>
          </div>
                
                
            
</body>
</html>

