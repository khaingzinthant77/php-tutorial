<?php 
	date_default_timezone_set('Asia/Rangoon');

	 function getAge($dob,$today)
	{	
		$age = 0;
		$dob=strtotime('+1 year', $dob);
		while ($today>$dob) {
			++$age;
		}


		return $age;
	}


 ?>


 <?php 
 	$today = strtotime("22-09-2019");

 	$dob =  strtotime('01-01-2000');


 	$myage = getAge($dob,$today);

 	echo $myage;
  ?>