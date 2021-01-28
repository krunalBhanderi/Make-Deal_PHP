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
<div class="Login_Division">
<br>
<table><tr><td>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<fieldset class="login_fieldset" style="height:350px; width:700px">
		<legend><b><u>LOGIN</u></b></legend>
		<br><br><br>
			<table class="login_input_table" style="font-size:30px;">
				<tr><td>
					&nbsp > USER ID :
					</td>
					<td><input class="username_login_input" type="text" name="userid" placeholder="NAME" 		required="Enter Name"></td></tr>
					<tr><td><br>
					&nbsp > PASSWORD :
					</td>
					<td><br><input class="username_login_input" type="PASSWORD" name="pass" placeholder="PASSWORD" required="Enter Password"></td></tr>
					<tr><td align="center"colspan="2"><br><input style="height:50px; width:150px; font-size:25px; text-decoration:bold; border:2px solid  #bc452d;" type="submit" name="login" value="Login"></td></tr>
			</table>
	</fieldset></form></td>
	<td>
	<form action="user_signup.php" method="post">
	<fieldset class="login_fieldset2" style="height:550px; width:600px;">
		<legend><b><u>SIGN UP</u></b></legend>
		<br><br><br>
			<table class="login_input_table" style="font-size:30px;">
				<tr><td>
					&nbsp > USER NAME :
					<br>
					<input class="username_login_input" type="text" name="username" placeholder="NAME" 		required="Enter Name">
					</td></tr>
					<tr><td>
					&nbsp > MOBILE NO. :
					<br>
					<input class="username_login_input" type="text" name="mobile" placeholder="Mobile Number	" 	required="Enter Name"></td></tr>
					<tr><td>
					&nbsp > PASSWORD :
					<br><input class="username_login_input" type="PASSWORD" name="pass" placeholder="PASSWORD" required="Enter Password"></td></tr>
					<tr><td align="center"><br><input style="height:50px; width:150px; font-size:25px; text-decoration:bold; border:2px solid  #bc452d;" type="submit" name="signup" value="Sign up"></td></tr>
			</table>
	</fieldset></form></td></tr></table>
</form>
</div>
</td>
</tr>
</table>

<footer></footer>

</body>
</html>