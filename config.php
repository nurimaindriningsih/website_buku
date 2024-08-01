<?php 

	$username = "maja_nurima";

	$password = "nurima123";

	$hostname = "localhost"; 
	
	$dbname = "maja_majalah";

	global $dbhandle;

	$dbhandle=mysqli_connect($hostname,$username,$password,$dbname) or die (mysqli_error());

?>