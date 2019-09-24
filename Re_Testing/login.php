<?php 
	$name = $_POST['name'];
	$password = $_POST['psw'];

	if($name == "admin" && $password == "123"){
		$_SESSION['auth'] = true;
		$_SESSION['name'] = "Admin";
 	}
 	header("location: index.php");
 ?>