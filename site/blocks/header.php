<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i>Tài khoản của
                                    tôi: 
                                    <?php if (isset($_SESSION['Email'])) {
                                        echo $_SESSION['Email'];
                                    } ?> 
                                </a>
                            </li>
                            <li><a href="?action=giohang"><i class="fa fa-user"></i>Giỏ hàng của tôi</a></li>
                            <!-- <li><a href="?action=payment"><i class="fa fa-user"></i>Thanh toán</a></li> -->
                            <li>
                                <?php require "formdangky.php"; ?>
                            </li>
                            
                            <li>
                                <?php require "formdangnhap.php"; ?>    
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4" style="padding-bottom: 5px; padding-top: 5px; margin-left: 122px; width: 268px; padding-right: 0px; padding-left: 0px;">
                    <div class="header-right">
                        <form action="?action=search" class="floatright" method="post" id="search_id">
                            <input type="text" placeholder="Search products..." name="search" id="content">
                            <input type="submit" name="ok" value="Search" id="search" style="margin-top: 0px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<header>
    	<div id="logo"><a href="index.php"><h1 style="margin-top: 12px; color:#FFFFFF;">Viet Nhat Shop</h1></div></a>
</header>
<script>
    $('#search').click(function() {
        content = $('#content').val();
        if (content == "") {
            alert("Bạn chưa nhập từ khóa!");
            document.getElementById('search_id').action = 'index.php';
        }
    });
</script>