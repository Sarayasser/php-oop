<?php
	
	class Hello {
		var $x;

		function __construct($x = 50, $y = 0) {
			$this->x = $x;
			echo 'A new instance begins<br>';
		}

		function print() {
			echo 'Hello OOP!';
		}
	}

	$myClass = new Hello(70);
	$myClass2 = new Hello(100, 70);
	$myClass->print();
	echo '<br>';
	$myClass->x = 20;
	echo $myClass->x;