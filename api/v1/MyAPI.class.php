<?php

require_once 'API.class.php';
class MyAPI extends API
{
	public function __construct($request, $origin) {
		parent::__construct($request);
	}

	/**
	 * Example endpoint
	 **/

	protected function users() {
		if ($this->method == 'GET') {
			return 'Found the user endpoint';
		} else {
			return 'Endpoint only accepts GET requests';
		}
	}
	
	protected function photos() {
		if ($this->method == 'GET') {
			return 'Found the photo endpoint';
		} else {
			return 'Endpoint only accepts GET requests';
		}
	}
}

?>
