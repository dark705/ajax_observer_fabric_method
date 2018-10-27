<?php
namespace lib;
class Server
{
	public function __construct(array $server){
		$this->server = $server;
	}
	
	public function getRequestMethod(){
		return $this->server['REQUEST_METHOD'];
	}
}

