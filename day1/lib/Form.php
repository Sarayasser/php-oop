<?php
	class Form {
		protected $htmlCode = [];

		public function __construct($options = []) {
			$this->htmlCode[] = sprintf('<head>'.
  			'<title>Bootstrap 4 Example</title>'.
  			'<meta charset="utf-8">'.
  			'<meta name="viewport" content="width=device-width, initial-scale=1">'.
  			'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">'.
  			'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>'.
  			'<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>'.
  			'<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>'.
			'</head>');
			$this->htmlCode[] = sprintf(
				'<form method="%s" action="%s">', 
				isset($options['method']) ? $options['method'] : '',
				isset($options['action']) ? $options['action'] : ''
			);
		}

		public function textbox($options = []) {
			$this->htmlCode[] = sprintf(
				'<div class="form-group col-lg-3"><label>%s</label>' .
				'<input class="form-control" type="text" name="%s" value="%s" maxlength="%i" %s>' .
				'</div>',
				isset($options['label']) ? $options['label'] : '',
				isset($options['name']) ? $options['name'] : '',
				isset($options['value']) ? $options['value'] : '',
				isset($options['length']) ? $options['length'] : '',
				isset($options['required']) && $options['required'] === true ? 'required' : ''
			);
		}
		public function radio($op = []){
			$selectOptions[]=sprintf('<div class="form-check">');
			foreach ($op['options'] as $key => $value) {
				$selectOptions[] = sprintf(
				'<input class="checkbox" type="radio" id="%s" name="%s" value="%s">'.
				'<label class="form-check-label" for="%s">%s</label>'.'<br>',
					$key,
					isset($op['name']) ? $op['name'] : '',
					$value,
					$key,
					$value
				);
			}
			$selectOptions[]=sprintf('</div>');
			$this->htmlCode[] = sprintf(
				implode('', $selectOptions)
			);
		}
		public function select($op = []) {
			$selectOptions = [];
			foreach ($op['options'] as $key => $value) {
				$selectOptions[] = sprintf(
					'<option value="%s">%s</option>',
					$key,
					$value
				);
			}

			$this->htmlCode[] = sprintf(
				'<div class="form-group col-lg-3">'.'<select class="form-control" name="%s">%s</select>'.'</div>',
				$op['name'],
				implode('', $selectOptions)
			);
		}

		public function email($options = []) {
			$this->htmlCode[]=sprintf('<div class="form-group col-lg-3"><label>%s</label>' .
			'<input class="form-control" type="%s" name="%s" %s>' .
			'</div>',
			isset($options['name']) ? $options['name'] : '',
			isset($options['name']) ? $options['name'] : '',
			isset($options['name']) ? $options['name'] : '',
			isset($options['required']) && $options['required'] === true ? 'required' : '');
		}

		public function textarea(){
			$this->htmlCode[]=sprintf('<div class="form-group col-lg-3">'.'<label class="form-control bg-info" for="text">Text Area</label>'.
			'<textarea class="form-control" id="text" rows="4" cols="50">'.
			'</textarea>'.'</br>'.'</div>');
		}

		public function submit(){
			$this->htmlCode[]=sprintf('<div class="form-group col-lg-3">'.'<button class="form-control bg-info" type="submit">Submit</button>'.'</div>');
		}

		public function html() {
			$this->htmlCode[] = '</form>';
			return implode(' ', $this->htmlCode);
		}

	}