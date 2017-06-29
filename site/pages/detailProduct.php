
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <!-- <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                    </div> -->
                    
                    <!-- <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div> -->
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index.php">Home</a>
                            <?php  
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM HANGDIENTHOAI WHERE IdHang IN   (SELECT IdHang FROM DIENTHOAI WHERE IdDienThoai = $id)";
                                $res = $conn->query($sql);
                                $row = $res->fetch_assoc();
                                echo '<a href="index.php?action=dienthoai&id='.$row['IdHang'].'">'.$row['TenHang'].'</a>';

                                $sql2 = "SELECT * FROM DIENTHOAI WHERE IdDienThoai = $id";
                                $res2 = $conn->query($sql2);
                                $row2 = $res2->fetch_assoc();
                                echo '<a href="#">'.$row2['TenDienThoai'].'</a>';
                            ?>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <?php  
                                            $id = $_GET['id'];
                                            $sql = "SELECT * FROM DIENTHOAI WHERE IdDienThoai = $id";
                                            $res = $conn->query($sql);
                                            $row = $res->fetch_assoc();
                                            echo "<img src='".$row['UrlHinh']."'>";
                                        ?>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <?php 
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM DIENTHOAI WHERE IdDienThoai = $id";
                                        $res = $conn->query($sql);
                                        $row = $res->fetch_assoc();
                                        echo '<h2 class="product-name">'.$row['TenDienThoai'].'</h2>';
                                        echo '<div class="product-inner-price">';
                                         
                                            
                                            echo "<ins>".number_format($row['DonGia'])." VND"."</ins>";
                                        ?>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <!-- <div class="product-inner-category">
                                        <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div>  -->
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

                                                <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <?php  
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM DIENTHOAI WHERE IdHang IN   (SELECT IdHang FROM DIENTHOAI WHERE IdDienThoai = $id)";
                                    $res = $conn->query($sql);
                                    while ($row = $res->fetch_assoc()){
                                        echo "<div class='single-product'>";
                                            echo "<div class='product-f-image'>";
                                                echo "<img src='".$row['UrlHinh']."'>";
                                                echo "<div class='product-hover'>";
                                                    echo "<a href='' class='add-to-cart-link'><i class='fa fa-shopping-cart'></i> Add to cart</a>";
                                                    echo "<a href='index.php?action=detailProduct&id=".$row['IdDienThoai']."' class='view-details-link'><i class='fa fa-link'></i> See details</a>";
                                                echo "</div>";
                                            echo "</div>";

                                            echo "<h2><a href=''>".$row['TenDienThoai']."</a></h2>";
                                            
                                            echo "<div class='product-carousel-price'";
                                                echo "<ins>".number_format($row['DonGia'])." VND </ins>";
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
    </div>

