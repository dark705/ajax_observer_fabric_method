<?php
namespace controllers;
use \lib\RegistratorHandlers;
use \lib\HandlerJSON;
use \lib\HandlerHTML;


class Main {
	public function __construct(){
		
	}
	
	public function go(){
		$registrator = new RegistratorHandlers();
		$registrator->attachHandler(new HandlerJSON());
		$registrator->attachHandler(new HandlerHTML());
		$registrator->handleRequest($_SERVER["REQUEST_METHOD"]);
	}
	
}

?>