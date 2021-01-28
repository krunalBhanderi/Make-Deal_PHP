<?php
	$conn=mysqli_connect("localhost","root","");
	$database=mysqli_select_db($conn,"User_Database");

	if($conn)
	{
		echo "Connection Successful";
	}
	else
	{
		echo "Connection Not Done";
	}
?>