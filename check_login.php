<?php 
session_start();
        if(isset($_POST['User_username'])){
                  include("conn.php");
                  $User_username = $_POST['User_username'];
                  $User_password = $_POST['User_password'];

                  $sql="SELECT * FROM register
                  WHERE  User_username='".$User_username."' 
                  AND  User_password='".$User_password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["User_id"] = $row["User_id"];
                      $_SESSION["status"] = $row["status"];
					  $_SESSION["User_phone"] = $row["User_phone"];

                      if($_SESSION["status"]=="admin"){ 

                        Header("Location: index.php");
                      }
                  if ($_SESSION["status"]=="member"){ 

                        Header("Location: member.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>