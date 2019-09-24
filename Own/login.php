<?php 
session_start();
$name = $_POST['name'];
$password = $_POST['password'];

if ($name == "admin" && $password == "1234") {
	$_SESSION['auth'] = true;
	$_SESSION['name'] = "admin";
}
header("location: index.php");
 ?>