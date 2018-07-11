<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forgetten Password</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
	 .rowpad
       {
        border:1px solid #e7e5f2;
        padding:30px;
        }
	  .cont
	    {
		margin-top:100px;
        width:600px;
	    }
   </style>
	</head>
  <body>
       <div class="container cont">
	   	 <div class="row rowpad">
		   
		    <form method="POST" action="reset.php" class="form-horizontal">
		     <h3>Find your Account</h3><b><hr></b>
		     <label>Please enter your E-mail Id here...</label><br>
			 <div class="form-group">
			 <input type="text" name="mail" placeholder="Enter Email" class="form-control">
			 <div>
			  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button type="submit" class="btn btn-default">Cancel</button>
			 </div>
		   </form>
		   
		 </div>
		
	    </div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
