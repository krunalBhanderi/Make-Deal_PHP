<html>
<head>
<link rel="stylesheet" href="cssfile.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cssfile2.css" type="text/css">

<style>
{box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ec7063;
  color: black;
}

.topnav a.active {
   color: white;
}


.topnav .search-container {
  float: right;

}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 300px;
  background: green;
  font-size: 17px;
  font-color: blue;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 700px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

</head>
<body>
	<?php session_start(); ?>
	<header><div class="indiv1">
		<br>
		<table align="center" align="left" border="0" width=1400px>
		<tr><td width="100px"><img class="main_logo_css" src="photos/logo1.png" height="170px" width="170px" bgcolor="white"></td>
		<td> &nbsp &nbsp <font class="font_css">MAKE DEAL </font><br><br>
		 <!--<img src="photos/web_logo.png" height=80px width=700px></td>--></td>
		<td align="center" width=150px>&nbsp &nbsp 
  			<a href="user_page.php"><span><img class="user_login_photo" src="photos/my_photo.jpg"><br><font class="user_login_name">Welcome <br> <?php echo($_SESSION["name"]); ?> </font></span></a>
			<br>
			</td></tr>
		<tr><td colspan=3 class="slogan_slot"><font class="slogan_css"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Let's Make Deals Online &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</font></td></tr>
		<tr width=1470px><td colspan=3 style="padding-top:78px;">
			<ul>
  			<li style="background-color: grey; font-size:45px; padding-left:10px; padding-right:10px"></li>
  			<!DOCTYPE html>
<html>
<body>

<div class="topnav">
  <ul>
  <li style="border-right:2px solid green;border-left:2px solid green;color:white;font-size:30px;width:100px;height:49px;text-align:center;padding-top:2px;">Home
  <li><a href="#about">About</a>
  <li><a href="#contact">Contact</a>
  <li><a align="right" href="addproduct.php">Post Ad</a>
</ul>
</div>


</body>
</html>
</ul>
	</td></tr></table>
	</div>
	</header>
	
	<div class="main_content_deivision">
	<div class="search_container">
		<form action="" method="post">
		<table class="search_container_table">
			<tr><td><input class="search_input2" type="text" name="product_name" placeholder="what are you looking for ?">
			<td><input class="search_input1" type="text" name="pincode" placeholder="Pincode">
			<td><input class="search_input3" type="submit" name="submit" value="Search">
			</tr>
		</table>
		</form>
		</div>
		<div class="sub_categories_div">
			
		</div>
		<script>
	function myFunction() {
    var x = document.getElementById("Dd");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
	}
	else { 
        x.className = x.className.replace(" w3-show", "");
		}
	}
	function myFunction2() {
    var x = document.getElementById("Dd2");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
	}
	else { 
        x.className = x.className.replace(" w3-show", "");
		}
	}
	function myFunction3() {
    var x = document.getElementById("Dd3");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
	}
	else { 
        x.className = x.className.replace(" w3-show", "");
		}
	}
	
</script>
		<fieldset class="fieldset1">
			
		<div class="ads_list">
				

				<?php
include("db.php");


	
	
	$sql="select * from user";
	$result=$connect->query($sql);

	while($row=$result->fetch_assoc())
	{
	?>	
		<table border="1">
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
		<br>
		<a href="remove_user.php?id=<?php echo $row["id"];?>"><input type="button" value="remove">
		</table>
	<?php
	}
	?>
					
			</div>
		
			
			
			
		</fieldset>
	</div>
	

<footer class="footer1">
	<table class="footer_table" align="center" border="0">
		<tr><td style="border-right: 2px solid red;"> <h1> MAKEDEAL</h1></td><td style="padding-left:100px" align="right"><h2>f</h2></td><td width="30px"><h2>t</h2></td><td width="30px"><h2>i</h2></td><td width="30px"><h2>g+ </h2></td></tr>
	</table>
</footer>
<footer class="footer2"><center><font color="white">@Copyright -2018. All Rights Reserved</center></footer>
</body>
</html>