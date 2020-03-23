<?php
	class Form {
		protected $htmlCode = [];

		public function __construct($options = []) {
			$this->htmlCode[] = sprintf(
				'<form method="%s" action="%s">', 
				isset($options['method']) ? $options['method'] : '',
				isset($options['action']) ? $options['action'] : ''
			);
		}

		public function textbox($options = []) {
			$this->htmlCode[] = sprintf(
				'<div><label>%s</label>' .
				'<input type="text" name="%s" value="%s" maxlength="%i" %s>' .
				'</div>',
				isset($options['label']) ? $options['label'] : '',
				isset($options['name']) ? $options['name'] : '',
				isset($options['value']) ? $options['value'] : '',
				isset($options['length']) ? $options['length'] : '',
				isset($options['required']) && $options['required'] === true ? 'required' : ''
			);
		}

		public function select($options = []) {

		}

		public function email($options = []) {

		}

		public function html() {
			$this->htmlCode[] = '</form>';
			return implode(' ', $this->htmlCode);
		}
	}