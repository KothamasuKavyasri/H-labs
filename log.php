<?php 
session_start();
if(isset($_SESSION['mail']))
	{
     header("location: tutorial.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Main Page</title>

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
		  
		 .fc
		  {
		  padding:30px 50px;
		  margin:90px 20px 50px 50px ; 
		  color:black;
		  }
		  .ho a{color:white;}
		</style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top s">
	<div class="container-fluid ">
	<img src="blueelearn.png">
	<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
		<li><a href="tutorial.php"><span data-hover="Home" id="hov">Home</span></a></li>
		<li><a href="aboutus.php"><span data-hover="About Us" id="hov">About us</span></a></li>
		<li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorials <span class="caret" ></span></a>
        <ul class="dropdown-menu">
          <li><a href="btech.php">B.Tech</a></li>
          <li><a href="degreemainpage.php">Degree</a></li>
        </ul>
      </li>
		
		<li><a href="blog.php"><span data-hover="Blog"id="hov">Blog</span></a></li>
		<li><a href="log.php"><span data-hover="Logout" id="hov">Login</span></a></li>
	</ul>

	</div>
	</nav>
	<div class="container">
      <div class="row">
	    <div class="col-sm-offset-3 col-sm-5">
		     <form class="form-vertical fc" method="post" action="log_auth.php">

			    <h2>Login 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                 <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'><button type="button">&times;</button></span></h2> 
                 
                 <hr>
				 <div class="form-group">
				  <label for="Mobile or Mail">Email or Mobile number</label>
				  <input type="text" name="mail" class="form-control" id="mail" placeholder="Mobile or Email Id">
				 </div>
				 <div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				 </div>
				 <div class="checkbox">
                   <label><input type="checkbox"> Remember me</label>
                 </div>
				 <div><button type="submit" class="btn btn-block btn-primary ho" align="center">  Login</button>&nbsp;&nbsp;&nbsp;
				 <div class="">
				     <a href="forgetpassword.php"><b>Forgetten Password?</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <button type="button" class="btn btn-success ho"><a href="register.php">Sign in</a></button>
				 </div>
                 
				 </form>
	     </div>
	   </div>
	 </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
	  window.onload = function(){
        document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
	</script>
  </body>
</html>