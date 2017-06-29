<?php
	session_start();
	require "../connection.php";
	if (isset($_POST['Email']) && isset($_POST['password'])) { 
		
		$Email = mysqli_real_escape_string($db, $_POST['Email']); 
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$query = $db->query("SELECT * FROM KHACHHANG WHERE Email='$Email' AND MatKhau='$password'");
	    $count = mysqli_num_rows($query); 
		
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC); 
		if ($count == 1) { 
			$_SESSION['Email'] = $row['Email'];
	 	    $_SESSION['password'] = $row['MatKhau'];
	 	    $_SESSION['level'] = $row['Nhom'];

			echo 'true';
	    }else{
	    	echo 'false';
	    }
	}
?>