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
<div class="post_ad_div">
<br>
<fieldset>
	<legend>POST_AD</legend>
	<form action="insert_ads_in_database.php" method="post">
		<table style="font-size:25px;">
			<tr><td>product name : </td><td><input type="text" required name="productname"> </td></tr>
			<tr><td>Upload images : </td><td> </td></tr>
			<tr><td>product price : </td><td><input type="text" required name="price"> </td></tr>
			<tr><td>product desc : </td><td><input type="textarea" required ncol=30 nrows=3 name="description"> </td></tr>
			<tr><td>Cotact Number : </td><td> <input type="text" required name="mobile">  </td></tr>
		</table>
	</form>
</fieldset>

</div>
</td>
</tr>
</table>

<footer></footer>

</body>
</html>