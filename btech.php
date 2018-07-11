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
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--link href="tutorialcss.css" rel="stylesheet"-->
	<link href="navcss.css" rel="stylesheet">
	
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	 <style type="text/css">
	 #a{
	  color:black;
	  font-size:15px;
	  padding-bottom:20px;
	   }
	  
	   
	 </style>
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
		<li id="mar"><a href="logout.php"id="nav"><span data-hover="Logout">Logout</span></a></li>
	</ul>

	</div>
	</nav><br><br><br><br><br>
	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<ul class="nav navbar-nav padd">
			 <li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" id="a" href="#">Languages <span class="caret" ></span></a>
				<ul class="dropdown-menu">
					<li><a href="btech.php">C</a></li>
					 <li><a href="#">Java</a></li>
					 <li><a href="#">C++</a></li>
				 </ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="a" href="#">Ds <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Array</a></li>
						<li><a href="#">Linked list</a></li>
						<li><a href="#">Stack</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="a" href="#">Interviews <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">project</a></li>
						<li><a href="#">interview practise questions</a></li>
						<li><a href="#">Internahip interviews</a></li>
					</ul>
					</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="a" href="#">Students <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">program</a></li>
						<li><a href="#">project</a></li>
						<li><a href="#">placement courses</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="a"  href="#">Gate <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Questions</a></li>
						<li><a href="#">Gate notes</a></li>
						<li><a href="#">practise tests</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"id="a"  href="#">Quizzes<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Languages</a></li>
						<li><a href="#">Aptitude</a></li>
						<li><a href="#">HTML&XML</a></li>
					</ul>
				</li>
				 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" id="a" href="#">CS Subjects <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Web Technology</a></li>
						<li><a href="#">Machine Learning</a></li>
						<li><a href="#">Computer graphics</a></li>
					</ul>
				 </li>
	  
				<li><a href="#" id="a" >what's new?</a></li>
		 
		</ul>
	</div>
	</nav>
	<div class="container">
	<div class="row">
			<div class="col-lg-3">
				<button class="btn btn-success u">Questions</button><br><br>
					<table class="table" border="2" width="100%" text-align="center">
						<tr>
							<td><a href="#" class="ab">What is C?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is variable?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What are Keywords?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What are functions?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What are datatypes?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is typecasting?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">Diff b/w %i and %d?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">Sizeof Operator?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is scope?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is an array?</a></td>
						</tr>
					</table>
			</div>
		
	<div class="col-lg-6">
			<h1>C Language</h1>
				<p>
					C is a procedural programming language. It was initially developed by Dennis Ritchie between 1969 and 1973. It was mainly developed as a system programming language to write operating system. The main features of C language include low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming like operating system or compiler development.
					Many later languages have borrowed syntax/features directly or indirectly from C language. Like syntax of Java, PHP, JavaScript and many other languages is mainly based on C language.<br>
					<h5><b>Beginning with C programming:</b></h5>
					1) Finding a Compiler:
					Before we start C programming, we need to have a compiler to compile and run our programs. There are certain online compilers like https://ide.geeksforgeeks.org/, http://ideone.com/ or http://codepad.org/ that can be used to start C without installing a compiler.
					Windows: There are many compilers available freely for compilation of C programs like Code Blocks  and Dev-CPP.   We strongly recommend Code Blocks.
					Linux: For Linux, gcc comes bundled with the linux,  Code Blocks can also be used with Linux.</p>
			 <a href="#" class="glyphicon glyphicon-thumbs-up">1K</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">comment:50</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">views:2K</a>
		</div>
		<div class="col-lg-3">
		    <button class="btn btn-success u">Realted Topics</button><br><br>
			    <table class="table" border="2">
				<tr>
					<td><a href="#"class="ab">What is pointer?</a></td>
				</tr>
				<tr>
					<td><a href="#"class="ab">syntax for for loop</a></td>
				</tr>
				<tr>
					<td><a href="#"class="ab">what is dangling pointer?</a></td>
				</tr>
				<tr>
					<td><a href="#"class="ab">what is nested structure?</a></td>
				</tr>
			</table>
		</div>

		</div>
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>