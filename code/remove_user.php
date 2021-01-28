<?php
include("db.php");
$id=$_REQUEST["id"];
$sql1="delete from user where id=$id";

if($connect->query($sql1)===TRUE)
{
	header('location:view_user.php');
}

?>