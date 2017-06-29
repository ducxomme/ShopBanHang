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