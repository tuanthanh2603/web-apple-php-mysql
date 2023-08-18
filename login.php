<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to admin</title>
    <link rel="stylesheet" href="./Css/login.css">
</head>
<body>
    <section>
  
        <div class="box">
          
          <div class="square" style="--i:0;"></div>
          <div class="square" style="--i:1;"></div>
          <div class="square" style="--i:2;"></div>
          <div class="square" style="--i:3;"></div>
          <div class="square" style="--i:4;"></div>
          <div class="square" style="--i:5;"></div>
          
         <div class="container"> 
          <div class="form"> 
            <h2>LOGIN to Admin</h2>
            <form action="" method="post">
              <div class="inputBx">
                <input type="text" required="required" name="userName" value="" >
                <span>Login</span>
                <i class="fas fa-user-circle"></i>
              </div>
              <div class="inputBx password">
                <input id="password-input" type="password" name="password" required="required">
                <span>Password</span>
                <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                <i class="fas fa-key"></i>
              </div>
              <label class="remember"><input type="checkbox">
                Remember</label>
              <div class="inputBx">
                <input type="submit" value="Login"  id="submit" onclick="validate()" name="dangnhap"> 
              </div>
            </form>

            <?php
              require_once("connect.php");
              if (isset($_POST["dangnhap"])){
                  $username = $_POST["userName"];
                  $password = $_POST["password"];
                  $username = strip_tags($username);
                  $username = addslashes($username);
                  $password = strip_tags($password);
                  $password = addslashes($password);
                 
                  if($username == "" || $password == ""){
                    echo "Khong duoc de trong !";
                  }
                  else{
                    
                    $sql = "select * from tbLogin where taikhoan = '$username' and matkhau = '$password' ";
                    $query = mysqli_query($conn, $sql);
                    $num_rows = mysqli_num_rows($query);
                    if($num_rows == 0){
                      echo "Username or Password is incorrect!";
                    }
                    else{
                      header('Location: admin.php');
                    }
                    
                  }
              }
              mysqli_close($conn);

            ?>

            <p>Forgot password? <a href="#">Click Here</a></p>
            
          </div>
        </div>
          
        </div>
      </section>
      <script src="./JS/login.js"></script>
</body>
</html>