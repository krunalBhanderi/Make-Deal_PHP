<html>
<body>
<table border="1" align="left">
<tr>
<td>
<?php
include("db.php");

$sqlq1="select * from product1";

$result=$connect->query($sqlq1);

while($row=$result->fetch_assoc())
{
	echo "==================================================";
	$a=array(explode(".",$row["image"]));
	echo "<br>".$row["image"];
	$a=$row["image"];
	echo '<img src=$a>';
	echo "<br>"."-product  : ".$row["product"]."<br>"."-company   : ".$row["company"]."<br>"."-mrp: ".$row["mrp"]. "<br>"."-price: ".$row["price"]. "<br>"."-date of buy: ".$row["dateofbuy"]. "<br>"."-details: ".$row["other"]. "<br>";

	
}?>
</td>
<?php
include("db.php");

$sqlq1="select * from product1";

$result=$connect->query($sqlq1);

while($row=$result->fetch_assoc())
{
	echo "==================================================";
		echo "<br>"."-product  : ".$row["product"]."<br>"."-company   : ".$row["company"]."<br>"."-mrp: ".$row["mrp"]. "<br>"."-price: ".$row["price"]. "<br>"."-date of buy: ".$row["dateofbuy"]. "<br>"."-details: ".$row["other"]. "<br>";
	
}
?>