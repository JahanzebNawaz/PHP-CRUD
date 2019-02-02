

<!DOCTYPE html>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Log In Form</title>
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
      <li><a href="#"><span>Page 2</span></a></li>
      	<li style="float: right"><a href="registration.php" target="_self"><span>Sign Up</span></a></li>
		  <li style="float: right"><a href="login.php" target="_self"><span >LogIn</span></a></li>
	  </ul>
  </div>
</nav>

</div>
<div class="divspace">
	
</div>


	  <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
    </div>
	</div>
  </body>
</html>