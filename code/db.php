<?php

	$connect=mysqli_connect("localhost","root","","project");
	
	if($connect->connect_error)
	{
		die("Error".$connect."msg: ".connect_error);
	}
	else
	{
	
	}
?>