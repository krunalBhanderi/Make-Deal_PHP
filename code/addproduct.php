<!DOCTYPE html>
<html lang="en">

    <head>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login Form </title>

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
                            <h1></strong> <font color="grey"> Make Deal </font></h1>
                                                   </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			
                            		<h1>Enter Product Details</h1>
                        		</div>
                        		<div class="form-top-right">
                        			                       		</div>
                            </div>
							
                            <div class="form-bottom">
			                    <form role="form" action="addproduct1.php" method="post" class="login-form" enctype="multipart/form-data">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="Enter Name">Product Name</label>
			                        	<input type="text" name="product_name" placeholder="Enter Product Name" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="Enter User ID">Product company</label>
			                        	<input type="text" name="product_company" placeholder="Enter Product Company" class="form-password form-control" id="form-usrname">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="Enter_Password">Product MRP</label>
			                        	<input type="text" name="product mrp" placeholder="Product mrp" class="form-password form-control" id="form-usrname">
			                        </div>
									
									
									<div class="form-group">
			                        	<label class="sr-only" for="City">Selling Price</label>
			                        	<input type="text" name="selling_price" placeholder="Selling Price" class="form-password form-control" id="form-username">
			                        </div>
									
									<div class="form-group">
			                        	<label class="sr-only" for="Address">Description</label>
			                        	<input type="text" name="description" placeholder="Description" class="form-password form-control" id="form-username">
			                        </div>
									
									<div class="dropdown">
<button onclick="myFunction()" class="dropbtn" name="type">select type</button>
  <div id="myDropdown" class="dropdown-content">
    Home
    About
    Contact
  </div>
</div>
									
									
									
									<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
									
									<input type="file" name="fileToUpload1">
									<input type="file" name="fileToUpload2">
									<input type="file" name="fileToUpload3">
									<input type="file" name="fileToUpload4">
									
									
									   
									   
								
									
			                        <button type="submit" value="submit"/>submit	</button><br>
									
			                    </form>
		                    </div>
								
								
									
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
		
		
			


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
