<?php
include_once('conn.php');
$ID_Teacher = $_GET['ID_Teacher'];
$sql = "delete from teacher
		where ID_Teacher = '$ID_Teacher'";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select.php';
			</script>";
}
mysqli_close($conn);
?>