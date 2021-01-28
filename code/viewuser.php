<?php
include("db.php");

$sqlq1="select * from user";
$sqlq1="select * from user";

$result=$connect->query($sqlq1);

while($row=$result->fetch_assoc())
{
	echo "==================================================";
	
	echo "<br>"."-id     : ".$row["id"]."<br>"."-name   : ".$row["name"]."<br>"."-user name: ".$row["username"]. "<br>"."-password: ".$row["password"]. "<br>"."-address: ".$row["address"]. "<br>"."-city: ".$row["city"]. "<br>"."-pincode: ".$row["pincode"]. "<br>"."-mobile no: ".$row["mobile"]. "<br>"."-Email ID: ".$row["email"];
}
?>