<?php
include 'connection.php';
  $mail=$_POST['mail'];
  $password=$_POST['password'];
  $password1=$_POST['password1'];
  
            $sql="UPDATE register set password='$password' where mail='$mail'";
          if(mysqli_query($con,$sql))
              {?>
                 <script>alert("Updated Successfully");
		                 window.location="log.php";
	             </script>
			  <?php
             }
	
mysqli_close($con);
?>

	
	  