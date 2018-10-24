<?php
namespace lib;
class Collector {
	private $handlers;
	private $request;
	private $response;
	
	public function __construct(){
		$this->handlers = array();
		$this->request = null;
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
	
	public function getRequest(){
		return $this->request;
	}
	
	public function setRequest($request){
		$this->request = $request;
		$this->notifyHandlers();
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