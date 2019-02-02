<?php 
include "config/config.php";
?> 

<?php 
if(isset($_GET['upd'])){
	$id=$_GET['upd'];
	$query="SELECT * FROM user WHERE id=$id";
	$fire = mysqli_query($conn, $query) or die("Can not fetch data ".mysqli_error($conn));
	
	$user = mysqli_fetch_assoc($fire);
}
?>

<!-- Update -->
<?php

if(isset($_POST['update']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$pwd = md5($_POST['pwd']);
	$gender = $_POST['gender'];
	$phoneno = $_POST['phoneno'];
	$location = $_POST['location'];
	
	$query = "UPDATE user SET firstname='$firstname', lastname='$lastname', pwd ='$pwd', gender= '$gender', phoneno='$phoneno', location='$location' where id=$id ";
	
	$fire = mysqli_query($conn, $query) or die(" not updated".mysqli_error($conn));
	
	if($fire) header("Location: form.php"); 
} 

?>

<!DOCTYPE html>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update</title>
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
				<h1 class="well">Update Form</h1>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" value="<?php echo $user['firstname']?>" placeholder="Enter First Name" name="firstname" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" value="<?php echo $user['lastname'] ?>" placeholder="Enter Last Name " name="lastname" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label>New Password</label>
							<input type="password"  placeholder="Enter New Password " name="pwd" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password"  placeholder="re-enter Password " name="pwd" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<select  name="gender" value="" rows="3" class="form-control">
								<option value=" "> </option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
						</div>
						<div class="form-group">
							<label>Phone No</label>
							<input type="number"   value="<?php echo $user['phoneno'] ?>" placeholder="Phone No " name="phoneno" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label> Address</label>
							<input type="text" value="<?php echo $user['location'] ?>" placeholder="Address " name="location" rows="3" class="form-control"></input>
						</div>
						<div class="form-group">
							<label> Upload image</label>
							<input type="file" name="image" accept="image/gif, image/jpeg, image/png" class="form-control">
						</div>
					
						
					
					<button   name="update" class="btn btn-primary btn-block">Update</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
		  </div>

</div>
	
 	

 </body>
</html>