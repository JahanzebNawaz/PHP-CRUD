<?php 

 define("HOSTNAME","localhost");
	 define("USERNAME","root");
	 define("PASSWORD","");
	 define("DBNAME","accounts");
	 
$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die("Can not connect to Database...");


?>