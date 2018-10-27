<?php
namespace lib;
class Web
{
	private $server;
	private $responseHead;
	private $responseBody;
	
	public function __construct(array $server){
		$this->server = $server;
		$this->responseHeader = array();
		$this->responseBody = array();
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

