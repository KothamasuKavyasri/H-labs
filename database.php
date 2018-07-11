<?php
include  'connection.php';
$sql="create database tutorial";

if(mysqli_query($con,$sql))
{
	echo "Database Created succesfully";
	
}
else
{
	echo "Error in Database:".mysqli_error($con);
	
}
	mysqli_close($con);
?>