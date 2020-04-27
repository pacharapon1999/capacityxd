<body background="5.png">
             <tr></tr>
          </table>
<center><img src="head.png" align="middle"></center><br>
<form method="get" id="form" enctype="multipart/form-data" action="" >
    <strong><center>ค้นหาข้อมูล</strong>
    <input type="text" name="search" size="30" value="">
    <input type="image" name="imageField" id="imageField" src="searching.png" />
    <br><br>
	<b><u><i>ตารางแสดงข้อมูลอาจารย์</b></u></i></center>
</form>
<?php
include_once('conn.php');
$search = isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT * FROM teacher WHERE Name_Teacher LIKE '%$search%'";
$result = mysqli_query($conn,$sql)
	or die ("Error cannot select data".mysqli_error($conn));
	echo "<table border=3px 
			bordercolor=red
			bgcolor=#FFFFFF
			align=center>";
	echo "<tr align = center>";
	echo "<th>ชื่อ - นามสกุล</th>";
	echo "<th>ชื่อสาขาวิชา</th>";
	echo "<th>อัพเดทข้อมูล</th>";
	echo "<th>ลบข้อมูล</th>";
	echo "</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr align=center>";
	echo "<td align=left width='300px'>".$row['Name_Teacher']."</td>";
	echo "<td width='250px'>".$row['Group_name']."</td>";
	echo "<td width='100px'><a href='update_teacher.php?ID_Teacher=".$row['ID_Teacher']."'>
	<img src='edit.png' width='20px' height='20px'></a></td>";
	echo "<td width='100px'><a href='delete.php?ID_Teacher=".$row['ID_Teacher']."'
	onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'>
	<img src='deletee.png' width='20px' height='20px'></a></td>";
	echo "</tr>";
}
echo "</table>"."<br>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<center><a href='insert_teacher.php'>เพิ่มข้อมูล</a></center>