<?php
    session_start();
?>
<?php
include('connect.php');
?>

<link rel="stylesheet" href="./Css/mac.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
<title>Bag</title>
<?php
    include('header.php');
?>

<div class="rs-bag">
    <div class="rs-bag-content as-l-container rs-zoom-content">
            <div class="large-8 small-12 rs-header-noborder">
                <h1 class="rs-bag-header">Review your bag.</h1>
                <div class="rs-bag-headermessage">
                     
                </div>
            </div>
            <ol class="rs-bag-items rs-iteminfos">
    <?php
        
        if(isset($_SESSION['cart'])){
            $i = 0;
            $tongtien = 0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong']*$cart_item['gia'];
                $tongtien += $thanhtien;
                $i++;
    ?>  
    <li class="rs-bag-items rs-iteminfo-wrap">
                            <div class="rs-iteminfo row1">
                                <div class="rs-iteminfo-image column large-3 small-12">
                                    <img width="400" height="400" src="./admin/photo/<?php echo $cart_item['hinhanh']; ?>" alt="" >
                                </div>
                                <div class="rs-iteminfo-content column large-9 small-12 mt-2">
                                    <div class="rs-iteminfo-details">
                                        <div class="rs-iteminfo-title-wrapper large-6 small-12">
                                            <h2 class="rs-iteminfo-title">
                                                <a href=""><?php echo $cart_item['tensanpham']; ?></a>
                                            </h2>
                                        </div>
                                        <div class=""><a href="xulygiohang.php?tru=<?php echo $cart_item['id'] ?>"> - </a> &ensp; <?php echo $cart_item['soluong']; ?> &ensp; <a href="xulygiohang.php?cong=<?php echo $cart_item['id'] ?>"> + </a></div>
                                        <div class="rs-iteminfo-pricedetails large-last">
                                            <div class="rs-iteminfo-price" >
                                                <p style="margin-top: 0;">From $<?php echo $thanhtien; ?></p>
                                            </div>
                                        </div>
                                        <div class="rs-iteminfo-pricelineitemwrapper">
                                            <div class="rs-summary-content rs-summary-iteminfopricelineitem">
                                                <div class="rs-summary-labelandvaluecontainer">
                                                    <div class="rs-summary-label"></div>
                                                    <div class="rs-summary-value">
                                                        <span class="nowrap">$<?php echo $cart_item['gia']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        
                                            <div class="rs-summary-content rs-summary-iteminfoactions">
                                                <div class="rs-summary-labelandvaluecontainer">
                                                    <div class="rs-summary-label">
                                                        <div class="rs-iteminfo-actions-left">
                                                            <button type="button" class="as-buttonlink rs-iteminfo-link" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Show product details</button>
                                                            <div class="collapse large-12" id="collapseExample">
                                                                <div class="card card-body" >
                                                                    <div class="rs-macdetails">
                                                                        <div>
                                                                            <h3 class="rs-macdetails-label list-title">Hardware</h3>
                                                                            <ul class="list large-6 small-12">
                                                                                <li><?php echo $cart_item['motasp']; ?></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rs-summary-value">
                                                        <div class="rs-iteminfo-actions-right">
                                                            <a type="button" class="rs-iteminfo-remove as-buttonlink" href="xulygiohang.php?xoa=<?php echo $cart_item['id'] ?>">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div data-core-fade-transition-wrapper class="rs-item-inline-recommendations r-fade-transition-enter-done">
                                        <div class="rs-inline-recommendation rs-iteminfo-child">
                                            <div class="row rs-iteminfo-child-content">
                                                <div class="column small-12 large-12 rs-iteminfo-child-details">
                                                    <div class="as-icondetails">
                                                        <div class="rs-iteminfo-child-image">
                                                            <img width="400" height="400" src="./img/v10.jpeg" aria-hidden="true" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="as-icondetails-details">
                                                        <h3 class="rs-iteminfo-child-title small-8 large-9">Add AppleCare+ for MacBook Air (M1) for 
                                                            <span class="nowrap">$199.00</span>
                                                        </h3>
                                                        <div class="rs-iteminfo-child-desc">
                                                            <p class="rs-iteminfo-child-tagline">Get up to three years of technical support and accidental damage protection.</p>
                                                            <a href="" class="rs-iteminfo-more-details-link more">Learn more</a>
                                                        </div>
                                                        <div class="column rs-iteminfo-child-actions large-3 small-4">
                                                            <button class="rs-iteminfo-child-actions-button as-buttonlink">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs-item-inline-child"></div>
                                    <div class="rs-item-fulfillment rs-iteminfo-child rs-has-delivery rs-has-pickup">
                                        <div class="rs-item-fulfillment-callout">
                                            <div class="rs-fulfillment-callout-title">
                                                <span class="rs-fulfillment-callout-title-text">Find out how soon you can get this item.</span>
                                                <button class="rs-edit-location-button as-buttonlink icon icon-after icon-chevrondown">Enter zip code</button>
                                            </div>
                                            <div></div>
                                        </div>
                                        <div class="rs-item-fulfillment-columns">
                                            <div class="rs-item-shipping rs-item-delivery as-icondetails">
                                                <div class="as-icondetails-icon as-svgicon-container">
                                                    <svg viewBox="0 0 25 25" class="as-svgicon as-svgicon-shipping as-svgicon-reduced as-svgicon-shippingreduced" role="img" aria-hidden="true" width="25px" height="25px">
                                                        <path fill="none" d="M0 0h25v25H0z"></path><path d="M19.69 7.154l-6-3.245a2.5 2.5 0 00-2.38 0l-6 3.245A2.5 2.5 0 004 9.354v6.269a2.5 2.5 0 001.311 2.2l6 3.245a2.5 2.5 0 002.379 0l6-3.245a2.5 2.5 0 001.31-2.2V9.354a2.5 2.5 0 00-1.31-2.2zm-7.9-2.365a1.492 1.492 0 011.427 0l6 3.244a1.454 1.454 0 01.151.11l-2.931 1.665-6.743-3.886zM8.661 6.48l6.768 3.9-2.929 1.666-6.864-3.9a1.456 1.456 0 01.151-.11zM5.787 16.941A1.5 1.5 0 015 15.622V9.354a1.5 1.5 0 01.053-.39L12 12.912v7.358a1.463 1.463 0 01-.213-.083zM20 15.622a1.5 1.5 0 01-.786 1.319l-6 3.245a1.5 1.5 0 01-.214.084v-7.358l6.947-3.949a1.508 1.508 0 01.053.391z"></path>
                                                    </svg>
                                                </div>
                                                <div class="as-icondetails-details">
                                                    <div class="rs-item-shipping-detail-line as-icondetails-value">Ships in 1-2 weeks</div>
                                                </div>
                                            </div> 
                                            <div class="rs-item-pickup as-icondetails">
                                                <div class="as-icondetails-icon as-svgicon-container">
                                                    <svg viewBox="0 0 25 25" class="as-svgicon as-svgicon-applestorepickup as-svgicon-reduced as-svgicon-applestorepickupreduced" role="img" aria-hidden="true" width="25px" height="25px">
                                                        <path fill="none" d="M0 0h25v25H0z"></path><path d="M18.5 5h-1.775a4.231 4.231 0 00-8.45 0H6.5A2.5 2.5 0 004 7.5v11A2.5 2.5 0 006.5 21h12a2.5 2.5 0 002.5-2.5v-11A2.5 2.5 0 0018.5 5zm-6-3a3.245 3.245 0 013.225 3h-6.45A3.245 3.245 0 0112.5 2zM20 18.5a1.5 1.5 0 01-1.5 1.5h-12A1.5 1.5 0 015 18.5v-11A1.5 1.5 0 016.5 6h12A1.5 1.5 0 0120 7.5z"></path><path d="M14.4 12.448a1.592 1.592 0 01.738-1.328 1.607 1.607 0 00-1.37-.687c-.52 0-.941.317-1.22.317s-.663-.3-1.129-.3a1.861 1.861 0 00-1.739 2.068 4.32 4.32 0 00.723 2.3c.346.491.648.883 1.084.883s.617-.287 1.144-.287c.55 0 .663.279 1.137.279s.791-.43 1.084-.853a3.24 3.24 0 00.474-.989 1.516 1.516 0 01-.926-1.403zM12.583 10.357a1.346 1.346 0 00.941-.5 1.594 1.594 0 00.361-.974.731.731 0 00-.008-.136 1.5 1.5 0 00-1.016.528 1.547 1.547 0 00-.384.943c0 .053.008.106.008.128.03.004.06.011.098.011z"></path>
                                                    </svg>
                                                </div>
                                                <div class="as-icondetails-details">
                                                    <span class="as-icondetails-value">Pick up at an Apple Store near you.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
    <?php
            }
    ?>
            </ol>
        <div class="rs-summary">
            <div class="large-9 large-offset-3 small-12 small-offset-0">
                <div class="rs-summary-content rs-summary-subtotal">
                    <div class="rs-summary-labelandvaluecontainer">
                        <div class="rs-summary-label">Subtotal</div>
                        <div class="rs-summary-value">$0</div>
                    </div>
                </div>
                <div class="rs-summary-content rs-summary-shipping">
                    <div class="rs-summary-labelandvaluecontainer">
                        <div class="rs-summary-label">Shipping</div>
                        <div class="rs-summary-value">FREE</div>
                    </div>
                </div>
                <div class="rs-summary-labelandvaluecontainer rs-summary-total">
                    <div class="rs-summary-label">Total</div>
                    <div class="rs-summary-value">$<?php echo $tongtien ?></div>
                </div>
                
            </div>
        </div>
        
                    

        <div class="row rs-bag-checkoutbutton-bottom">
            <div class="small-12 small-offset-0 large-9 large-offset-3 bt2">
                <div>
                    <h2 class="rs-bag-installment-actions-label">How would you like to check out?</h2>
                    <div class="row rs-bag-installment-actions">
                        <div class="rs-bag-actions-box-title">Pay in Full</div>
                        <br><br>
                        

                        <form action="" method="POST">

                                <div class="form-outline mb-6">
                                <label class="form-label" >Full name</label>
                                <input type="text" name="tenkhach" class="form-control form-control-lg" />
                                
                                </div>

                                <div class="form-outline mb-6">
                                <label class="form-label" >Email</label>
                                <input type="text" name="emailkhach" class="form-control form-control-lg" />
                                
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
                                    <!-- <input type="submit" name="xacnhan" class="btn btn-success   " value="Pay"> -->
                                    <input type="submit" name="xacnhan" class="btn btn-primary btn-block btn-lg gradient-custom-4 " style="width:400px;" value="Pay">
                                    
                                </div>

                                <div class="d-flex justify-content-center" style="margin-top: 20px;">

                                <!-- <input type="submit" name="dathang" class="btn btn-primary btn-block btn-lg gradient-custom-4 " style="width:400px;" value="Pay"> -->
                                
                                </div>



                        </form>
                        <?php
                            session_start();
                            include('xulygiohang.php');
                            if(isset($_POST['xacnhan'])&&($_POST['xacnhan'])){
                                $tenkhach = $_POST['tenkhach'];
                                $email = $_POST['emailkhach'];
                                $diachikhach = $_POST['diachikhach'];
                                $sdtkhach = $_POST['sdtkhach'];
                                $total = $tongtien;
                                $pttt=0;

                                $idbill=taodonhang($tenkhach,$email,$diachikhach,$sdtkhach,$total,$pttt);


                                // for($h=0; $h < sizeof($_SESSION['cart']); $h++){
                                //     $tensp=$_SESSION['cart'][$h][0];
                                //     $hinhsp=$_SESSION['cart'][$h][3];
                                //     $dongia=$_SESSION['cart'][$h][2];
                                //     $soluong2=$_SESSION['cart'][$h][5];
                                //     $thanhtien = $tongtien;
                                    
                                //     taogiohang($tensp, $hinhsp, $dongia, $soluong2, $thanhtien, $idbill);
                                // }
                                foreach($_SESSION['cart'] as $cart_item){
                                    $tensp= $cart_item['tensanpham'];
                                    $hinhsp=$cart_item['hinhanh'];
                                    $dongia=$cart_item['gia'];
                                    $soluong2=$cart_item['soluong'];
                                    $thanhtien = $cart_item['soluong']*$cart_item['gia'];
                                    
                                    taogiohang($tensp, $hinhsp, $dongia, $soluong2, $thanhtien, $idbill);
                                }
                                
                                echo '<script> alert("Đặt hàng thành công"); </script>';
                            }
                            
                            
                            
                            

                        ?>
                        
                        <!-- <a href="thanhtoan.php" type="button" class="btn btn-primary bt1" >Check Out</a> -->
                        
                        
                    </div>
                </div>
            </div>
        </div>
    
    <?php 
            
        }else{
    ?>
    <h5>Empty shopping cart</h5>
    <?php
        }
    ?>
            
                   

            
            
    </div>
</div>