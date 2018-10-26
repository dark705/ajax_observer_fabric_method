<?php
namespace controllers;
use \lib\Collector;
use \lib\HandlerFabric;


class Main {
	public function __construct(){
		
	}
	
	public function go(){
		$collector = new Collector($_SERVER);
		$collector->attachHandler(HandlerFabric::create('HTML'));
		$collector->attachHandler(HandlerFabric::create('JSON'));
		$collector->attachHandler(HandlerFabric::create('LOG'));
		$collector->notifyHandlers();
		$collector->showResponse();
	}
}

?>