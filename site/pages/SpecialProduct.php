<div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php  
                            // include "connection.php";
                            $sql = "SELECT * FROM DIENTHOAI WHERE HOT = 1";
                            $res = $conn->query($sql);
                            for ($i = 0; $i < 3; $i++){
                                $row = $res->fetch_assoc();
                                echo "<div class='single-wid-product'>
                                <a href='#'><img src='"
                                .$row['UrlHinh']."'class='product-thumb'></a>"
                                ."<h2><a href='#'>".$row['TenDienThoai']
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
                            ."<ins>".$row['DonGia']." VNĐ"."</ins></div></div>";    
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
                                ."<h2><a href='#'>".$row['TenDienThoai']
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
                            ."<ins>".$row['DonGia']." VNĐ"."</ins></div></div>";    
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
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
                                ."<h2><a href='#'>".$row['TenDienThoai']
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
                            ."<ins>".$row['DonGia']." VNĐ"."</ins></div></div>";    
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>