<?php

 session_start();
 if(!isset($_SESSION['mail']))
 {
	 header("location:log.php");
 }
 
 include 'connection.php';
 $imgname=$_FILES["myimg"]["name"];
$imgtmp=addslashes (file_get_contents($_FILES['myimg']['tmp_name']));

 $sql="insert into register(fid ,lname,mail,password,radio,img,img1) values('$_POST[fid]','$_POST[lname]','$_POST[mail]','$_POST[password]','$_POST[radio]','$imgname',
 '$imgtmp')";

 if(mysqli_query($con,$sql))
{?>
   <script>alert("Congrats!! Registered Successfully");</script>
   <?php
         
}

mysqli_close($con);
?>

	
	  