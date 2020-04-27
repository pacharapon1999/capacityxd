<?php
include_once('conn.php');
$ID_Teacher = $_POST["ID_Teacher"];
$Name_Teacher = $_POST["Name_Teacher"];
$Group_name = $_POST["Group_name"];
$sql = "update teacher set 
			Name_Teacher = '$Name_Teacher'
		,	Group_name = '$Group_name'
		WHERE ID_Teacher = $ID_Teacher;";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select.php';
			</script>";
}
mysqli_close($conn);
?>