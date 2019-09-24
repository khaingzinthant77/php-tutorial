<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Hello World!</h1>
	<p>Today is:<?php echo date("d/m/Y H:i:s")?></p>
	<p>
		<?php
           $now = time();
           // echo $now; echo "<br>";
           $fullmoon = strtotime('2019-10-13');
           // echo $date;
           $secondleft = $fullmoon-$now;
           // echo "Full moon time is ".$secondleft; 
           $leftday= $secondleft / (60*60*24);

           echo floor($leftday); 
		?>

		days before Thindigyut Full Moon day.
	</p>
	<br>
	<?php 
       $name = "Khaing";
       echo "Hello ".$name." how are you doing?";
	?>
</body>
</html>