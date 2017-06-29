    <?php 
if(isset($_SESSION['Email'])){
    echo "Hello, ".$_SESSION['Email']."<a href='?b=logout' id='logout' style='margin-top: 10px' ><i class='fa fa-user' style='margin-top: 10px'></i>Đăng xuất</a>";
    if(isset($_GET["b"]) && $_GET["b"] == 'logout'){
        session_destroy();
        header("location: index.php");
    }
}
else{
?>
    <a id="kt" value="0"></a>
    <button type="button" class="btn btn-default fa" id="btn-dangnhap" style="border: none ; width: 100% ;height: 100% " data-toggle="modal" data-target="#myModal" ><i class="fa fa-user" style="color: black"></i> Đăng Nhập</button>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" id="modal-header" style="background-color: #5cb85c;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 id="login-text" style="text-align: center; margin-bottom: 0px; "><span class="glyphicon glyphicon-lock"></span> Đăng Nhập</h3>
        </div>
        <div class="modal-body">
          <form role="form" method="POST">
            <div class="form-group">
              <label for="Email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mật Khẩu</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="button" name="submit" id="login" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Đăng Nhập</button>
            <div id="result" style="color: red; text-align: center"></div>
          </form>
        </div>
        <div class="modal-footer" id="modal-footer">
          <p style="text-align: center;">Not a member? <a href="?action=dangky" class="a-form">Sign Up</a></p>
          <p style="text-align: center;"> <a href="#" class="a-form">Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div> 


                 
<script type="text/javascript">
    $(document).ready(function () {
        $("#login").click(function ($) {
            var Email = $("#Email").val();
            var password = $("#password").val();
            var dataString = 'Email=' + Email + '&password=' + password;
            if ($.trim(Email).length > 0 && $.trim(password).length > 0){
                $.ajax ({
                url: "database/dangnhap.php",
                method: "POST",
                data : {email: Email, pass: password},
                })
                .done(function (result){
                    if(result == 'true'){
                        // location.reload();
                        $("#result").html("day ne");
                    }
                    else if (result == 'false')
                        {
                            $("#result").html("Tên đăng nhập hoặc mật khẩu không chính xác!");
                        }
                });
            }
            else 
                $("#result").html("Bạn chưa nhập tài khoản!");
            //return false;   
        });
    });
    $.ajax({
        url: '/path/to/file',
        type: 'default GET (Other values: POST)',
        dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
        data: {param1: 'value1'},
    })
    .done(function() {
        console.log("success");
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
    

</script>
<?php
}
?>

    
  