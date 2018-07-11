<?php
session_start();
 if(!isset($_SESSION['mail']))
 {
	 header("location:log.php");
 }
        
 include 'connection.php';
         $sql="insert into comment(ques_id,user_id,com,time,mail) values('$_POST[id]','$_POST[user_id]','$_POST[com]',NOW(),'$_SESSION[mail]')";

          if(mysqli_query($con,$sql))
              {?>
                 <script>alert("Posted Successfully");
                 window.location="blog.php";
	             </script>
			  <?php
}

mysqli_close($con);
?>

	
	  