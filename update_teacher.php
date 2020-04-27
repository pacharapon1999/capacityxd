<html>
<head>
<title>update_teacher</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="update.php" method="post">
  <p>&nbsp;</p>
  <p>
    <!-- Save for Web Slices (update_teacher.psd) -->
    <?php  //update_form.php
include_once('conn.php');
$ID_Teacher = $_GET["ID_Teacher"];
$sql = ("SELECT * FROM teacher
		WHERE ID_Teacher = $ID_Teacher");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$Name_Teacher = $row["Name_Teacher"];
	$ID_Brench = $row["Group_name"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
  </p>
  <table width="1000" height="501" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
    <tr>
      <td colspan="7"><img src="images/update_teacher_01.jpg" width="1000" height="191" alt=""></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="4"><img src="images/update_teacher_02.jpg" width="423" height="145" alt=""></td>
      <td colspan="4"><input type="text"
				name="Name_Teacher" value="<?php echo $Name_Teacher; ?>" style="width:205px;height:32px;"></td>
      <td rowspan="6"><img src="images/update_teacher_04.jpg" width="372" height="309" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/update_teacher_05.jpg" width="205" height="27" alt=""></td>
    </tr>
    <tr>
      <td colspan="4"><select name="Group_name" id="Group_name" style="width:205px;height:32px;">
          <option value="จุลชีววิทยา">จุลชีววิทยา</option>
          <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
          <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
          <option value="เทคโนโลยีมัลติมีเดีย">เทคโนโลยีมัลติมีเดีย</option>
          <option value="นวัตกรรมวัสดุเพื่ออุตสาหกรรม">นวัตกรรมวัสดุเพื่ออุตสาหกรรม</option>
          <option value="วิทยาการการจัดการข้อมูล">วิทยาการการจัดการข้อมูล</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/update_teacher_07.jpg" width="205" height="54" alt=""></td>
    </tr>
    <tr>
      <td rowspan="2"><img src="images/update_teacher_08.jpg" width="378" height="164" alt=""></td>
      <td colspan="2"><input type="image" name="imageField" id="imageField" src="images/update_teacher_09.jpg"></td>
      <td rowspan="2"><img src="images/update_teacher_10.jpg" width="28" height="164" alt=""></td>
      <td><img src="images/update_teacher_11.jpg" width="101" height="37" alt=""></td>
      <td rowspan="2"><img src="images/update_teacher_12.jpg" width="19" height="164" alt=""></td>
    </tr>
    <tr>
      <td colspan="2"><img src="images/update_teacher_13.jpg" width="102" height="127" alt=""></td>
      <td><img src="images/update_teacher_14.jpg" width="101" height="127" alt=""></td>
    </tr>
    <tr>
      <td><img src="images/spacer.gif" width="378" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="45" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="57" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="28" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="101" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="19" height="1" alt=""></td>
      <td><img src="images/spacer.gif" width="372" height="1" alt=""></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="ID_Teacher" value=<?php echo $ID_Teacher;?>>
  </p>
  <!-- End Save for Web Slices -->
</form>
</body>
</html>