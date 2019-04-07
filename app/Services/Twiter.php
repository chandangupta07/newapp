<?php
namespace App\Services;

class Twiter{
	protected $api_key;
	public function __construct($key){
		$this->api_key = $key;
	}
}