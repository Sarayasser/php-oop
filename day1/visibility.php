<?php
	class Test {
		public $car;
		protected $bus;
		private $cat;

		public function __construct($options = []) {
			if(isset($options['car'])) $this->car = $options['car'];
			if(isset($options['bus'])) $this->bus = $options['bus'];
			if(isset($options['cat'])) $this->cat = $options['cat'];

			// notice .. bus not defined
			// $this->bus = $options['bus'];
		}

		private function secret() {

		}

		protected function parent() {

		}

		public function hello() {
			echo 'Hello called';
		}
	}

	$myTest = new Test([
		'car' => 100,
		'cat' => 'meaw'
	]);

	$myTest->hello();

	echo '<br>';

	echo $myTest->car;

	echo '<br>';

	// error .. can't access private property
	// echo $myTest->cat;

	