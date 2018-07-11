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
		<li id="mar"><a href="logout.php" id="nav"><span data-hover="Logout" >Logout</span></a></li>
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
							<td><a href="degreemainpage.php" class="ab">What is Agriculture Biotechnology?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Cell?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What are Tissue Culture?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What are Crop science?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What are Production ?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Pest Management?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">what is Immunology?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Stastics? </a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Agricultural Experimentation?</a></td>
						</tr>
						<tr>
							<td><a href="#"class="ab">What is Molecular Biology?</a></td>
						</tr>
					</table>
			</div>
			<div class="col-lg-6">
			<h1>Agricultural Biotechnology</h1>
				<p>
				   Agricultural biotechnology, also known as agritech, is an area of agricultural science involving the use of scientific tools and techniques, including genetic engineering, molecular markers, molecular diagnostics, vaccines, and tissue culture, to modify living organisms: plants, animals, and microorganisms. Crop biotechnology is one aspect of agricultural biotechnology which has been greatly developed upon in recent times. Desired trait are exported from a particular species of Crop to an entirely different species. These transgene crops possess desirable characteristics in terms of flavor, color of flowers, growth rate, size of harvested products and resistance to diseases and pests.

				  <h4> History</h4>
					Farmers have manipulated plants and animals through selective breeding for tens of thousands of years in order to create desired traits. In the 20th century, a surge in technology resulted in an increase in agricultural biotechnology through the selection of traits like increased yield, pest resistance, drought resistance, and herbicide resistance. The first food product produced through biotechnology was sold in 1990, and by 2003, 7 million farmers were utilizing biotech crops. More than 85% of these farmers were located in developing countries.

  
				</p>
                <a href="#" class="glyphicon glyphicon-thumbs-up">1K</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">comment:50</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">views:2K</a>
				
		</div>
	             <div class="col-lg-3">
		               <button class="btn btn-success u">Realted Topics</button><br><br>
			            <table class="table" border="2">
				           <tr>
					         <td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Plant Breeding</a></td>
				             </tr>
				           <tr>
					        <td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Agricultural Botony</a></td>
				           </tr>
				           <tr>
				 	       <td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Animal Science</a></td>
				             </tr>
				           <tr>
					<td><a href="https://targetstudy.com/courses/bsc-agricultural-biotechnology.html"class="ab">Cell Biology</a></td>
				</tr>
			</table>
	</div>
</div>
</div>

  
</body>
</html>
