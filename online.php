<?php 
session_start();
//echo $_SESSION['mail'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="customstyles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
             
             
			 date_default_timezone_set('Asia/Calcutta'); 
			 $time = date('H:i:s');
             $time_check = $time-180;     
              //Set Time 3 Minutes

             include "connection.php";
			   $s="select * from online";
               $sql= "SELECT * FROM online WHERE mail='$_SESSION[mail]'"; 
               	$result=mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);
					$resul=mysqli_query($con,$s);
					$coun = mysqli_num_rows($resul); 
					echo "<b>Users Online : </b><br>";
							if($count=="0")
							{ 
							$sql1= "INSERT INTO online(mail,time)VALUES('$_SESSION[mail]',$time)"; 
							//echo $sql1;
							$result1 = mysqli_query($con,$sql1);
							}
						
						 else 
							{
							$sql2="UPDATE online SET time=$time WHERE mail = '$_SESSION[mail]'"; 
							$result2 = mysqli_query($con,$sql2); 
							}
							$sql3="SELECT * FROM online";
						    $result3= mysqli_query($con,$sql3); 
							$count_user_online = mysqli_num_rows($result3);
							
							echo "$count_user_online"; 
							// after 5 minutes, session will be deleted 
							 $sql4= "DELETE FROM online WHERE time<$time_check"; 
							 $result4 = mysqli_query($con,$sql4);
					
	 mysqli_close($con);
 ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>