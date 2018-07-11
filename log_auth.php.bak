<?php
session_start();
if(isset($_SESSION['mail'])!="")
{
header("location:tutorial.php");
}
 $mail=$_POST['mail'];
$password=$_POST['password'];
$img=$imgtmp;
$sql="select * from register where mail='$mail' and password='$password'";
//$s="select fid from register where mail='$mail'";
$con=mysqli_connect("localhost","root","","tutorial");
  if(mysqli_query($con,$sql))
  {
	  if(mysqli_affected_rows($con)!=0)
	  {
	  ?>
	  <script>alert("logged-in successfully");</script>
	   	<?php 
			//$up_sql = "UPDATE register SET online = 1 WHERE mail = '$mail'";

				$_SESSION['mail']=$mail;
	            $_SESSION['img']=$img;

				$result=mysqli_query($con,$sql);
		        $row=mysqli_fetch_array($result);
		 
	            
	            header("location:tutorial.php?reg_id=".$row['reg_id']."");
	       }

    else
    {
	?>
	    <script>
		window.location.href="log.php";
	     alert("Mail/Password are incorrect");
		 </script>
		<?php
	}

  }
mysqli_close($con);
?>

	
	  