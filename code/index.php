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
  background-color: #ddd;
  color: white;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}


.topnav .search-container {
  float: right;
  color: blue;
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
  </ul>
  
</div>

</body>
</html>
</ul>
		</td></tr></table>
	</div>
	</header>
	<table class="categories_div_table" align="center"><tr><td>
		<div class="categories_division">
		<table class="categories_view" border=0px>
			<tr><td class="categories_text_css"><u>Categories</td>
			<td><img src="photos/right_arrow.png" width="30px" height="150px">
				<div class="categories_icons">
					<table border=0px height=130px width=2000px style="text-align: center;">
						<tr><td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/property.png" ><br><font class="categories_fonts">Properties</label></a></td>
						<td class="categories_align"><a href="cars_page.php"><img class="imgclass" src="photos/car.png"><br><font class="categories_fonts">Cars</a></td>
						<td class="categories_align"><a href="bikes_page.php"><img class="imgclass" src="photos/bikes.png"><br><font class="categories_fonts">Bikes</a></td>
						
						<td class="categories_align"><a href="sports_page.php"><img class="imgclass" src="photos/Hobby.png"><br><font class="categories_fonts">Sports & Hobbies</a></td>
						<td class="categories_align"><a href="pets_page.php"><img class="imgclass" src="photos/pets.png"><br><font class="categories_fonts">Pets</a></td>
						<td class="categories_align"><a href="furniture_page.php"><img class="imgclass" src="photos/furniture.png"><br><font class="categories_fonts">Furniture</a></td>
						<td class="categories_align"><a href="electronics_page.php"><img class="imgclass" src="photos/mobile.png"><br><font class="categories_fonts">Electronics</a></td>
						<td class="categories_align"><a href="fashion_page.php"><img class="imgclass" src="photos/fashion.png"><br><font class="categories_fonts">Fashion</a></td>
						</tr>
					</font>

					</table>
				</div></td></tr>
		</table>
		</div></td></tr></table>
		
	<div class="main_content_deivision">
		<div class="search_container">
		
		<table class="search_container_table">
			<tr><form action="search_display1.php" method="post"><td><input class="search_input2" type="text" name="search" placeholder="what are you looking for ?">
			<td><input class="search_input3" type="submit" name="submit" value="Search"></form>
			<td style="padding-left:50px;"><div class="w3-dropdown-click">
						<button onclick="myFunction()"  class="w3-button w3-black" style="border-right:2px solid red;border-left:2px solid red;border-bottom:10px solid #ec7063;">Post Ad</button>
						<div id="Dd" style="width:100%;" class="w3-dropdown-content w3-bar-block w3-border">
							<a href="submit_properties_ad.php" class="w3-bar-item w3-button">Properties</a>
							<a href="submit_cars_ad.php" class="w3-bar-item w3-button">Cars</a>
							<a href="submit_bikes_ad.php" class="w3-bar-item w3-button">Bikes</a>
							<a href="submit_furniture_ad.php" class="w3-bar-item w3-button">Furniture</a>
							<a href="submit_fashion_ad.php" class="w3-bar-item w3-button">Fashion</a>
							<a href="submit_sports_ad.php" class="w3-bar-item w3-button">Sports & hobbies</a>
							<a href="submit_pets_ad.php" class="w3-bar-item w3-button">Pets</a>
							<a href="submit_electronics_ad.php" class="w3-bar-item w3-button">Electronics</a>
						</div>
					</div></td>
			</tr>
		</table>
		
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
	</script>
		</div>
		
		<fieldset class="fieldset1">

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