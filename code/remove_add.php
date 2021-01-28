<?php
include("db.php");
$pid=$_REQUEST["pid"];
$sql1="delete from product2 where product_id=$pid";

if($connect->query($sql1)===TRUE)
{
	header('location:posted_ad.php');
}

?>