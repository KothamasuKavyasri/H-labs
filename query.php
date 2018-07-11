<?php
 session_start();
 if(!isset($_SESSION['mail']))
  {
   header("location:log.php");
  }
 
	echo $_SESSION['mail'];
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Post Query</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="aboutuscss.css" rel="stylesheet">
	<link href="navcss.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top s">
	<div class="container-fluid ">
	<img src="blueelearn.png">
	<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
		<li id="mar"><a href="tutorial.php"id="nav"><span data-hover="Home">Home</span></a></li>
		<li id="mar"><a href="aboutus.php"id="nav"><span data-hover="About Us">About us</span></a></li>
		<li class="dropdown" id="mar">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav">Tutorials <span class="caret" ></span></a>
        <ul class="dropdown-menu">
          <li id="mar"><a href="btech.php">B.Tech</a></li>
          <li id="mar"><a href="degreemainpage.php">Degree</a></li>
        </ul>
      </li>
		
		<li id="mar"><a href="blog.php" id="nav"><span data-hover="Blog">Blog</span></a></li>
		<li id="mar"><a href="logout.php"id="nav"><span data-hover="Login">Logout</span></a></li>
	</ul>

	</div>
	</nav><br><br><br><br>
	<div class="container">
<div class="row"<br>
<br>
<div class="col-xs-offset-3 col-xs-5">

<form method="POST" action="insert_query.php" enctype="multipart/form-data">
	  <div class="form-group">
		<label for="comment">Name:</label>
          <input type="text" class="form-control" name="fid" value="" placeholder="Enter your Name">
          <br><br>
		  <label for="title">Title:</label>
          <input type="text" class="form-control" name="title" value="" placeholder="Question Title">
          <br><br>
		  
			<label for="img">Upload Image here:</label><br>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<input type="file" name="myimage">
						</div>
						<input type="button" name="submit_image" value="Upload">
					</div>
				</div>
			</div><br>
          <label for="comment">Post a query:</label>		            
		  <textarea class="form-control" rows="5" cols="8" id="comment" name="que" placeholder="Post your Query Here"></textarea>
	  <div class="but"><br>
	       <button class="btn btn-success">Post</button>
	  </div>
</form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>