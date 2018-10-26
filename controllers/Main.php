<?php
namespace controllers;
use \lib\Collector;
use \lib\Handler;


class Main {
	public function __construct(){
		
	}
	
	public function go(){
		$collector = new Collector($_SERVER);
		$collector->attachHandler(Handler::create('HTML'));
		$collector->attachHandler(Handler::create('JSON'));
		$collector->attachHandler(Handler::create('LOG'));
		$collector->notifyHandlers();
		$collector->showResponse();
	}
}

?>