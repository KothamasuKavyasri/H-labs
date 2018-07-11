<?php
include  'connection.php';

$s="create table register(fid varchar(20),lname varchar(20),mail varchar(30),password varchar(10),radio varchar(6))";

if(mysqli_query($con,$s))
{
	echo "Table Created succesfully";
	
}
else
{
	echo "Error in creating Table:".mysqli_error($con);
	
}
	mysqli_close($con);
?>