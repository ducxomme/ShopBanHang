<div class="nav">
    <div class="navbar navbar-inverse">
    	<div class="col-md-12">
    	 	<ul class="nav navbar-nav">
    	 		<li>
                    <a href="index.php"><span class="glyphicon glyphicon-home"></span>Trang Chủ</a>
                </li> 
    	 			
    	 		<li class="dropdown">
                    <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">Điện Thoại  <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu">
                            <?php  
                                include "connection.php";
                                $sql = "SELECT * FROM HANGDIENTHOAI";
                                $res = $conn->query($sql);
                                while ($row = $res->fetch_assoc()){
                                    echo "<li><a href='?action=dienthoai&id=";
                                    echo $row['IdHang'];
                                    echo "'>".$row['TenHang'];
                                    echo "</a></li>";
                                }
                            ?>
                        </ul>
    	 		</li> 
					
				<li><a href="?action=maydoitra">Máy Đổi Trả</a></li> 
				<li><a href="#">Xả Hàng</a></li> 
				<li><a href="#">Khuyến Mãi</a></li> 
				<li><a href="#">Trả góp</a></li> 
				<li><a href="#">Góp ý</a></li> 
				<li><a href="#" style="padding-right: 5px;"><span class="glyphicon glyphicon-envelope"></span> Liên hệ</a></li>
                <li style="width: 400px;">
                <div class="navbar-right" style="margin-right: 5px; margin-left: 10px; margin-top: 0px;">
                </div>
                </li>
    	 	</ul>
    	</div>
    </div>   	    
</div>