
<?php 
	session_start();
?>
<html>
<head>
<link rel="stylesheet" href="cssfile.css" type="text/css">
</head>
<body>
	<header><div class="indiv1">
		<br>
		<table align="center" align="left" border="0" width=1400px>
		<tr><td width="100px"><img class="main_logo_css" src="photos/logo1.png" height="170px" width="170px" bgcolor="white"></td>
		<td> &nbsp &nbsp <font class="font_css">MAKE DEAL </font><br><br>
		 <!--<img src="photos/web_logo.png" height=80px width=700px></td>--></td>
		<td align="center" width=150px>&nbsp &nbsp 
  			<a href="indexa.php"><span><img class="user_login_photo" src="photos/my_photo.jpg"><br><font class="user_login_name">Welcome <br> Yash Dhameliya </font></span></a>
		</td></tr>
		<tr><td colspan=3 class="slogan_slot"><font class="slogan_css"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Let's Make Deals Online &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</font></td></tr>
		<tr width=1470px><td colspan=3 style="padding-top:78px;">
			<ul>
  			<!--<li style="background-color: grey; font-size:45px; padding-left:10px; padding-right:10px"></li>-->
  			<li style="border-left:5px solid #006400;"><a href="#news">News</a></li>
  			<li><a href="#contact">Contact</a></li>
  			<li><a href="#About us">About us</a></li>
  			<li><a href="#Allads">All Ads</a></li>
  			<li style="float:right"><a class="active" href="addproduct.php"><font style="font-size:20px;">POST AD</font></a></li>
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
						<td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/car.png"><br><font class="categories_fonts">Vehicles</a></td>
						<td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/bikes.png"><br><font class="categories_fonts">Bikes</a></td>
						
						<td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/Hobby.png"><br><font class="categories_fonts">Sports & Hobbies</a></td>
						<td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/pets.png"><br><font class="categories_fonts">Pets</a></td>
						<td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/furniture.png"><br><font class="categories_fonts">Furniture</a></td>
						<td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/mobile.png"><br><font class="categories_fonts">Mobiles</a></td>
						<td class="categories_align"><a href="properties_page.php"><img class="imgclass" src="photos/fashion.png"><br><font class="categories_fonts">Fashion</a></td>
						</tr>
					</font>

					</table>
				</div></td></tr>
		</table>
	</div></td></tr></table>
	<div class="main_content_deivision">
		<fieldset class="submit_ad_fieldset">
			<legend class="fieldset_name_css">Submit an Ad</legend>
				<div class="submit_ad_div">
				
				
				<form action="submit_cars1.php" method="post" enctype="multipart/form-data">
				<table class="submit_ad_table"  align="center">
				<tr><td class="tdcss1">Title*<td class="tdcss2"><input class="inputcss" type="text" name="title" required="*"></tr>
				<tr><td class="tdcss1">Price*<td class="tdcss2"><input class="inputcss" type="text" name="price" required="*"></tr>
				<tr><td class="tdcss1">Company<td class="tdcss2"><select name="company" class="inputcss2">
										<option>Maruti_Suzuki</option>
										<option>Hyundai</option>
										<option>Honda</option>
										<option>Tata</option>
										<option>Valkswagen</option>
										<option>Ford</option>
										<option>Skoda</option>
										<option>Mahindra</option>
										<option>Toyota</option>
										<option>Chevrolet</option>
										<option>Fiat</option>
										<option>Nissan</option>
										<option>Mitsubishi</option>
										<option>Renault</option>
										<option>Mercedes_Benz</option>
										<option>Audi</option>
										<option>BMW</option>
										<option>Hindustan_Motors</option>
										<option>Others</option>
									</select></tr>
				<tr><td class="tdcss1">Model<td class="tdcss2">
										<input type="text" name="model" class="inputcss">
				</tr>
				<tr><td class="tdcss1">Year<td class="tdcss2"><input class="inputcss" type="text" name="year"></tr>
				<tr><td class="tdcss1">Fuel<td class="tdcss2"><select name="fuel" class="inputcss2">
										<option>lpg</option>
										<option>cng & Hybrids</option>
										<option>petrol</option>
										<option>diesel</option>
									</select></tr>
				<tr><td class="tdcss1">KM Driven<td class="tdcss2"><input class="inputcss" type="text" name="km_driven"></tr>
				<tr><td class="tdcss1">Description<td class="tdcss2"><input type="text" rows="5" cols="40" name="description"></textarea></tr>
				<tr>
				<td></td>
				<td>
				<input type="file" name="fileToUpload1" id="fileToUpload1">
									<br>
									<input type="file" name="fileToUpload2">
									<br>
									<input type="file" name="fileToUpload3">
									<br>
									<input type="file" name="fileToUpload4">
				</td>
				</tr>
				<tr height="100px"><td style="border-top:1px solid grey;" class="tdcss1" colspan="2" align="right"><input style="height:60px; width:150px; background-color:#ff9933; margin-right: 10px; font-size:20px; color:white;" type="submit" name="submit" value="submit"></tr>	
				</table>					
				</div>
		</fieldset>
		
	</div>
	</form>
<footer class="footer1">
	<table class="footer_table" align="center" border="0">
		<tr><td style="border-right: 2px solid red;"> <h1> MAKEDEAL</h1></td><td style="padding-left:100px" align="right"><h2>f</h2></td><td width="30px"><h2>t</h2></td><td width="30px"><h2>i</h2></td><td width="30px"><h2>g+ </h2></td></tr>
	</table>

</body>
</html>