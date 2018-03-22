<?php
class Shortener {
	protected $db;
	
	public function __construct() {
		// For demo purposes
		$this->db = new mysqli('localhost', 'james141643', 'smitherines', 'links141643');
	}
	
	protected function generateCode($num) {
	
	}
	
	public function makeCode($url) {
	
	}
		
	public function getUrl($code) {
	
	}
}