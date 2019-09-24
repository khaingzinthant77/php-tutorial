<?php 
	session_start();
	$auth = isset($_SESSION['auth']);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	
 	<?php if($auth){ ?> 
            <h1>Welcome to My Website</h1>
            <b><?php echo $_SESSION['name']; ?></b>
            <a href="./logout.php" title="">Log Out</a>
 		<?php } else{ ?>
 			<form action="./login.php" method="post" accept-charset="utf-8">
		 		<label for="UserName">User Name</label>
		 		<input type="text" name="name">
		 		<label for="password">Password</label>
		 		<input type="password" name="psw">
		 		<input type="submit" name="" value="Submit">
 			</form>
 		<?php } ?>
 </body>
 </html>