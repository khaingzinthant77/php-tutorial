<?php 
    $name = $_FILES["photo"]["name"];
    $tmp  = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];

    if (($type=="image/jpg") || ($type=="image/jpeg") || ($type=="image/png") ||($type=="image/gif") ) {
        move_uploaded_file($tmp,"photo/$name");
    }
    header("Location: index.php");
    // print_r($file);
 ?>