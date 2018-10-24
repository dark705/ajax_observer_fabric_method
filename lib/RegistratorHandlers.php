<?php
namespace lib;
use lib\HandlerFabric;
class RegistratorHandlers {
	private $handlers;
	
	public function __construct(){
		$this->handlers = array();
	}
	
	public function attachHandler(HandlerInterface $handler){
		$this->handlers[] = $handler;
	}
	
	public function  detach(HandlerInterface $handler){
		$i = 0;
		foreach ($this->handlers as $item){
			if($item == $handler){
				unset($this->handlers[$i]);
				break;
			}
			$i++;
		}
	}
	
	public function handleRequest($request){
		foreach ($this->handlers as $handler) {
			$handler->handle($request);
		}
	}
}