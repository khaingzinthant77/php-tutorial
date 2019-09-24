<?php 
  $email = $_POST['email'];
  $password = $_POST['psw'];
  if ($email && $password) 
  	echo "Your input email is '" . $email . "' and your password is '" . $password."'";
  	else
  		echo "You are missing email or password";

 ?>