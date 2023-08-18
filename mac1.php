<?php
    require_once("connect.php");
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }
    else{
        $begin = ($page * 4)-4;
    }
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tinhtrang=1 ORDER BY id_sanpham DESC LIMIT $begin,4 ";
    $query_pro = mysqli_query($conn, $sql_pro);
    
?>
<?php
    $sql_trang = mysqli_query($conn, "SELECT * FROM tbl_sanpham");
    $row_count = mysqli_num_rows($sql_trang);
    $trang = ceil($row_count/4);
?>
<ul>
    <?php
        for($i=1; $i<=$trang;$i++){
    ?>
    <a href="v1-mac.php?trang=<?php echo $i ?>" style="margin: 10px;"><?php echo $i ?></a>
    <?php
        }
    ?>
    
</ul>
<div class="item-container" style="height:600px;">
<div class="gallery-item notebooks " style="visibility: visible; z-index:2; opacity: 1; transform: translate(0px, 0px);">
        <div class="compare-table">
            
            
            <?php
                
                while($row = mysqli_fetch_array($query_pro)){
            ?>
                <div class=" device">
                            <a href="" class="image-wrapper">
                            <img src="./admin/photo/<?php echo $row['hinhanh'] ?>" width="183px" >
                            
                            </a>
                        <div class="device-content">
                            
                            <h3 class="typography-compare-eyebrow"> <?php echo $row['tensanpham'] ?></h3>
                            <span class="moustache typography-body-reduced"><?php echo $row['chip'] ?></span>
                            <p class="typography-body-reduced pricing has-dynamic-content">
                                <span class="">From $<?php echo $row['gia'] ?></span>
                            </p>
                        </div>
                        <br><br>
                        <div class=" links">
                            <a href="./chitietsanpham.php?chitietsp=<?php echo $row['id_sanpham']; ?>" class="button button-reduced">Buy</a>
                            <p>
                                <a href="" class="icon-wrapper typography-body-reduced">
                                    <span class="icon-copy">Learn more ></span>
                                    
                                </a>
                            </p>
                            <p></p>
                        </div>
                </div>
                
            <?php
            }
            ?>
                        
        
        </div>
        
</div>
</div>

