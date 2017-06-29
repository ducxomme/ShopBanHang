<!-- 
     <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" id="modal-header" style="background-color: #5CB85C;">
          <h4 id="login-text" style="padding-left: 150px; padding-right: 100px; font-size: 30px;"><span class="glyphicon glyphicon glyphicon-user" "></span> Đăng ký thành viên</h4>
        </div> 
        <div class="modal-body">
          <form role="form" id="contact" method="post" action="" enctype="multipart/form-data"  >

                <span style="color:red; font-size: 18px; font-weight:bold" id="error"></span>     
                <div class="form-group">
                     <label class="control-label" for="hoten"><span class="glyphicon glyphicon-user"> </span> Họ tên <span class="rq">(*)</span>
                     </label>
                    <input class="form-control required" minlength="6" id="hoten" name="hoten" type="text" class="text" placeholder="Họ tên">
                    
                </div>
                <div class="form-group">
                    <label for="email"><span class="glyphicon glyphicon glyphicon-envelope"></span> Email <span class="rq">(*)</span></label>
                    <input class="form-control required email" minlength="6" id="email" name="email" type="text" class="text" placeholder="Email">
                </div>

                 <div class="form-group">
                    <label for="pss"><span class="glyphicon glyphicon-eye-open"></span> Mật khẩu <span class="rq">(*)</span></label>
                    <input class="form-control required" minlength="6" id="ppassword" name="ppassword" type="password" class="text" placeholder="Mật khẩu"/>
                </div>
                <div class="form-group">
                    <label for="pss"><span class="glyphicon glyphicon-eye-open"></span>Nhập lại mật khẩu <span class="rq">(*)</span></label>
                    <input class="form-control required" name="cpassword" type="password" class="text" tabindex="3" placeholder="Nhập lại mật khẩu" />
                </div> 
                <div class="form-group">
                    <label for="ngaysinh"><span class="glyphicon glyphicon-time"> </span>Ngày sinh</label>
                    <input class="form-control" name="ngaysinh" id="ngaysinh" placeholder="Ngày sinh của bạn" type="text">
                </div>
                <div class="form-group">
                    <label>Giới tính:</label>
                    <label class="radio-inline" for="gioitinh"><input checked="checked" id="gt1" name="gioitinh" type="radio" value="1"> Nam </label>
                    <label class="radio-inline"><input name="gioitinh" id="gt2" type="radio" value="0">Nữ</label>
                </div>
                <div class="form-group">
                    <label for="sdt"><span class="glyphicon glyphicon-phone"></span>Điện thoại</label>
                    <input class="digits" maxlength="12" id="sdt" name="sdt" type="text" class="text" placeholder="Điện thoại" />
                </div>
                <div class="g-recaptcha" data-sitekey="6Le4_h8TAAAAAPrsxNLK0IrLISj4CypypIbTsi4x"></div> 
                <input type="submit" id="signin" name="btn-submit" style="background:#5cb85c;color:#fff;" value="Đăng ký" class="btn  btn-block">
                     <span class="glyphicon glyphicon-ok"></span>  
            </form>
        </div>
        <div class="modal-footer">
           </div>
      </div>
      
    </div>
<?php  
  require "connection.php";

  if (isset($_POST['btn-submit'])) {
    if (isset($_POST['hoten']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['ngaysinh']) && isset($_POST['gioitinh']) && isset($_POST['sdt'])) {
        $hoten = mysqli_real_escape_string($conn, $_POST['hoten']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $ngaysinh = mysqli_real_escape_string($conn, $_POST['ngaysinh']);
        $gender = mysqli_real_escape_string($conn, $_POST['gioitinh']);
        $phone = mysqli_real_escape_string($conn, $_POST['sdt']);

        $sql = "SELECT * FROM KHACHHANG WHERE Email = '$email'";

        $res = $conn->query($ql);
        $row = mysqli_num_rows($res);
        // if($row == 1){
        //   echo "Email da ton tai";
        // }
        // else{
        //   $sql = "INSERT INTO KHACHHANG (HoTen, MatKhau, DiaChi, DienThoai, NgaySinh, GioiTinh, Email) VALUES ('$hoten', '$password', '$diachi', '$dienthoai', '$ngaysinh', '$gender', '$phone')";
        //   $res = $conn->query($sql);
        //     echo "Dang ky thanh cong";
        //     header("location: index.php");
        // }


        echo $hoten;

    }
  }
?> -->
    <button type="button" class="btn btn-default fa" id="btn-dangky" style="border: none ; width: 100% ;height: 100% " data-toggle="modal" data-target="#myModal1" ><i class="fa fa-user" style="color: black"></i> Đăng Ký</button>

    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" id="modal-header" style="background-color: #5cb85c;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 id="login-text" style="text-align: center; margin-bottom: 0px; "><span class="glyphicon glyphicon-lock"></span> Đăng Ký</h3>
        </div>
        <div class="modal-body">
          <form role="form" method="POST">
            <div class="form-group">
                     <label class="control-label" for="hoten"><span class="glyphicon glyphicon-user"> </span> Họ tên <span class="rq">(*)</span>
                     </label>
                    <input class="form-control required" minlength="6" id="hoten" name="hoten" type="text" class="text" placeholder="Họ tên">
                    
                </div>
                <div class="form-group">
                    <label for="email"><span class="glyphicon glyphicon glyphicon-envelope"></span> Email <span class="rq">(*)</span></label>
                    <input class="form-control required email" minlength="6" id="email" name="email" type="text" class="text" placeholder="Email">
                </div>

                 <div class="form-group">
                    <label for="pss"><span class="glyphicon glyphicon-eye-open"></span> Mật khẩu <span class="rq">(*)</span></label>
                    <input class="form-control required" minlength="6" id="ppassword" name="ppassword" type="password" class="text" placeholder="Mật khẩu"/>
                </div>
                <div class="form-group">
                    <label for="pss"><span class="glyphicon glyphicon-eye-open"></span>Nhập lại mật khẩu <span class="rq">(*)</span></label>
                    <input class="form-control required" name="cpassword" type="password" class="text" tabindex="3" placeholder="Nhập lại mật khẩu" />
                </div> 
                <div class="form-group">
                    <label for="ngaysinh"><span class="glyphicon glyphicon-time"> </span>Ngày sinh</label>
                    <input class="form-control" name="ngaysinh" id="ngaysinh" placeholder="Ngày sinh của bạn" type="text">
                </div>
                <div class="form-group">
                    <label>Giới tính:</label>
                    <label class="radio-inline" for="gioitinh"><input checked="checked" id="gt1" name="gioitinh" type="radio" value="1"> Nam </label>
                    <label class="radio-inline"><input name="gioitinh" id="gt2" type="radio" value="0">Nữ</label>
                </div>
                <div class="form-group">
                    <label for="sdt"><span class="glyphicon glyphicon-phone"></span>Điện thoại</label>
                    <input class="digits" maxlength="12" id="sdt" name="sdt" type="text" class="text" placeholder="Điện thoại" />
                </div>
            <button type="submit" name="submit" id="signup" style="background-color: #5CB85C;" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Đăng Ký</button>
            <div id="result" style="color: red; text-align: center"></div>
          </form>
        </div>
      </div>
    </div>
  </div> 

  <script>
    $(document).ready(function(){
      $("#signup").click(function() {
          
      });
    });
  </script>