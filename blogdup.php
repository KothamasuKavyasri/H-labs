<?php
 session_start();
 if(!isset($_SESSION['mail']))
 {
	 header("location:log.php");
 }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blog page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="blogcss.css" rel="stylesheet">
	<link href="tutorialcss.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
		.rig
		{
		padding:10px;
		margin-top:20px;
		}
		.atag
		{
		color:white;
		}
	</style>
  </head>
  <body>
  <nav class="navbar navbar-default s">
	<div class="container-fluid ">
	<img src="blueelearn.png">
	<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
		<li><a href="tutorial.php"><span data-hover="Home">Home</span></a></li>
		<li><a href="aboutus.php"><span data-hover="About Us">About us</span></a></li>
		<li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorials <span class="caret" ></span></a>
        <ul class="dropdown-menu">
          <li><a href="btech.php">B.Tech</a></li>
          <li><a href="degreemainpage.php">Degree</a></li>
        </ul>
      </li>
		
		<li><a href="blog.php"><span data-hover="Blog">Blog</span></a></li>
		<li><a href="logout.php"><span data-hover="Logout">Logout</span></a></li>
	</ul>

	</div>
	</nav>
	

	<nav class="navbar navbar-default space">
	<div class="container">
		<div class="navbar-header">
				<h1><b>Blog</b></h1>
		</div>
			<div class="nav navbar-nav navbar-right">
				<button type="button" class="btn btn-info rig"><a href="query.php" class="atag">Ask Question</a></button>
			</div>
	</div>
	</nav>
	<br>



	<div class="container pad">
		<h6>In <a href="#">Languages,c </a>&nbsp;06-June-2018</h6>
		<a href="#"id="shad"><h2>5+ more concepts in Functions</h2></a>
		<p>I am going to give some more function concepts in Functions.These will help you to gain more knoweldge on Functions.....<a href="#">Read More</a></p>
	</div><br>
	<div class="container"><h6>In <a href="#">Languages,Java</a>&nbsp;05-March-2018</h6>
		<a href="#"id="shad"><h2>5+ more concepts in Inheritance</h2></a>
		<p>I gave the concept about Inheritance.Also there are many inheritance concepts in that.so you can see here.....<a href="#">Read More</a></p>
	</div><br>
	<div class="container">
	<h6>In <a href="#">Gate,Questions</a>&nbsp;10-April-2018</h6>
	<h2><a href="#"id="shad">Gate Question Pappers in 2018</h2></a>
	<p>I gave you the Gate	Question pappers of this year.You can go through this.Learn more concepts.All the Best....<a href="#">Read More</a></p>
	</div><br>
	<div class="container">
	<h6>In<a href="#">B.Sc,Agricultural Statistics</a>&nbsp;2-June-2018</h6>
	<h2><a href="#"id="shad">Agricultural Statistics was added</h2></a>
	<p>Statistics, Agricultural 
                   the branch of economic statistics that deals with agriculture and, as such, is an important tool for state management <br>and planned guidance of socialist agricultural enterprises.
.Learn more concepts.All the Best....<a href="#">Read More</a></p>
	</div><br>

    <div class="container">
	<h6>In <a href="#">B.A,Fashion Technology</a>&nbsp;7-July-2018</h6>
	<h2><a href="#"id="shad">Updated Version</h2></a>
	<p>As Fashion is increasing day-by-day this course was updated .You can go through this.Learn more concepts.All the Best....<a href="#">Read More</a></p>
	</div><br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>