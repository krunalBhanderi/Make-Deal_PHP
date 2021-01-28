<?php 
								include("db.php");
								$name=$_POST["name"];
								$id=$_POST['id'];
								$password=$_POST['password'];
								$address=$_POST['address'];
								$city=$_POST['city'];
								$pincode=$_POST['pincode'];
								$mobile=$_POST['mobile'];
								$email=$_POST['email'];
								
								
								$sqlq1="select * from product2";

								$result=$connect->query($sqlq1);


								while($row=$result->fetch_assoc())
								{
									if($name==$row["name"] && $password==$row["password"])
									{
										echo ("try some another password");
										echo '<a href="index1.php">retry</a>';
									}
									
									if($mobile==$row["mobile"])
									{
										echo ("this mobile number is already register");
										echo '<a href="index1.php">retry</a>';
									}
									
									if($email==$row["email"])
									{
										echo ("this mobile email id is already register");
										echo '<a href="index1.php">retry</a>';
									}
								
									$sql="insert into user(username,password,address,city,pincode,mobile,email,name) values('$name','$password','$address','$city','$pincode','$mobile','$email','$id')";
								
									if($connect->query($sql)===TRUE)
									{
										echo "Account crreated sucessfull!!";
										include("indexa.php");
									}
									else
									{
										echo "error".sql($sql);
									}
								
?>