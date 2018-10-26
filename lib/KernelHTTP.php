<?php
namespace lib;
class KernelHTTP {
	private $handlers;
	private $server;
	private $responseHead;
	private $responseBody;
	
	public function __construct($server){
		$this->server = $server;
		$this->handlers = array();
		$this->responseHeader = array();
		$this->responseBody = array();
		
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
	
	public function appendResponseHeader($response){
		$this->responseHeader[]= $response;
	}
	
	public function appendResponseBody($response){
		$this->responseBody[]= $response;
	}
	
	public function getResponseHead(){
		return $this->responseHeader;
	}
	
	public function getResponseBody(){
		return $this->responseBody;
	}
	
	
	public function reply(){
		//Формируем заголовок ответа
		foreach ($this->responseHeader as $response){
			header($response);
		}
		//Формируем тело ответа
		foreach ($this->responseBody as $response){
			echo $response;
		}
	}
}