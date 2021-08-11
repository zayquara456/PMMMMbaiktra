<?php require "header.php"; ?>
<div class="group-box">
	<div align="center">
	<div class="title">Xem số sinh viên đã đăng kí trong lớp</div>
	
	<button type="button" onclick="window.location.href='/login.php?logut'" class="btn" >Thoát chức năng admin</button>
	</div>
<form action="" method="POST">

   <table align="center" width="100%" style="vertical-align: middle; border: 1px;border-color:#e5e5e5;  background: #e5e5e5;">
		<tbody>
			<tr style="height: 50px; text-align: center; vertical-align:middle; background: #FF9900;">
			 <td><b>STT</b></td>
        <td><b>Mã lớp</b></td>
				 <td width="400px"><b>Tên môn học học</b></td>

          <td  width="80px" ><b>Số học sinh hiện tại</b></td>
          <td ><b>Sô học sinh tối đa</b></td>
 <td ><b>Thao tác</b></td>
			</tr>
    
          
       
<?php
                $sql = "SELECT * FROM `dbo_lop`";
                $result = $db->query($sql);
				
				
                $id=0;
                while ($row = $result->fetch_array()) {
                    $mamonhoc = $row['MaLop'];
                    $id+=1;
                    echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
                        echo "<td style='text-align:center;'>".$id."</td>";
                        echo "<td class='td'>".$row['MaLop']."</td>";
                        echo "<td class='td'>".$row['TenMon']."</td>";
                        echo "<td class='td'>".$row['Hocsinh']."</td>";
                        echo "<td align='center'>".$row['Hocsinhtoida']."</td>";
						echo "<td align='center'><a href='#'>Xem chi tiết</a></td>";
                    echo "</tr>";   
                    # code...
                }

?>

    </tbody>
</table>
    
</form>
	 </div>
	
	 </div>

</div>

	
</div>
<?php require "footer.php";