<?php
include_once('conn.php');
$User_username= $_POST['User_username'];
$User_password= $_POST['User_password'];
$User_name= $_POST['User_name'];
$User_phone= $_POST['User_phone'];
if($User_username=="" || empty($User_username)|| $User_password=="" || empty($User_password)|| $User_name=="" || empty($User_name)|| $User_phone=="" || empty($User_phone))
{
	echo "กรุณากรอกข้อมูลให้ครบถ้วน";
	echo "<script language='Javascript'>
			alert('กรุณากรอกข้อมูลให้ครบถ้วน')
			window.location='register.php';
			</script>";
}else{
$sql = "insert into register(User_username,User_password,User_name,User_phone)
values('$User_username','$User_password','$User_name','$User_phone')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('สมัครสมาชิกเรียบร้อย')
			window.location='index.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถสมัครสมาชิกได้')
			</script>";
}
}
mysqli_close($conn);
?>