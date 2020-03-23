<?php
	
	/*
	function __autoload($className) {
		if(is_file('lib/' . $className . '.php'))
			require 'lib/' . $className . '.php';
	}
	*/

	spl_autoload_register(function ($className) {
		if(is_file('lib/' . $className . '.php'))
			require 'lib/' . $className . '.php';
		// echo '<br>I am first autoloader';
	});

	spl_autoload_register(function ($className) {
		if(is_file('vendor/' . $className . '.php'))
			require 'vendor/' . $className . '.php';
		// echo '<br>I am second autoloader';
	});