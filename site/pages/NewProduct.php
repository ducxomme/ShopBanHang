<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">New Products</h2>
                        <div class="product-carousel">
                            <?php  
                                // include "connection.php";
                                $sql = "SELECT * FROM DIENTHOAI WHERE HOT = 1";
                                $res = $conn->query($sql);
                                while ($row = $res->fetch_assoc()){
                                    echo "<div class='single-product'>";
                                        echo "<div class='product-f-image'>";
                                            echo "<img src='".$row['UrlHinh']."'>";
                                                echo "<div class='product-hover'>";
                                                    echo "<a href='#' class='add-to-cart-link'>";   
                                                        echo "<i class='fa fa-shopping-cart'></i>"
                                                            ."Add to cart </a>";
                                                            echo "<a href='action=detailProduct&id='".$row['IdDienThoai']."class='view-details-link'>";
                                                                echo "<i class='fa fa-link'></i> See details </a>"."</div>"."</div>";

                                    echo "<h2><a href='single-product.html'>".$row['TenDienThoai']."</a>"."</h2>";
                                    echo "<div class='product-carousel-price'>";
                                    echo "<ins>".$row['DonGia']." VNĐ"."</ins>"."</div>"."</div>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ?action=detailProduct&id='".$row['IdDienThoai'] -->