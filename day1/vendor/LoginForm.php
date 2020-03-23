<?php
	class LoginForm extends Form {
		public function __construct($options = []) {
			echo '<br>Hello .. I\'m LoginForm constructor!';
			parent::__construct($options);

			// validate() must be public or protected, but not private
			echo parent::validate();
			echo $this->validate();
		}

		protected function validate() {
			echo '<br>Child validate!';
		}
	}
