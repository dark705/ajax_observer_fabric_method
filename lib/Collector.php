<?php
namespace lib;
class Collector {
	private $handlers;
	private $server;
	private $response;
	
	public function __construct($server){
		$this->server = $server;
		$this->handlers = array();
		$this->response = null;
		
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
	
	public function getRequestMethod(){
		return $this->server['REQUEST_METHOD'];
	}
	

	public function setResponse($response){
		$this->response = $response;
	}
	
	public function appendResponse($response){
		$this->response .= $response;
	}
	
	public function getResponse(){
		return $this->response;
	}
	
	public function showResponse(){
		echo $this->response;
	}
}