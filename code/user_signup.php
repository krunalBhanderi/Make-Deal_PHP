<?php
	include('connect_database.php');

	$userid=$usermobile=$userpass="";
	$userid=$_POST['username'];
	$usermobile=$_POST['mobile'];
	$password=$_POST['pass'];

	$append_user=mysqli_query($conn,"INSERT INTO User_List VALUES('$userid','$usermobile','$password')");

	if($append_user)
	{
		echo "record inserted ";
	}
	else
	{
		echo "record not inserted";
	}
?>