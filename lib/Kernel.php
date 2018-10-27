<?php
namespace lib;
use lib\Handlers\HandlerInterface;
class Kernel{
	private $handlers;
	private $web;
	
	public function __construct(Web $web){
		$this->web = $web;
		$this->handlers = array();
	}
	
	public function attachHandler(HandlerInterface $handler){
		$this->handlers[] = $handler;
	}
	
	public function detachHandler(HandlerInterface $handler){
		$i = 0;
		foreach ($this->handlers as $item){
			if($item == $handler){
				unset($this->handlers[$i]);
				break;
			}
			$i++;
		}
	}
	
	public function notifyHandlers(){
		foreach ($this->handlers as $handler) {
			$handler->handle($this);
		}
	}
	
	public function interactWeb(){
		return $this->web;
	}
}