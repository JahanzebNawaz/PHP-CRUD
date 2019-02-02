<?php 
include "config/config.php";
?>

<?php 
 if(isset($_GET['del'])){
	 $id = $_GET['del'];
	 $query="DELETE FROM user WHERE id = $id";
	 $fire = mysqli_query($conn,$query) or die(" can not delete data".mysqli_error);
	 if($fire){
		 echo "Data is deleted from Database";
	 }
 }
?>

<!DOCTYPE html>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Detail</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
      </head>

<body>
<div class="bg">
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
<div class="divspace">
	<div class="message"></div>
</div>

<div class="container text-center" id="tablecol">
	<h2>User Accounts</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>last Name</th>
			<th>User ID</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Number</th>
			<th>Location</th>
			<th>Option</th>
		</tr>
		<tr>
		<?php 
	
	  $query = "SELECT * FROM user ORDER BY id ASC";
	$fire = mysqli_query($conn, $query) or die("Data is not accessable...");
	
	if(mysqli_num_rows($fire)>0) {
		while($user = mysqli_fetch_assoc($fire)){ ?>
		<tr>
			<td> <?php echo $user["id"] ?> </td>
			<td> <?php echo $user["firstname"] ?> </td>
			<td> <?php echo $user["lastname"] ?> </td>
			<td> <?php echo $user["userid"] ?></td>
			<td> <?php echo $user["pwd"] ?></td>
			<td> <?php echo $user["gender"] ?></td>
			<td> <?php echo $user["phoneno"] ?></td>
			<td> <?php echo $user["location"] ?></td>
			<td>  <a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $user['id']?>"
			class="btn btn-sm btn-danger" >Delete</a> <space></space> 
			<a class="btn btn-sm btn-warning" href="update.php<?php $_SERVER['PHP_SELF']?>?upd=<?php echo $user['id'] ?>" >Update</a>
			</td>
			</tr>
			<?php 
		}
	}
	?>
	
	
	</tr>
	</thead>
	
	
	

</table>
</div>

</div>

</div>



</body>
</html>
