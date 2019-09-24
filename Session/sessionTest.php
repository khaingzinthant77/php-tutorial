<?php 
session_start();
$_SESSION['gender'] = 'male';
$sex = $_SESSION['gender'];

unset($_SESSION['gender']);

 ?>