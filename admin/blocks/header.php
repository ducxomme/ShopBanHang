<?php 
    if(isset($_GET["action"]) && $_GET["action"] == 'logout'){
        session_destroy();
        header("location: http://localhost/shopthienthu.com/trangchu");
        }
 ?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="trangchu">Quản Lý - SHOP THIÊN THƯ</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['Email']; ?>
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="http://localhost/shopthienthu.com/trangchu"><i class="fa fa-user fa-fw"></i> Giao Diện SHOP</a>
                        </li>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Thiết Lập</a>
                        </li> -->
                        <li class="divider"></li>
                        <li><a href="?action=logout"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="trangchu"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                            <?php 
                       
                                if(isset($_SESSION['level']) && ($_SESSION['level'])==1){

                                 ?>
                                 <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Loại Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=loaisanpham_danhsach">Danh Sách Loại</a>
                                </li>
                                <li>
                                    <a href="index.php?p=loaisanpham_them">Thêm Loại</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=sanpham_danhsach">Danh Sách Sản Phẩm</a>
                                </li>
                                <li>
                                    <a href="index.php?p=sanpham_them">Thêm Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Tin Tức<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=tintuc_danhsach">Danh Sách Tin Tức</a>
                                </li>
                                <li>
                                    <a href="index.php?p=tintuc_them">Thêm Tin Tức</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Đơn Hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=donhang_danhsach">Danh Sách</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Người Dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=user_danhsach">Danh Sách Người Dùng</a>
                                </li>
                                <li>
                                    <a href="index.php?p=user_them">Thêm Người Dùng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                                <?php
                                }
                             ?>
                       <?php 
                      
                        if(isset($_SESSION['level']) && ($_SESSION['level'])==0){

                        ?>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Đơn Hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=donhang_danhsach_khachhang">Danh Sách</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Người Dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=user_sua_khachang">Sửa Thông Tin</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php
                        }

                        ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>