<html>
<head>
<link rel="stylesheet" href="cssfile.css" type="text/css">
</head>
<body>
	<header><div class="indiv1">
		<table align="center" class="header_table" border="1">
		<tr><td rowspan="2"><img src="photos/logo2.png" height="150px" width="200px" bgcolor="#50fd22"></td>
		<td rowspan="2"> &nbsp &nbsp <img src="photos/web_logo.png" height=150px width=1400px></td>
		<td rowspan="2">&nbsp &nbsp 
  			<a href="Login_page.php"><span><button class="login_button"> LOGIN </button></span></a>
		</div></td></tr></table>
	</div>
	</header>

<table class="tablecss1" align="center">
<tr><td>
<div class="properties_display_div">
	<div class="categories_table_div">
	<fieldset width="97px">
	<legend>Categories</legend>
	<table class="categories_table" border="1" align="center">
		<tr class="categories_row"><td  class="catagories_hover">
			Properties
		</td></tr>
		<tr class="categories_row"><td class="catagories_hover">
			Vehicles
		</td></tr>
		<tr class="categories_row"><td class="catagories_hover">
			Sports and Hobbies
		</td></tr>
		<tr class="categories_row"><td class="catagories_hover">
			Bikes
		</td></tr>
		<tr class="categories_row"><td class="catagories_hover">
			Pets
		</td></tr>
		<tr class="categories_row"><td class="catagories_hover">
			Furniture
		</td></tr>
		<tr class="categories_row"><td class="catagories_hover">
			Mobiles
		</td></tr>
		<tr class="categories_row"><td class="catagories_hover">
			Fashion
		</td></tr>
	</table>
	</fieldset>
	</div>
	<div class="ads_list">
		<fieldset>
			<legend style="border-radius:100px; height:120px; width:400px;"><img src="photos/property.png" align="left" style="height:120px; width=120px;border-radius:100px; box-shadow: 5px 5px 5px;"><lable style="font-size:60px">Properties</lable></legend>
			<div style="height:570px; width:99%; border:2px solid black; margin-top:2px">
<?php
include("db.php");
$search=$_POST['search'];
$sqlq1="select * from product2";
$search1=str_replace(' ','',$search);
$result=$connect->query($sqlq1);

while($row=$result->fetch_assoc())
{
	
	$r1=str_replace(' ','',$row["name"]);
	if(strtoupper($search1)==strtoupper($r1))
	{
		
?>
<html>
<body align="center">
<a href="display_product.php?pid=<?php echo $row["product_id"];?> ">
<table  height="10" align="center">
	<tr width="700">
	<td margin="left" rowspan="7"><img src="<?php echo 'uploads/'.$row["img1"]; ?>" height="100" width="200" style="margin-right:-0"></td>
	<td>&nbsp &nbsp &nbsp <font color="blue" size="20"> <?php echo $row["name"]?></font> <br>&nbsp &nbsp &nbsp <font color="black" size="5"> <?php echo $row["city"] ?></td>
	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font size="15" >RS: <?php echo  $row["selling_price"] ?> </td></tr>
	<hr width="800">
</table></a>
</body>
</html>
<?php 
}
	}


?>

	

<?php
include("db.php");
$search=$_POST["search"];
$sqlq1="select * from product2";
$search1=str_replace(' ','',$search);
$result=$connect->query($sqlq1);

while($row=$result->fetch_assoc())
{
	$r1=str_replace(' ','',$row["company_name"]);
	
	if(strtoupper($search1)==strtoupper($r1))
	{
		
?>
<html>
<body align="center">
<a href="display_product.php">
<table  height="10" align="center">
	<tr width="700">
	<td margin="left" rowspan="7"><img src="<?php echo 'uploads/'.$row["img1"]; ?>" height="100" width="200" style="margin-right:-0"></td>
	<td>&nbsp &nbsp &nbsp <font color="blue" size="20"> <?php echo $row["name"]?></font> <br>&nbsp &nbsp &nbsp <font color="black" size="5"> <?php echo $row["city"] ?></td>
	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font size="15" >RS: <?php echo  $row["selling_price"] ?> </td></tr>
	<hr width="800">
</table></a>
</body>
</html>
<?php }

	}
	
?>




<?php
include("db.php");
$search=$_POST["search"];
$sqlq1="select * from product2";
$search1=str_replace(' ','',$search);
$result=$connect->query($sqlq1);
$a=array(1000);
$c=0;
while($row=$result->fetch_assoc())
{
	$r1=str_replace(' ','',$row["city"]);
	if(strtoupper($search1)==strtoupper($r1))
	{
	
	?>
<html>
<body align="center">
<a href="display_product.php">
<table  height="10" align="center">
	<tr width="700">
	<td margin="left" rowspan="7"><img src="<?php echo 'uploads/'.$row["img1"]; ?>" height="100" width="200" style="margin-right:-0"></td>
	<td>&nbsp &nbsp &nbsp <font color="blue" size="20"> <?php echo $row["name"]?></font> <br>&nbsp &nbsp &nbsp <font color="black" size="5"> <?php echo $row["city"] ?></td>
	<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font size="15" >RS: <?php echo  $row["selling_price"] ?> </td></tr>
	<hr width="800">
</table></a>
</body>
</html>
<?php 
}
}

?>
	
			</div>
		</fieldset>
	</div>
</div>
</td>
</tr>
</table>

<footer></footer>

</body>
</html>