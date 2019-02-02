<?php 
include "config/config.php";
?> 

<?php

if((isset($_POST['submit']))) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$userid = $_POST['userid'];
	$pwd = md5($_POST['pwd']);  //for encrypted password
	$gender = $_POST['gender'];
	$phoneno = $_POST['phoneno'];
	$location = $_POST['location'];
	
	//$image = $_FILES['image'];
	
	
	//echo $firstname." ".$lastname." ".$userid." ".$pwd." ".$phoneno." ".$location." ";
	
	 $query = "INSERT INTO user (firstname,lastname,userid,pwd,gender,phoneno,location) VALUES ('$firstname','$lastname','$userid','$pwd','$gender','$phoneno','$location')";
	 
	 $fire = mysqli_query($conn,$query) or die("Cant not insert into Database..".mysqli_error($conn));
	
	if($fire) 
	{
		//echo "Data Inserted into Database Successfully";
			header("location: form.php");
	} 
	
}



?> 


<!DOCTYPE html>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
      </head>

<body>
<div class="bgregist">
<div class="container">
	<div class="jumbotron text-center">
		<h1>Website Project</h1> 
	</div>
	
<nav class="navbar_nav">
  <div class="container-fluid">
    <ul class="nav">
     <li> <a href="#"><span>WebSiteName</span></a></li>
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="form.php"><span>Form</span></a></li>
      	<li style="float: right"><a href="registration.php" target="_self"><span>Sign Up</span></a></li>
		  <li style="float: right"><a href="login.php" target="_self"><span >LogIn</span></a></li>
	  </ul>
  </div>
</nav>

</div>
<div class="divspace">
	<!-- this is free space added after Navbar -->
</div>
<!-- Registration Form -->
<div class="wrapper">
  <div class="container">
   
	<div class="col-lg-12 well">
	<div class="row">
				<form name="signup" id="signup"  action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form-signin">
				<h1 class="well">Registration Form</h1>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name " name="firstname" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name " name="lastname" class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Email Address</label>
							<input type="text" placeholder="Enter Email " name="userid" rows="3" class="form-control"></input>
						</div>	
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Enter Password " name="pwd" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" placeholder="re-enter Password " name="pwd" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<select  name="gender" rows="3" class="form-control">
								<option value=" "> </option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
						</div>
						<div class="form-group">
							<label>Phone No</label>
							<input type="number" placeholder="Phone No " name="phoneno" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label> Address</label>
							<input type="text" placeholder="Address " name="location" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label> Upload image</label>
							<input type="file" name="image" accept="image/gif, image/jpeg, image/png" class="form-control">
						</div>
					
						
					
					<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
		  </div>

</div>
	
 	

 </body>
</html>