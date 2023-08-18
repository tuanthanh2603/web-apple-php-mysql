<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="./Css/mac.css">
</head>
<body>
    <?php
        include('header.php');
    ?>
    <?php
        include_once('connect.php');
        $idct = $_GET['chitietsp'];
        $query_ctsp = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE id_sanpham='$idct'");
        $rowct = mysqli_fetch_assoc($query_ctsp);
    ?>
    <!-- Phần thân -->
    <form method="POST" action="xulygiohang.php?idsanpham=<?php echo $rowct['id_sanpham'] ?>">
        <div class="row  as-l-container rf-configuration-container">
        
            <div class="column large-6 small-12 rs-cto-side-panel">
                <div class="rf-configuration-sticky">
                    <img src="./admin/photo/<?php echo $rowct['hinhanh'] ?>" alt="" width="539" height="312" class="rf-configuration-hero-image">
                    <div class="rf-configuration-viewgallery typography-body-reduced">
                        <button class="as-buttonlink rf-configuration-viewgallerybtn">View gallery</button>
                    </div>
                    <div class="rf-flagship-buystrip">
                        <ul class="row as-buystrip">
                            <li class="column small-12 as-buystrip-item">
                                <div class="as-svgicon-container">
                                    <svg viewBox="0 0 35 35" class="as-svgicon as-svgicon-shipping as-svgicon-base as-svgicon-shippingbase" role="img" aria-hidden="true" width="35px" height="35px">
                                        <path fill="none" d="M0 0h35v35H0z"></path>
                                        <path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748v9.471a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-4.538 2.446l9.651 5.566-4.4 2.5-9.823-5.58c.038-.026.07-.059.111-.081zM7.788 23.539A1.5 1.5 0 017 22.219v-9.471a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="as-buystrip-title">
                                    <span>Get free delivery, or pick up available items at an Apple Store</span>
                                </p>
                            </li>
                            <li class="column small-12 as-buystrip-item">
                                <div class="as-svgicon-container">
                                    <svg viewBox="0 0 35 35" class="as-svgicon as-svgicon-return as-svgicon-base as-svgicon-returnbase" role="img" aria-hidden="true" width="35px" height="35px">
                                        <path fill="none" d="M0 0h35v35H0z"></path>
                                        <path d="M12.249 9.022l-4.461 2.4c-.041.022-.073.055-.111.081l9.823 5.588 4.4-2.5zM27.322 11.507c-.038-.025-.069-.058-.11-.081l-9-4.852a1.5 1.5 0 00-1.424 0l-3.5 1.889 9.628 5.55zM10.8 18.5a.5.5 0 01-.5.5H7v3.219a1.5 1.5 0 00.788 1.32l9 4.852a1.494 1.494 0 00.212.082V17.957l-9.931-5.645a1.494 1.494 0 00-.069.436V18h3.3a.5.5 0 01.5.5zM18 17.957v10.515a1.481 1.481 0 00.212-.082l9-4.851a1.5 1.5 0 00.788-1.32v-9.471a1.5 1.5 0 00-.069-.436z" fill="none"></path>
                                        <path d="M27.687 10.547l-9-4.852a2.5 2.5 0 00-2.373 0l-9 4.852A2.5 2.5 0 006 12.748V17h1v-4.252a1.494 1.494 0 01.069-.436L17 17.957v10.516a1.494 1.494 0 01-.212-.082l-9-4.852A1.5 1.5 0 017 22.219V20H6v2.219a2.494 2.494 0 001.313 2.2l9 4.852a2.5 2.5 0 002.373 0l9-4.852a2.5 2.5 0 001.314-2.2v-9.471a2.5 2.5 0 00-1.313-2.201zm-10.9-3.971a1.5 1.5 0 011.424 0l9 4.852c.041.022.072.055.11.081l-4.41 2.507-9.628-5.55zm-9.11 4.932c.038-.026.07-.059.111-.081l4.461-2.4 9.651 5.561-4.4 2.5zM28 22.219a1.5 1.5 0 01-.788 1.32l-9 4.851a1.481 1.481 0 01-.212.082V17.957l9.931-5.646a1.5 1.5 0 01.069.436z">
                                        </path>
                                        <path d="M2.507 18l1.646-1.646a.5.5 0 00-.707-.707l-2.5 2.5a.5.5 0 000 .707l2.5 2.5a.5.5 0 10.707-.707L2.507 19H6v-1zM10.3 19a.5.5 0 000-1H7v1zM6 18h1v1H6z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="as-buystrip-title">
                                    <span>Free and easy returns</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rf-flagship-chatcontent">
                        <div class="as-chat as-chat-buyflow">
                            <div class="as-svgicon-container">
                                <svg viewBox="0 0 35 35" class="as-svgicon as-svgicon-chat as-svgicon-base as-svgicon-chatbase" role="img" aria-hidden="true" width="35px" height="35px">
                                    <path fill="none" d="M0 .213h35v35H0z"></path>
                                    <path d="M14.4 21.048a13.284 13.284 0 01-1.344.076q-.411 0-.829-.025l-.334-.02-.279.185a15.461 15.461 0 01-4.388 2.109 16.182 16.182 0 001.365-2.054l.484-.923-.941-.446a7.127 7.127 0 01-4.384-6.276c0-4.114 4.274-7.461 9.529-7.461s9.529 3.347 9.529 7.461c0 .059-.009.116-.011.174.33-.029.664-.046 1-.046 0-.043.008-.085.008-.128 0-4.677-4.67-8.461-10.529-8.461S2.75 9 2.75 13.674a8.1 8.1 0 004.95 7.181 18.048 18.048 0 01-1.573 2.305c-.481.6-.236 1.28.613 1.28 1.17 0 3.557-1.1 5.425-2.343q.448.027.888.027c.455 0 .9-.028 1.34-.069-.011-.157-.029-.312-.029-.472 0-.183.018-.357.036-.535z"></path>
                                    <path d="M32.25 21.583c0-3.749-3.745-6.782-8.443-6.782h-.1c-.351 0-.694.027-1.032.063-3.876.413-6.886 2.906-7.269 6.036a5.584 5.584 0 00-.042.678c0 .117.015.23.021.345.222 3.737 3.994 6.428 8.6 6.428.235 0 .473-.007.712-.021a10.723 10.723 0 004.35 1.878c.681 0 .878-.543.492-1.026a14.459 14.459 0 01-1.263-1.848 6.5 6.5 0 003.974-5.751zm-4.4 4.852l-.942.446.484.923a10.673 10.673 0 00.759 1.2 14.28 14.28 0 01-2.9-1.5l-.279-.185-.334.02c-.219.013-.437.019-.653.019-4.21 0-7.515-2.462-7.614-5.629 0-.048-.009-.1-.009-.144a4.521 4.521 0 01.1-.922c.5-2.386 2.87-4.288 5.908-4.75a9.506 9.506 0 011.092-.1c.113 0 .225-.013.339-.013 4.1 0 7.443 2.594 7.443 5.782a5.517 5.517 0 01-3.394 4.853z"></path>
                                </svg>
                            </div>
                            <div class="as-chat-buyflow-container">
                                <div class="as-chat-buyflow-title">Have questions about buying a Mac?</div>
                                <div class="as-chat-buyflow-content">
                                    <a href="" class="as-chat-button active as-buttonlink">Chat with a Mac Specialist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column large-6 small-12 rs-cto-main-panel">
            <div class="rf-configuration-header typography-manifesto">
                    <h1 class="rf-configuration-maintitle typography-headline-reduced"> <?php echo $rowct['tensanpham'] ?></h1>
                </div>
                <div class="rf-configuration-productsummary">
                    <div>
                        <ul class="rf-configuration-subheader typography-body-reduced">
                            <li><?php echo $rowct['motasp'] ?></li>
                            
                            
                        </ul>
                    </div>
                </div>
        
                
                <div class="rf-tradeupbanner">
                    <section class="rf-tradeupbanner-content">
                        <h2 class="rf-tradeupbanner-header">
                            <span>Apple Trade In</span>
                        </h2>
                        <div class="rf-tradeupbanner-message-row">
                            <div class="rf-tradeupbanner-message">
                                <div class="rf-tradeupbanner-message-desc">
                                    <span>
                                        Get credit toward a new Mac when you trade in your eligible computer. Or recycle it for free.<sup>◊◊</sup>
                                    </span>
                                </div>
                            </div>
                            <div class="rf-tradeupbanner-actions">
                                <button class="as-buttonlink rf-tradeupbanner-button rf-tradeupbanner-focus-add">
                                    <span>Get started</span>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
                 <!-- <div class="rf-configuration-main">
                    <div class="rf-configuration-categoryhardware">
                        <div class="rf-configuration-optiongroup">
                            <h3 class="rf-configuration-optiongroup-header typography-body">
                                <span>Memory</span>
                            </h3>
                            <button class="as-buttonlink typography-body-reduced rf-configuration-learnmorebtn">
                                <span>How much memory is right for you?</span>
                            </button>
                            <div class="row form-selector-group">
                                <div class="middle">
       
                                    <label>
                                    <input type="radio" name="radio" checked/>
                                    <div class="front-end box">
                                      <span>8GB unified memory</span>
                                    </div>
                                  </label>
                                  
                                    <label>
                                    <input type="radio" name="radio"/>
                                    <div class="back-end box">
                                      <span>16GB unified memory</span>
                                    </div>
                                  </label>
                                   
                                </div>
                                
                            </div>
                        </div>

                        <div class="rf-configuration-optiongroup">
                            <h3 class="rf-configuration-optiongroup-header typography-body">
                                <span>Storage</span>
                            </h3>
                            <button class="as-buttonlink rf-configuration-learnmorebtn typography-body-reduced">
                                <span>How much storage is right for you?</span>
                            </button>
                            <div class="row form-selector-group">
                                <div class="middle1">
       
                                    <label>
                                    <input type="radio" name="radio1" checked/>
                                    <div class=" box1">
                                      <span>256GB SSD storage</span>
                                    </div>
                                  </label>
                                  
                                    <label>
                                    <input type="radio" name="radio1"/>
                                    <div class=" box1">
                                      <span>512GB SSD storage</span>
                                    </div>
                                  </label>

                                  <label>
                                    <input type="radio" name="radio1"/>
                                    <div class=" box1">
                                      <span>1TB SSD storage</span>
                                    </div>
                                  </label>

                                  <label>
                                    <input type="radio" name="radio1"/>
                                    <div class=" box1">
                                      <span>2TB SSD storage</span>
                                    </div>
                                  </label>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>  -->
    
        
            </div>
        </div>
  
    <!-- Phần hiện tiền  -->
        <div class="rf-cto-summary">
            <div class="as-l-container row rf-cto-summarywrapper">
                <div class="rf-cto-summary-fulfillment column large-6">
                    <div class="rf-fulfilment-quote row">
                        <div class="rf-dude-quote column large-7 rf-dude-quote-default as-icondetails as-icondetails-topicon">
                            <span class="as-icondetails-icon1 as-svgicon-container rf-dude-quote-icon" >
                                <svg viewBox="0 0 25 25" class="as-svgicon as-svgicon-shipping as-svgicon-reduced as-svgicon-shippingreduced" role="img" aria-hidden="true" width="25px" height="25px"><path fill="none" d="M0 0h25v25H0z"></path><path d="M19.69 7.154l-6-3.245a2.5 2.5 0 00-2.38 0l-6 3.245A2.5 2.5 0 004 9.354v6.269a2.5 2.5 0 001.311 2.2l6 3.245a2.5 2.5 0 002.379 0l6-3.245a2.5 2.5 0 001.31-2.2V9.354a2.5 2.5 0 00-1.31-2.2zm-7.9-2.365a1.492 1.492 0 011.427 0l6 3.244a1.454 1.454 0 01.151.11l-2.931 1.665-6.743-3.886zM8.661 6.48l6.768 3.9-2.929 1.666-6.864-3.9a1.456 1.456 0 01.151-.11zM5.787 16.941A1.5 1.5 0 015 15.622V9.354a1.5 1.5 0 01.053-.39L12 12.912v7.358a1.463 1.463 0 01-.213-.083zM20 15.622a1.5 1.5 0 01-.786 1.319l-6 3.245a1.5 1.5 0 01-.214.084v-7.358l6.947-3.949a1.508 1.508 0 01.053.391z"></path></svg>
                            </span>
                            <div class="rf-dude-quote-info">
                                <span class="rf-dude-quote-label">Ships:</span>
                                <ul class="rf-dude-quote-delivery-message-list">
                                    <li class="rf-dude-quote-delivery-promo">
                                        <span>Free Shipping</span>
                                    </li>
                                    <li class="rf-dude-quote-delivery-promo">
                                       <a href="">Get delivery dates</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>
                <div class="rf-cto-summary-purchaseinfo column large-6 justify-content-end">
                    <div>
                        <div class="rc-prices rc-prices-lead-with-full-price">
                            <div class="rc-prices-currentprice">
                                <span class="rc-prices-fullprice">From $<?php echo $rowct['gia'] ?></span>
                                <span class="rc-prices-fullprice">or</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" class="button button-block" name="themgiohang" value="Add to Bag">
                        
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </form>

    
</body>
</html>