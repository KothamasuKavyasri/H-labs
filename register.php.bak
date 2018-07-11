
<?php
 session_start();
 include "connection.php";
 if(isset($_SESSION['mail'])!="")
 {
	 header("location:register.php");
 }
   //$fid=$_POST['fid'];
   //$_SESSION['fid']=$fid;
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="tutorialcss.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
		  
		 .gh{padding:10px;}
		 .fc{
		  border:2px solid white;
		  padding:50px 50px;
		  margin:50px 20px 70px 50px ; color:black;
		  }
		</style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top s">
	<div class="container-fluid ">
	<img src="blueelearn.png">
	<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
		<li><a href="tutorial.php"><span data-hover="Home"id="hov">Home</span></a></li>
		<li><a href="aboutus.php"><span data-hover="About Us" id="hov">About us</span></a></li>
		<li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorials <span class="caret" ></span></a>
        <ul class="dropdown-menu">
          <li><a href="btech.php">B.Tech</a></li>
          <li><a href="degreemainpage.php">Degree</a></li>
        </ul>
      </li>
		
		<li><a href="blog.php"><span data-hover="Blog" id="hov">Blog</span></a></li>
		<li><a href="logout.php"><span data-hover="Logout" id="hov">Logout</span></a></li>
	</ul>

	</div>
	</nav>

       <div class="container">
          <div class="row">
	       <div class="col-sm-offset-3 col-sm-6">
		     <form class="form-vertical fc" method="POST" action="insert_reg.php" enctype="multipart/form-data">

			    <h2>Create a new account &nbsp;&nbsp;&nbsp;&nbsp;
                 <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'><button type="button">&times;</button></span></h2>
                 <hr>

				 <div class="form-group">
				  <label for="firstname">First name</label>
				  <input type="text" name="fid" class="form-control" id="fid" placeholder="First name">
				 </div>
				 <div class="form-group">
				  <label for="latsname">Last name</label>
				  <input type="text" name="lname" class="form-control" id="fname" placeholder="Last name">
				 </div>
				 <div class="form-group">
				  <label for="Mobile or Mail">Email or Mobile number</label>
				  <input type="text" name="mail" class="form-control" id="mail" placeholder="Mobile or Email Id">
				 </div>
				 <div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				 </div>
				 <label for="img">Upload Image here:</label><br>
				  <div class="container">
					<div class="row">
						<div class="col-md-3">
							<input type="file" name="myimg">
						</div>
						<input type="button" name="submit_image" value="Upload">
					</div>
				</div><br>
				<div class="gh"><input type="radio" name="radio" value="male"/>Male &nbsp;&nbsp;&nbsp;
				 <input type="radio" name="radio" value="female"/>Female</div> 
                 
				
  
                 <div><button type="submit" class="btn btn-block btn-success">Register</button></div>
				 </form>
	     </div>
	   </div>
	 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
