<?php
include "connection.php";

 $sql="select * from question";
   if($res=(mysqli_query($con,$sql)))
   {
	    if(mysqli_num_rows($res)>0)
	        {
                while($row=mysqli_fetch_array($res))
				{
					?>
					<html>
					 <body>
					     <div class="container">
						   <label for="comment">Question:</label>
						   <div class="form-control" rows="5" id="comment" name="que"><?php echo $date "<br>" $row['textarea'];?></div>
						  </div>		  
					 </body>	
					</html>
					<?php
				}
			}
   }
?>