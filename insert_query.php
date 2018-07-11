<?php
session_start();
 if(!isset($_SESSION['mail']))
 {
	 header("location:log.php");
 }
 include 'connection.php';
     $check = getimagesize($_FILES["myimage"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['myimage']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));}
         $sql="insert into question(textarea,date,mail,fid,image,image1,tittle) values('$_POST[que]',NOW(),'$_SESSION[mail]','$_POST[fid]','$image','$imgContent',
		'$_POST[title]')";
          if(mysqli_query($con,$sql))
              {?>
                 <script>alert("Posted Successfully");
                 window.location="blog.php";
	             </script>
             <?php
}
mysqli_close($con);
?>

	
	  