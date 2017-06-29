	<!-- <?php session_start(); ?> -->
    <?php  require "site/blocks/slidebar.html";?>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">New Products</h2>
                        <div class="product-carousel">
                            <?php  

                                $sql = "SELECT * FROM DIENTHOAI WHERE HOT = 1";
                                $res = $conn->query($sql);
                                while ($row = $res->fetch_assoc())
                                {
                                   
                                    echo "<div class='single-product'>";
                                        echo "<div class='product-f-image'>";
                                            echo "<img src='".$row['UrlHinh']."'>";
                                                echo "<div class='product-hover'>";
                                                    echo "<a href='database/addcart.php?id=".$row['IdDienThoai']."'"." class='add-to-cart-link'><i class='fa fa-shopping-cart'></i>Add to cart </a>";
                                                    echo "<a href='index.php?action=detailProduct&id=".$row['IdDienThoai']."'"." class='view-details-link'><i class='fa fa-link'></i> See details </a>";
                                                echo "</div>";
                                        echo "</div>";

                                        echo "<h2><a href='index.php?action=detailProduct&id=".$row['IdDienThoai']."'>".$row['TenDienThoai']."</a>"."</h2>";
                                        echo "<div class='product-carousel-price'>";
                                            echo "<ins>".number_format($row['DonGia'])." VNĐ"."</ins>";
                                        echo "</div>";
                                    echo "</div>";

                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php  
                            $sql = "SELECT * FROM DIENTHOAI WHERE HOT = 1";
                            $res = $conn->query($sql);
                            for ($i = 0; $i < 3; $i++){
                                $row = $res->fetch_assoc();
                                echo "<div class='single-wid-product'>
                                <a href='#'><img src='"
                                .$row['UrlHinh']."'class='product-thumb'></a>"
                                ."<h2><a href='index.php?action=detailProduct&id=".$row['IdDienThoai']."'>".$row['TenDienThoai']
                                ."</a></h2>"
                                ."
                                <div class='product-wid-rating'>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                            </div>
                            <div class='product-wid-price'>"
                            ."<ins>".number_format($row['DonGia'])." VNĐ"."</ins></div></div>";    
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php  
                            // include "connection.php";
                            $sql = "SELECT * FROM DIENTHOAI WHERE HOT = 1";
                            $res = $conn->query($sql);
                            for ($i = 0; $i < 3; $i++){
                                $row = $res->fetch_assoc();
                                echo "<div class='single-wid-product'>
                                <a href='#'><img src='"
                                .$row['UrlHinh']."'class='product-thumb'></a>"
                                ."<h2><a href='index.php?action=detailProduct&id=".$row['IdDienThoai']."'>".$row['TenDienThoai']
                                ."</a></h2>"
                                ."
                                <div class='product-wid-rating'>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                            </div>
                            <div class='product-wid-price'>"
                            ."<ins>".number_format($row['DonGia'])." VNĐ"."</ins></div></div>";    
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php  
                            // include "../../connection.php";
                            $sql = "SELECT * FROM DIENTHOAI WHERE HOT = 1";
                            $res = $conn->query($sql);
                            for ($i = 0; $i < 3; $i++){
                                $row = $res->fetch_assoc();
                                echo "<div class='single-wid-product'>
                                <a href='#'><img src='"
                                .$row['UrlHinh']."'class='product-thumb'></a>"
                                ."<h2><a href='index.php?action=detailProduct&id=".$row['IdDienThoai']."'>".$row['TenDienThoai']
                                ."</a></h2>"
                                ."
                                <div class='product-wid-rating'>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                            </div>
                            <div class='product-wid-price'>"
                            ."<ins>".number_format($row['DonGia'])." VNĐ"."</ins></div></div>";    
                            }

                            
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list" style="padding-top: 0px;">
                            <?php  
                                // include "connection.php";
                                $sql = "SELECT urlBieuTuong FROM HANGDIENTHOAI";
                                $res = $conn->query($sql);
                                while ($row = $res->fetch_assoc()) {
                                    echo "<img src='".$row['urlBieuTuong']."'>";
                                }
                            ?>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  
?>