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

// $imagename=$_FILES["myimage"]["name"];
//$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

 
        $sql="insert into question(textarea,date,mail,fid,image,image1,tittle) values('$_POST[que]',NOW(),'$_SESSION[mail]','$_POST[fid]','$image','$imgContent',
		'$_POST[title]')";

          if(mysqli_query($con,$sql))
              {?>
                 <script>alert("Posted Successfully");
                 window.location="blog.php";
	             </script>

   
             <?php
			 //$id=$_GET['id']; 
             //$_SESSION['id']=$id;
			 //echo $_SESSION['id'];
}

mysqli_close($con);
?>

	
	  