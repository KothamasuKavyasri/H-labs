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
    <title>Degree Coueses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="navcss.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
	   .navi ul li{
	            
			  padding:10px;
			  padding-left:90px;
			      }
			.table{padding:10px;}
	</style>
</head>
<body>
<nav class="navbar navbar-default s">
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
		
		<li id="mar"><a href="blog.php" id="nav"><span data-hover="Blog" >Blog</span></a></li>
		<li id="mar"><a href="logout.php" id="nav"><span data-hover="Login" >Logout</span></a></li>
	</ul>

	</div>
	</nav>

<nav class="navbar navbar-default navi">
					 <div class="container-fluid">
						<ul class="nav navbar-nav">
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">B.Sc.(Agriculture) <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="degreemainpage.php">Agicultural Biotechnology</a></li>
									<li><a href="ageconomics.php">Agicultural Economics</a></li>
									<li><a href="agrstatistics.php">Agicultural Statistics</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">B.A
							       <span class="caret"></span></a>
					            	<ul class="dropdown-menu">
						               <li><a href="#">Acting</a></li>
							           <li><a href="#">Fashion Technology and Research</a></li>
								       <li><a href="#">Agroservices</a></li>
						            </ul>
							</li>
                            <li class="dropdown">
							     <a class="dropdown-toggle" data-toggle="dropdown" href="#">B.Com
							       <span class="caret"></span></a>
					            	<ul class="dropdown-menu">								             <li><a href="#">Mathematics</a></li>
							       <li><a href="#">Accountancy</a></li>
							       <li><a href="#">Applied Economics</a></li>
								    </ul>
							</li>
							<li class="dropdown">
							     <a class="dropdown-toggle" data-toggle="dropdown" href="#">B.C.A
							       <span class="caret"></span></a>
					            	<ul class="dropdown-menu">								             <li><a href="#">Mobile App Devp</a></li>
							       <li><a href="#">Muultimedia</a></li>
							       <li><a href="#">Animation</a></li>
								    </ul>
							</li>
							<li class="dropdown">
							     <a class="dropdown-toggle" data-toggle="dropdown" href="#">B.B.A
							       <span class="caret"></span></a>
					            	<ul class="dropdown-menu">								             <li><a href="#">Digital Marketing</a></li>
							       <li><a href="#">Shipping</a></li>
							       <li><a href="#">Airline Management</a></li>
								    </ul>
							</li>
							<li class="dropdown">
							     <a class="dropdown-toggle" data-toggle="dropdown" href="#">B.Ed.
							       <span class="caret"></span></a>
					            	<ul class="dropdown-menu">								             <li><a href="#">Accounts</a></li>
							       <li><a href="#">Arabic</a></li>
							       <li><a href="#">Computer Science</a></li>
								    </ul>
							</li>




                </ul> 
  </div>
</nav>
            

			<div class="container">
	<div class="row">
			<div class="col-lg-3">
				<button class="btn btn-success u">Questions</button><br><br>
					<table class="table" border="2" width="100%" text-align="center">
						<tr>
							<td><a href="#" class="ab">What is Agricultural Economics?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Agricultural Management?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What are Pest Economics?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is science?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Management ?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Pest Management?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">what is Immunology?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Food Economics? </a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Agricultural Experimentation?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Natural Economics?</a></td>
						</tr>
					</table>
			</div>
			<div class="col-lg-6">
			<h1>Agricultural Economics</h1>
				<p>
				   Agricultural economics is an applied field of economics concerned with the application of economic theory in optimizing the production and distribution of food and fibre�a discipline known as agricultural economics. Agricultural economics was a branch of economics that specifically dealt with land usage. It focused on maximizing the crop yield while maintaining a good soil ecosystem. Throughout the 20th century the discipline expanded and the current scope of the discipline is much broader. Agricultural economics today includes a variety of applied areas, having considerable overlap with conventional economics. Agricultural economists have made substantial contributions to research in economics, econometrics, development economics, and environmental economics. Agricultural economics influences food policy, agricultural policy, and environmental policy.


				  <h4> Origin</h4>
					Economics has been defined as the study of resource allocation under scarcity. Agricultural economics, or the application of economic methods to optimizing the decisions made by agricultural producers, grew to prominence around the turn of the 20th century. The field of agricultural economics can be traced out to works on land economics. Henry Charles Taylor was the greatest contributor with the establishment of the Department of Agricultural Economics at Wisconsin in 1909.

.

  
				</p>
                <a href="#" class="glyphicon glyphicon-thumbs-up">1K</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">comment:50</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">views:2K</a>
				
		</div>
	             <div class="col-lg-3">
		               <button class="btn btn-success u">Realted Topics</button><br><br>
			            <table class="table" border="2">
				           <tr>
					         <td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Food and consumer Economics</a></td>
				             </tr>
				           <tr>
					        <td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Production Economics</a></td>
				           </tr>
				           <tr>
				 	       <td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Farm Management</a></td>
				             </tr>
				           <tr>
					<td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Development Economics</a></td>
				</tr>
			</table>
	</div>
</div>
</div>

  
</body>
</html>
