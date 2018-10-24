<?php
namespace controllers;
use \lib\Collector;
use \lib\HandlerFabric;


class Main {
	public function __construct(){
		
	}
	
	public function go(){
		$collector = new Collector();
		$collector->attachHandler(HandlerFabric::create('HTML'));
		$collector->attachHandler(HandlerFabric::create('JSON'));
		$collector->setRequest($_SERVER["REQUEST_METHOD"]);
		$collector->showResponse();
	}
	
}

?>