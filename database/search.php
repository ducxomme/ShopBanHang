<?php  
	if (isset($_POST['ok'])) {
		$search = addslashes($_POST['search']);
		{
			$sql = "SELECT * FROM DIENTHOAI WHERE TenDienThoai LIKE '%$search%'";
			$res = $conn->query($sql);
			$nums = $res->num_rows;

			if ($nums > 0 && $search != "") {
				echo "<br>";
				echo "$nums kết quả trả về với từ khóa <b>'$search'</b>";
				
				echo '<div class="single-product-area">';
    				echo '<div class="zigzag-bottom"></div>';
						echo '<div class="container">';
							echo '<div class="row">';
							    while ($row1 = $res->fetch_assoc())
							    {
							        echo '<div class="col-md-3 col-sm-6">';
							            echo '<div class="single-shop-product">';
							                echo '<div class="product-upper">';
							                    echo '<img src="'.$row1['UrlHinh'].'">';
							                echo '</div>';
							                echo "<h2><a href='index.php?action=detailProduct&id=".$row1['IdDienThoai']."'>".$row1['TenDienThoai']."</a></h2>";
							                echo '<div class="product-carousel-price">';
							                    echo '<ins>'.$row1['DonGia'].'</ins>';
							                echo '</div>';

							                echo '<div class="product-option-shop">';
							                    echo '<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="index.php?action=detailProduct&id='.$row1['IdDienThoai'].'">Add to cart</a>';
							                echo '</div>';
							            echo '</div>';
							        echo '</div>';  
							    }
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			}
		}
	}
?>