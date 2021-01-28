

<html>
<head>
<link rel="stylesheet" href="cssfile.css" type="text/css">


</head>
<body>
	
	<header><div class="indiv1">
		<table align="center" class="header_table" widht="300"s border="1">
		<tr><td rowspan="2"><img src="photos/logo2.png" height="150px" width="200px" bgcolor="#50fd22"></td>
		<td rowspan="2"> &nbsp &nbsp <img src="photos/web_logo.png" height=150px width=1400px></td>
		<td rowspan="2">&nbsp &nbsp 
  			<a href="Login_page.php"><span><button class="login_button"> LOGIN </button></span></a>
		</div></td></tr></table>
	</div>
	</header>

<div class="properties_display_div1">
	
	<div class="ads_list">
		<fieldset>
			<legend style="border-radius:100px; height:120px; width:400px;"><img src="photos/property.png" align="left" style="height:120px; width=120px;border-radius:100px; box-shadow: 5px 5px 5px;"><lable style="font-size:60px">Properties</lable></legend>
			
			<div class="categories_table_div">
	<fieldset width="97px">
	<legend>Categories</legend>
	</fieldset>
	</div>
	
			
			
			<div  style="height:800; width:99%; border:2px solid black; margin-top:2px">
				
				
				<table border="1">
				<tr>
				<td>
				<?php

				
				include("db.php");		


	
	
	


	
	
	
	
	
	$sql="select * from user";
	$result=$connect->query($sql);

	while($row=$result->fetch_assoc())
	{
	?>	
		<td>
		<img src="<?php echo 'uploads/'.$row["image"]; ?>">
		</td>
		<td>
		<?php echo $row["id"];?>
		<hr>
		
		<?php echo $row["name"]; ?>
		<br>
		<?php echo $row["address"]; ?>
		<br>
		<?php echo $row["city"]; ?>
		<br>
		<?php echo $row["pincode"]; ?>
		<hr>
		<?php echo $row["email"]; ?>
		<br>
		<?php echo $row["mobile_no"]; ?>
		<hr>
		<a href="remove_user.php?id=<?php echo $row["id"];?>"><input type="button" value="remove">

	
	</td>
	</tr>
	
</table>
	</a>
</body>
</html>
<?php

 }
?>

				
			</div>
		</fieldset>
	</div>
</div>
