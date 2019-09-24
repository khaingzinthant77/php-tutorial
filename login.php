<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="./jquery-3.4.1.min.js"></script>
	<script src="./jquery.Validate.js"></script>
</head>
<body>
	<form action="login_post.php" method="POST" id="log">
		<p>
			<label for="email">Email</label>
		    <input type="email" name="email">
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" name="psw"><br>
			<input type="submit" value="Submit" id="btn">
		</p>
	</form>
</body>
<script>
	$(document).ready(function(){
       $("#btn").click(function(){
       	$("#log").validate({
           rules:{
           	email:{
           		"required":true,
           		"minlength":2
           	},
            psw:{
            	"required":true,
            	"minlength":2
            }
           }
       	});
       });
	});
</script>
</html>