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
 	<link rel="stylesheet" href="./body.css">
 	<script src="JS/jquery-3.4.1.min.js"></script>
	<script src="JS/jquery.Validate.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  </script>
 </head>
 <body>
 	<div id="wrap">
 		<?php if ($auth) {?>
 			<form action="./home.php" method="post" accept-charset="utf-8">
 				<?php require_once('./mainpage.php') ?>
 			</form>
 		<?php } else{ ?>
 			<h2 align="center">Please Login!</h2>
 			<form action="./login.php" method="post" accept-charset="utf-8" id="frm" align="center">
 			<p>
		 			<label for="name">User Name</label>
		 			<input type="text" name="name">
 				</p>
 				<p>
		 			<label for="password">Password</label>
		 			<input type="password" name="password"><br>
		 			<input type="checkbox" name="chk" value="Remember">Remember	
 				</p>
 					<input type="submit" name="btn1" value="Login" id="btnlogin">
 					<input type="submit" name="btn2" value="Cancel" id="btncancle">
 			</form>		
 	</div>	
 		<?php } ?> 
 	</div>
 </body>
 <script>
 	$document.ready(function(){
 		$("#btnlogin").click(function(){
 			$("#frm").validate({
 				rules:{
 					name :{
 						"required":true,
 						"minlength":2
 					},
 					password :{
                        "required" : true,
                        "minlength":6
 					}
 				}
 			});
 		});
 	});
 </script>
 </html>