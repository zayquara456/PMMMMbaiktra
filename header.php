<?php session_start();?>
<!doctype html>
<html>
<head>
	
	<?php require_once("config.php");?>
		
	<?php 
		if (!isset($_SESSION["loggedin"])){
			auto_login();
		}
	
	?>
	
	<title><?php echo $page_title; ?></title>
	<meta charset="utf-8"> 
	<meta name="keywords" content="<?php echo $page_keywords; ?>" />
	<meta name="description" content="<?php echo $page_description; ?>" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.2.custom.js"></script>
	<link rel="stylesheet" 	href="css/ui-lightness/jquery-ui-1.10.2.custom.css" />
<!-- 	<link rel="stylesheet" 	href="css/jmetro/jquery-ui-1.10.2.custom.css" /> -->
    
</head>
<body>
	<div id="pageWrapper">
		<div id="header">
			<img id="logo" src="<?php echo IMAGES_DIR;?>/logo.png" alt="Khoa Công Nghệ Thông Tin - HaUI" />
			<h1 id="siteTitle"> Hệ Thống Quản Lý Đào Tạo </h1>
			<img id="logo2" src="<?php echo IMAGES_DIR;?>/logo2.png" />		
		</div> <!-- End of header -->
		
		<div id="nav"> 
		<div  id="menu" > 
			<a href="index.php">Trang chủ</a> |  
			<a href="#">Tìm kiếm</a>	|
			<a href="#">Giới thiệu</a>		 
		</div>		 
		<div  id="login" > 
			<?php 
				// lấy cookie đăng nhập tự động
				 
				if (isset($_SESSION["loggedin"])){
					echo "Xin chào ". $_SESSION["HoTen"];
					echo " | <a href='login.php?logut' id='aLogout'>Thoát</a>";	
				}else {
					
					echo "<a href='login.php'>Đăng nhập</a>/<a href='dangki.php'>Đăng kí</a>";
				}
			?>
		</div>
		</div> <!-- End of Navigation menu --> 
		
		<div id="contentWrapper" > 
			<div id="leftSide" > 
				<div class="group-box" id="danhmuc"> 
						<div class="title">DANH MỤC</div>  
						<div class="group-box-content">
							<ul>								
								<li> <a href="#"> Khoa - Viện</a> </li>
								<li> <a href="#">Giảng Viên</a> </li>
								<li> <a href="#">Sinh Viên</a> </li>
								<li> <a href="#">Ngành Đào Tạo</a> </li>
								<li> <a href="#">Lớp Chuyên Ngành</a> </li>
								<li> <a href="#">Lớp Học Phần</a> </li>
								<li> <a href="dangkihocphan.php">Đăng kí học phần</a> </li>
							</ul>						
						</div>						
				</div>
				<div class="group-box"> 
						<div class="title">Menu</div> 
						<div class="group-box-content">
						<ul>							
							<li> <a href="index.php">Link 1</a> </li>
							<li> <a href="index.php">Link 2</a> </li>
							<li> <a href="index.php">Link 3</a> </li>
							<li> <a href="index.php">Link 4</a> </li>
							<li> <a href="index.php">Link 5</a> </li>
							<li> <a href="index.php">Link 6</a> </li>
							<li> <a href="index.php">Link 7</a> </li>
						</ul>						
						</div>						
				</div>				 
			</div> <!-- End of Left Side -->
		<div id="mainContent">
				
