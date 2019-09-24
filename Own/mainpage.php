<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="JS/jquery-3.4.1.min.js"></script>
	<script src="JS/jquery.Validate.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  </script>
</head>
<body>
	<div id="container">
		<div id="row">
			<div class="col-sm-2">
				<ul>
					<li><a href="#" title="">Home</a></li>
					<li><a href="#" title="">About</a></li>
					<li><a href="#" title="">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-sm-2">
				<?php
              	$list = scandir("photo");
              	for($i=2; $i<count($list);$i++){
	              $name = $list[$i];
	              echo "<img src='photo/$name' width = '200px'>";
      			}
			?>
			<form action="./upload.php" method="post" enctype="multipart/form-data">
				<label for="photo">Choose Photo</label>
				<input type="file" name="photo" id="photo"> <br><br>
				<input type="submit" name="" value="Submit">
			</form>
			</div>
		</div>
	</div>
</body>
</html>