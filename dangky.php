<title>Sign Up</title>


<?php
    include('header.php');
?>
<?php
session_start();
?>
<?php
include('connect.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center  gradient-custom-3">
    <div class="container ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="" style="border-radius: 15px; border: 1px solid #e6ecf0;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="" method="POST">

                <div class="form-outline mb-6">
                <label class="form-label" >Your Name</label>
                  <input type="text" name="tenkhach" class="form-control form-control-lg" />
                  
                </div>

                <div class="form-outline mb-6">
                <label class="form-label" >Your Email</label>
                  <input type="text" name="emailkhach" class="form-control form-control-lg" />
                  
                </div>

                <div class="form-outline mb-6">
                <label class="form-label" >Password</label>
                  <input type="password" name="matkhaukhach" class="form-control form-control-lg" />
                  
                </div>

                <div class="form-outline mb-6">
                <label class="form-label" >Number phone</label>
                  <input type="number" name="sdtkhach" class="form-control form-control-lg" />
                  
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" >Address</label>
                  <input type="text" name="diachikhach" class="form-control form-control-lg" />
                  
                </div>

                

                <div class="d-flex justify-content-center">
                  <input type="submit" name="dangky"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Sign Up">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>
              <?php 
                
                
                if(isset($_POST['dangky'])){
                  $tenkhachhang = $_POST['tenkhach'];
                  $email = $_POST['emailkhach'];
                  $dienthoai = $_POST['sdtkhach'];
                  $diachi = $_POST['diachikhach'];
                  $matkhau = $_POST['matkhaukhach'];

                  $sql_dangky = mysqli_query($conn, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."') ");
                  if($sql_dangky){
                  
                    
                    header('Location: giohang.php?quanly=giohang');
                    $_SESSION['dangky'] = $tenkhachhang;
                  }
                }
            ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>