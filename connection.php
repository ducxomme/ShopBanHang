<?php  
	$SERVER = "localhost";
	$USERNAME = "root";
	$PASS = "";
	$DBNAME = "ShopDienThoai";

	$conn = new mysqli($SERVER, $USERNAME, $PASS, $DBNAME);
	mysqli_query($conn,"SET NAMES 'UTF8'");
	if ($conn->connect_error) {
		die("Connection fail" . $conn->connection_error);
	}
?>