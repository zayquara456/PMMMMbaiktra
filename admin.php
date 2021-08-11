<?php 
require "header.php";?>

<div class="group-box">
	
	<div class="title">Đăng nhập admin</div> 
	<div align="center">
	<?php 
	// nếu nút Logout được nhấn
	if (isset($_GET["logut"])){
		// hủy bỏ session
		unset($_SESSION["loggedin"]);
		unset($_SESSION["User"]);
		unset($_SESSION["HoTen"]);
		unset($_SESSION["Type"]);
		// xóa cookies
		setcookie("User","",time()-3600);
		setcookie("Password","",time()-3600);
		setcookie("Type","",time()-3600);
		// chuyển đến trang login 
		header("location: admin.php");
		exit();
	}

	if(isset($_SESSION["loggedinadmin"])){
		header("location: admin1.php");
		exit();
	} 

	 
	
	
	
	
	// trường hợp chưa đăng nhập, không lưu cookie trước đó
	// nếu người dùng nhấn nút "Đăng nhập"
	if (isset($_POST["btnDangNhap"])){
		$user = $_POST["txtTenDangNhap"];
		$pass = $_POST["txtMatKhau"];
		
			
		if($user == "admin" && $pass =="admin"){	
			// tạo session		 
			$_SESSION["loggedinadmin"]= true;
			$_SESSION["User"] = $user;
			$_SESSION["HoTen"] = $pass;
			

			header("location: admin1.php");
				
		}else{ // trường hợp nhập username và password không đúng
			
			// hiển thị thông báo lỗi, link đến trang đăng nhập lại
			echo "<div class='error'><br><div align='center'>Tên đăng nhập và mật khẩu không hợp lệ. <br>";
			echo " <a href='".$_SERVER["PHP_SELF"]."'> Thử lại </a> </div> </div><br>";
		}
	}else { // trong trường hợp lần đầu tiên mở form hoặc đã nhấn logout thì hiển thị form đăng nhập	
	?>	
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="frmLogin">
		<br>		 
		<table class=frm>
		<tr> 
			<td align="right"><label for="txtTenDangNhap"> Tên Đăng nhập: </label> </td>
			<td align="left"><input type="text" name="txtTenDangNhap" placeholder="tên đăng nhập"> </td>
		</tr>
		<tr>
			<td align="right"> <label for="txtMatKhau"> Mật khẩu: </label></td>
			 <td align="left"> <input type="password" name="txtMatKhau" placeholder="mật khẩu"> <br /> </td>
		</tr>		
		<tr>
			<td> &nbsp; </td> 
			<td> <button type="submit" name="btnDangNhap" class="btn" >Đăng nhập</button></td>
		</tr>
		</table>		 
		<br>
	</form>	
<?php 
	} // else 
	
?>
	</div>
</div>

<?php require "footer.php";?>