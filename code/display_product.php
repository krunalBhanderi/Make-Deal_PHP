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
	<table class="categories_table" border="1" align="center">
		<tr class="categories_row"><td bgcolor="green" class="catagories_hover">
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
	
			
			
			<div  style="height:800; width:99%; border:2px solid black; margin-top:2px">
				<?php
include("db.php");
session_start();
$sqlq1="select * from product2";
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
	<img src="<?php echo 'uploads/'.$row["img1"]; ?>" style="width:650" height="400">
  <div class="text">first image</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="<?php echo 'uploads/'.$row["img2"]; ?> " style="width:650" height="400">
  <div class="text">second image</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="<?php echo 'uploads/'.$row["img3"]; ?> " style="width:650" height="400">
  <div class="text">third image</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="<?php echo 'uploads/'.$row["img4"]; ?>" style="width:650" height="400">
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
	&nbsp <font color="blue" size="10"> <?php echo $row["name"]?></font> <br	> 
	&nbsp &nbsp <font color="black" size="6"> <?php echo $row["company_name"]?><br>
	&nbsp <?php echo $row["city"] ?><br>
	&nbsp <font color="red" size="6">RS: <?php echo $row["selling_price"] ?></font>
	
	
	
	
	<hr>
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
	<td colspan="2"><font color="blue" size="6">&nbsp Description:- </font><font size="6"><?php echo $row["description"]; ?>
	
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
</div>
