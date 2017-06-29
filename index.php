<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Viet Nhat Shop</title>
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/upload/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Font Awesome -->
    <link rel="stylesheet" href="assets/upload/css/font-awesome.min.css"> 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <link rel="stylesheet" href="assets/upload/css/owl.carousel.css"> 
    <link rel="stylesheet" href="assets/upload/css/responsive.css"> 
    <link rel="stylesheet" href="assets/css/slide.css">
  	
</head>

<body>
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script src="./assets/upload/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./assets/js/jssor.slider-22.2.10.min.js" type="text/javascript"></script>
	<!-- <script src="./assets/js/jquery-1.11.3.min.js"></script> -->
	<script src="./assets/js/slide.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script> 
	<script src="assets/js/jquery.easing.1.3.min.js"></script>
	<div class="wrapper">
		<?php  
			require "system/client.php";
			require "site/blocks/header.php";
			require "site/blocks/nav.php";
			require "connection.php";
			
			# SITE PAGES
			$action = input_get('action');
			if (file_exists('site/pages/'.$action.'.php')) {
				require ('site/pages/'.$action.'.php');
			}else if (file_exists('database/'.$action.'.php')){
				require ('database/'.$action.'.php');	
			}else{
				require('site/pages/trangchu.php');
			}
			
			require "site/blocks/promotion.php";
			require "site/blocks/footer.php";
			require "site/blocks/copyright.php";

			
		?>
		
	</div>
	
</body>
</html>