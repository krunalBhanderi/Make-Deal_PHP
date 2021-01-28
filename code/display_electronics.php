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
			<table class="sub_categories_table_small">
			<tr><td style="width:800px;background-color:#ec7063;font-size:30px;text-align:center;border-radius:10px;"> Electronics 
				
				<td><img src="photos/right_arrow.png" height="145px" width="30px"></tr>
				<tr>
					<td colspan="2" class="sub_categories_table_tr" align="center"><div class="w3-dropdown-click">
						<button onclick="myFunction()" style="height:90%;" class="w3-button w3-black">Select Type</button>
						<div id="Dd" style="width:100%;" class="w3-dropdown-content w3-bar-block w3-border">
							<a href="#" class="w3-bar-item w3-button">Computers & Laptops</a>
							<a href="#" class="w3-bar-item w3-button">Tvs</a>
							<a href="#" class="w3-bar-item w3-button">Harddisks_printers_monitors</a>
							<a href="#" class="w3-bar-item w3-button">Acs</a>
							<a href="#" class="w3-bar-item w3-button">Washing_Machine</a>
							<a href="#" class="w3-bar-item w3-button">Fridges</a>
							<a href="#" class="w3-bar-item w3-button">Cameras & Lenses</a>
							<a href="#" class="w3-bar-item w3-button">Kitchen Appliances</a>
							<a href="#" class="w3-bar-item w3-button">Games & Entertainment</a>
							
						</div>
						
										

					</div>
					</td></tr>
				
			</table>
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
	
</script>
		<fieldset class="fieldset1">
			<legend class="fieldset_name_css"><img src="photos/electronics.png" height="100px" width="100px"></legend>

		<div class="ads_list">
				

			<?php
include("db.php");

$sqlq1="select * from electronics";
$sql2="select * from user";

$result=$connect->query($sqlq1);
$result1=$connect->query($sql2);
$pid=$_REQUEST["pid"];
while($row=$result->fetch_assoc())
{
		


	if($row["product_id"]==$pid)
	{

	
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: blue;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,10,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 50%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<br>
<br>
<table border="2" align="center" widht="800">
<tr>
<td rowpan="2">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
	<img src="<?php echo 'uploads/'.$row["img1"]; ?>" style="width:450" height="400">
  <div class="text">first image</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="<?php echo 'uploads/'.$row["img2"]; ?> " style="width:450" height="400">
  <div class="text">second image</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="<?php echo 'uploads/'.$row["img3"]; ?> " style="width:450" height="400">
  <div class="text">third image</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="<?php echo 'uploads/'.$row["img4"]; ?>" style="width:450" height="400">
  <div class="text">forth image</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 

  </div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</td>	
	

	
	<td>  
	&nbsp <font color="black" size="6"> name: <?php echo $row["title"]?></font> <br	> 
	
	&nbsp type: 	  <?php echo $row["type"] ?><br>

	<br>
	&nbsp Description: <?php echo $row["description"] ?><br>
		
	
	<br>
	
		<?php
	$sql1="select * from user";
	$result1=$connect->query($sql2);

	while($row1=$result1->fetch_assoc())
	{
	?>
		&nbsp <?php echo $row1["name"]; ?>
		<br>
		&nbsp <?php echo $row1["city"]; ?>
		<br>
		&nbsp <?php echo $row1["email"]; ?>
		<br>
		&nbsp <?php echo $row1["mobile_no"]; ?>
	
	
	</td>
	</tr>
	<tr>
	<td colspan="2"><font color="blue" size="6">&nbsp prize:- </font><font size="6"><?php echo $row["price"]; ?>
	
	</td>
	</tr>
	<tr>
	<td>
	<?php
		if($_SESSION["id"]==1000)
		{
	?>
		
		<a href="remove_product.php?pid=<?php echo $row["product_id"];?>"><input type="button" value="remove">
	<?php
	}
	?>
	</td>
	</tr>
	
</table>
	<?php
	}
	
	?><br>
	</a>
</body>
</html>
<?php
}
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