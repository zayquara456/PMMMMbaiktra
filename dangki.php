<?php 
require "header.php";?>

<div class="group-box">
	
	<div class="title">Đăng kí</div> 
	<div align="center">
	<?php 

	if(isset($_SESSION["loggedin"])){
		header("location: index.php");
		exit();
	} 
		// trường hợp đã nhớ mật khẩu trước đó
		// gọi hàm auto_login() trong thư viện libs/common.php
		// hàm này được gọi trong file header.php để đảm bảo khi truy cập vào
		// trang nào cũng tự đăng nhập, không nhất thiết là vào login.php mới tự đăng nhập
		
		//auto_login();
	if (isset($_POST["btnDangKi"])){
		$user = $_POST["txtTenDangNhap"];
		$pass = $_POST["txtMatKhau"];
		$repass = $_POST["txtMatKhau1"];
		if ($pass !== $repass)
		{
			echo "<div class='error'><br><div align='center'> mật khẩu không trùng khớp. <br>";
			echo " <a href='".$_SERVER["PHP_SELF"]."'> Thử lại </a> </div> </div><br>";
		}
		else
		{
			$sql = "INSERT INTO `dbo_sinhvien`(`MaSV`, `MatKhau`) VALUES ('".$user."','".md5($pass)."')";
			$result = $db->query($sql);
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
			 <td align="left"> <input type="password" name="txtMatKhau" placeholder="mật khẩu"></td>
		</tr>		
		<tr>
			<td align="right"> <label for="txtMatKhau1"> Nhập lại mật khẩu: </label></td>
			 <td align="left"> <input type="password" name="txtMatKhau1" placeholder="Nhập lại mật khẩu"> <br /> </td>
		</tr>	
		<tr>
			<td> &nbsp; </td> 
			<td> <button type="submit" name="btnDangKi" class="btn" >Đăng Kí</button></td>
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