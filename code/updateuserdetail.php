<?php

$name=$_POST["name"];
$password=$_POST["password"];
$address=$_POST["address"];
$city=$_POST["city"];
$pincode=$_POST["pincode"];
$mobile_no=$_POST["mobile"];
$email=$_POST["email"];

include("db.php");
session_start();
$id=$_SESSION["id"];

$sql1="update user set name='$name',password='$password',address='$address',city='$city',pincode='$pincode',mobile_no='$mobile_no',email='$email' where id='$id'";

if($connect->query($sql1)===TRUE)
{
	header('location:user_page.php');
}
else
{
		echo "error";
}
?>