<?php
include "connection.php";
 session_start();
 if(!isset($_SESSION['mail']))
 {
	 header("location:log.php");
 }
 $qid=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Comment Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="aboutuscss.css" rel="stylesheet">
	<link href="navcss.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script> 
       $(document).ready(function(){
       $("#flip").click(function(){
       $("#panel").slideToggle("slow");
    });
});
</script>
<style> 
.jum 
    {
     padding:5px;
  	}
#panel
	{
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
   }
#flip
   {
    padding: 5px;
    text-align: center;
   }
#panel 
	{
    margin-left:0px;
	text-align:left;
	width:780px;
    display: none;
    background-color: white;
   }
.block
   {
	text-align:center;
	vertical-align:middle;
   }
.circle
  {
  width:40px;
  height:40px;
  border-radius:100%;
  font-size:10px;
  color:white;
  background:#337ab7;
  
  }
.circle h2
  {
	padding-right:20px;
	vertical-align:middle;
	display:table-cell;
	
  }
.rowpad
 {
    border:1px solid #e7e5f2;
    padding:30px;
 }
#border
   {
     border-bottom:1px solid #e7e5f2;
     padding-bottom:10px;
   }
.atag
  {
    color:black;
  }
#mail
  {
   	padding:10px;
	padding-top:20px;
  }
.imagep{margin-right:20px;}
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
		<li id="mar"><a href="logout.php"id="nav"><span data-hover="Login">Logout</span></a></li>
	</ul>

	</div>
	</nav><br><br><br><br><br>
<div class="container" style='margin-top:50px;overflow:hidden;'>
		<div class="row">
			<div class="col-md-9">
				<?php
				include "connection.php";
				$sql="select * from question where id='$_GET[id]'";
				$sql1="select * from register where mail='$_SESSION[mail]'";
                $result=mysqli_query($con,$sql1);
                $row1=mysqli_fetch_array($result);
				if($res=(mysqli_query($con,$sql)))
				 {
					if(mysqli_num_rows($res)>0)
					{
						$row=mysqli_fetch_array($res);	
							?>
							<div class="rowpad but">
							<?php 								  
								  echo "Posted-by";
								  echo "<a>";
								  echo "   ".$row['fid'] ;
								  echo "</a>";
							      echo "  on  \t \t";
								  echo $row['date'];
							      $a=$row['tittle'];
								  echo "<a href='#'><h4>";
								  echo $a."</a></h4>";
								  echo '<img class="imagep"src="data:image/jpeg;base64,'.base64_encode( $row['image1'] ).'" align="left" width="100" height="100"/>';
								  echo "<br>";
								  echo "<h5>";
								  echo  "&nbsp;&nbsp;".$row['textarea'];echo "</h5><br><br>";
								  echo "<a id='border'><b>";
								  echo $row['mail'] ;
								  echo "</a></b><br><br>";
								  echo "<div class='row'>";
                                  echo "<i class='glyphicon glyphicon-thumbs-up'  style='font-size:15px; color:blue;' onClick='count()'></i>&nbsp;&nbsp;Likes";
								  echo " "."<a href='#' id='demo'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							      echo "<i class='glyphicon glyphicon-thumbs-down'  style='font-size:15px; color:blue;' onClick='count()'></i>&nbsp;&nbsp;Dislikes";
								  echo"<i class='fa fa-comments' style='color:blue;font-size:18px; margin-left:30px;'></i>";
								  echo "<a id='flip' style='font-size:15px; color:black'>&nbsp;comment</a>";
                                  echo "</div>";?>
        		<div class="container">
				<div class="row">
				  <form method="POST"  action="insert_comment.php" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
						<br><br>
						<input type="hidden" name="user_id" value="<?php echo $_GET['user_id'];?>">           <?php 
							  $sql="select * from comment where ques_id='$_GET[id]'";
							  echo "<div class='container'><div class='row' id='panel'>";
                              if($res=(mysqli_query($con,$sql)))
                                   {
	                             if(mysqli_num_rows($res)>0)
	                                  {
                                         while($row=mysqli_fetch_array($res))
											{
											 $r=$row['mail'];
											 $s="select * from register where mail=$r";      
											 echo '<div class="jumbotron jum">'; ?>
											 <div class="row">
											   <div class="circle col-sm-4 block" align="left">
                                                 <?php
												       	 $m=$row['mail'];	
											             $s=substr($m,0,1);
												         echo  "<h2>".$s."</h2>";
                                                         echo '</div>';
                                                         echo "<div class='col-sm-6'>";
										                 echo "<a id='mail'>".$row['mail']."</a>"."   "; 
										                 echo $row['com'];?>
											             <div class="row">
											             <div class="col-md-offset-1 col-md-2">
											             <a class='at'>Like</a>
														 </div>
											             <div class="col-md-2">
											             <a class='at'>Reply</a>
														 </div>
										              </div>
											       </div></div></div>				
											<?php
											}
										}
								}?>
			                   <label for="comment">Post your Comment here:</label>		            
							<textarea class="form-control" rows="3" cols="6" id="comment" name="com" placeholder="Comment here" ></textarea><br>
							<button type="submit" class="btn btn-primary">Post Comment</button>
					  
						</div>
                        <br>
						</div>
				</form>
			</div>
			</div>
		</div>
	</div>
				<?php echo  "</div></div>";?>
						</div>
                        </div>
						<?php
					}
				 }					
			?>
</div></div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


