<?php
namespace controllers;
use \lib\RegistratorHandlers;
use \lib\HandlerFabric;


class Main {
	public function __construct(){
		
	}
	
	public function go(){
		$registrator = new RegistratorHandlers();
		$registrator->attachHandler(HandlerFabric::create('HTML'));
		$registrator->attachHandler(HandlerFabric::create('JSON'));
		$registrator->handleRequest($_SERVER["REQUEST_METHOD"]);
	}
	
}

?>