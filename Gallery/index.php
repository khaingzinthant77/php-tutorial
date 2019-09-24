<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		body{
			background: #efefef;
			font-family: arial;
		}
		#wrap{
			width: 900px;
			margin: 20px auto;
			padding: 20px;
			border: 6px solid #ddd;
			background: #fff;
		}
		#gallery img{
			width: 200px;
			margin: 10px;
		}
		#form{
			margin-top: 20px;
			padding: 10px;
			background: #efefef;
			border-top: 2px solid #ddd;
		}
	</style>
</head>
<body>
	<div id="wrap">
		<div id="gallery">
			<?php
              	$list = scandir("photo");
              	for($i=2; $i<count($list);$i++){
	              $name = $list[$i];
	              echo "<img src='photo/$name' width = '200px'>";
      			}
			?>
		</div>

		<div id = "form">
			<form action="./upload.php" method="post" enctype="multipart/form-data">
				<label for="photo">Choose Photo</label>
				<input type="file" name="photo" id="photo"> <br><br>
				<input type="submit" name="" value="Submit">
			</form>
		</div>
	</div>
</body>
</html>