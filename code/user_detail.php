<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> user detail </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1></strong> User Detail</h1>
                                                   </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Enter new user detail</h3>
                            
                        		</div>
                        		<div class="form-top-right">
                        			
                        		</div>
                            </div>
				<?php
					session_start();
		include("db.php");
		$id=$_SESSION["id"];
		

		$sql="select * from user";
		$result=$connect->query($sql);
		while($array=$result->fetch_assoc())
		{
			if($array["id"]==$id)
			{
				
			?>
                            <div class="form-bottom">
			                    <form role="form" action="updateuserdetail.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="Enter Name"><?php echo $array["name"]; ?></label>
			                        	<input type="text" name="name" value="<?php echo $array["name"]; ?>" class="form-username form-control" id="form-username">
			                        </div>
									
			                        
									<div class="form-group">
			                        	<label class="sr-only" for="Enter Password">Enter Passwword</label>
			                        	<input type="text" name="password" placeholder="<?php echo $array["password"]; ?>" class="form-username form-control" id="form-username">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="Address">Enter Address</label>
			                        	<input type="text" name="address" value="<?php echo $array["address"]; ?>" class="form-password form-control" id="form-username">
			                        </div>
									
									<div class="form-group">
			                        	<label class="sr-only" for="City">Enter City</label>
			                        	<input type="text" name="city" value="<?php echo $array["city"]; ?>" class="form-password form-control" id="form-username">
			                        </div>
									
									<div class="form-group">
			                        	<label class="sr-only" for="Pincode">Enter Pincode</label>
			                        	<input type="text" name="pincode" value="<?php echo $array["pincode"]; ?>" class="form-password form-control" id="form-username">
			                        </div>
									
									<div class="form-group">
			                        	<label class="sr-only" for="Mobile NO">Enter Mobile No</label>
			                        	<input type="text" name="mobile" value="<?php echo $array["mobile_no"]; ?>" class="form-password form-control" id="form-username">
			                        </div>
									
									<div class="form-group">
			                        	<label class="sr-only" for="Email ID">Enter E-Mail Id</label>
			                        	<input type="text" name="email" value="<?php echo $array["email"]; ?>" class="form-password form-control" id="form-username">
			                        </div>
									
			                        <button type="submit" class="btn">Update	</button><br>
									
			                    </form>
		                    </div>
								
								
									
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
		<?php
			}
		}
		?>
		
			


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>