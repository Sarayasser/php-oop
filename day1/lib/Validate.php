<?php
	class Validate {
		public function __construct() {
			echo '<br>Constructor loaded ..';
		}

		public static function email($str) {
			return false;
		}
	}

	var_dump(Validate::email('abc@gmail.com'));
	$v = new Validate;
	var_dump($v->email('abc@ggg'));