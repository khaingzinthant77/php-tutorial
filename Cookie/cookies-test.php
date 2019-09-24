<?php 
  session_start();
  $first = isset($_SESSION['auth']);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS_Group/login.css">
	<script src="./jquery-3.4.1.min.js"></script>
	<script src="./jquery.Validate.js"></script>
</head>
<body>
	<div id="wrap">
		<?php if($first){ ?>
            <h1>Welcome to My Website</h1>
            <p>This is Main Page</p>
            <b> <?php echo $_SESSION['userID']; ?>
            <a href="logout.php">Log Out</a>
		<?php } else { ?>
            <h1>You need to login</h1>
            <form action="login1.php" method="POST" id="fill">
            	<label for="user">User ID</label>
            	<input type="text" name="userID">
                <label for="psw">Password</label>
                <input type="password" name="password">
                <input type="submit" name="btn" value="Login">
            </form>
		<?php } ?>
	</div>
</body>
<script>
		$(document).ready(function(){
			$("#btn").click(function(){
				$("#fill").validate({
					rules : {
						userID : {
                           "required" : true
						},
						password : {
							"required" : true
						}
					}
				});
			});
		});
	</script>
</html>