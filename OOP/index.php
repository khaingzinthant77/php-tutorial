<?php 
	/**
	 * 
	 */
	class Animal 
	{
		var $leg,$wing;
		function __construct($leg, $wing)
		{
			$this->leg = $leg;
			$this->wing = $wing; 
		}
		static function info(){
			return "An animal";
		}
		function Rectangle(){
			$len = func_num_args();
			if($len == 1){
				$width = func_get_args(0);
				return $width * $width;
			}
			if($len == 2){
				$width = func_get_args(0);
				$height = func_get_args(1);
				return $width * $height;
			}
		}
	}

	$unicorn = new Animal(2, 4);
		echo $unicorn->leg;
		echo Animal :: info();
		echo Animal :: Rectangle();
 ?>