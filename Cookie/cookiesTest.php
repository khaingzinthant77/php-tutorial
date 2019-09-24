<?php 
 setcookie("gender","male");
 $sex = $_COOKIE['gender'];
 if($sex == "male"){
 	echo "Hello Male";
 }
 else
 	echo "Hello Female";
 ?>