<?php require "header.php";
if (isset($_GET["mamon"]))
{
	$id = $_GET["mamon"];
	$sql1 = "UPDATE `dbo_lop` SET `Hocsinh`= `Hocsinh` +'1' WHERE `MaLop` = $id";
	$db->query($sql1);
	echo "<div class='error'><br><div align='center'>Đăng kí học phần thành công. <br>";
	echo " <a href='".$_SERVER["PHP_SELF"]."'> Đăng kí tiếp </a> </div> </div><br>";
}
 ?>
<div class="group-box">
	<div align="center">
	<div class="title">Thông báo</div>
	
	 <h3>Các môn học có thể đăng kí</h3> 
	

</div>
<form action="" method="POST">

   <table align="center" width="100%" style="vertical-align: middle; border: 1px;border-color:#e5e5e5;  background: #e5e5e5;">
		<tbody>
			<tr style="height: 50px; text-align: center; vertical-align:middle; background: #FF9900;">
			 <td><b>STT</b></td>
        <td><b>Mã môn học</b></td>
				 <td width="400px"><b>Môn học</b></td>

          <td  width="80px" ><b>Số tín chỉ</b></td>
          <td ><b>Mã Lớp</b></td>
 <td ><b>Thao tác</b></td>
			</tr>
    
          
       
<?php
                $sql = "SELECT * FROM `dbo_monhoc`";
                $result = $db->query($sql);
				
				
                $id=0;
                while ($row = $result->fetch_array()) {
                    $mamonhoc = $row['MaMon'];
                    $id+=1;
                    echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
                        echo "<td style='text-align:center;'>".$id."</td>";
                        echo "<td class='td'>".$row['MaMon']."</td>";
                        echo "<td class='td'>".$row['TenMon']."</td>";
                        echo "<td class='td'>".$row['SoTin']."</td>";
                        echo "<td align='center'>".$row['MaLop']."</td>";
						echo "<td align='center'><a href='./dangkihocphan.php?mamon=$mamonhoc'>Đăng kí</a></td>";
                    echo "</tr>";   
                    # code...
                }

?>

    </tbody>
</table>
    
</form>
	 </div>
	
</div>
<?php require "footer.php";