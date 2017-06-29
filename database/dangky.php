<?php  
	require "../connection.php";


	if (isset($_POST['hoten']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['ngaysinh']) && isset($_POST['gioitinh']) && isset($_POST['sdt'])) {
		$hoten = mysqli_real_escape_string($conn, $_POST['hoten']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$ngaysinh = mysqli_real_escape_string($conn, $_POST['ngaysinh']);
		$gender = mysqli_real_escape_string($conn, $_POST['gioitinh']);
		$phone = mysqli_real_escape_string($conn, $_POST['sdt']);

		// if ($hoten == "" || $email == "" || $password == "" || $ngaysinh == "" || $gender == "" || $phone == "") {
		// 	echo "Chua du thong tin";
		// 	header("location: index.php");
		// }

		$sql = "SELECT * FROM KHACHHANG WHERE Email = '$email'";

		$res = $conn->query($ql);
		$row = mysqli_num_rows($res);
		echo "hello";
		if($row == 1){
			echo "Email da ton tai";
		}
		else{
			$sql = "INSERT INTO KHACHHANG (HoTen, MatKhau, DiaChi, DienThoai, NgaySinh, GioiTinh, Email) VALUES ('$hoten', '$password', '$diachi', '$dienthoai', '$ngaysinh', '$gender', '$phone')";
			$res = $conn->query($sql);
				echo "Dang ky thanh cong";
				header("location: index.php");
		}

	}
?>