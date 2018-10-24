<?php
namespace lib;
abstract class HandlerFabric implements HandlerInterface {
	
	public static function create($type){
		$type = __NAMESPACE__.'\Handler' . $type;
		return new $type;
	}
	
	abstract public function handle(Collector $collector);
} 

class HandlerHTML extends HandlerFabric{
	public function handle(Collector $collector) {
		if ($collector->getRequest() == 'GET'){
			$view = new \lib\View('views/html_main.php');
			$collector->setResponse($view->get());
		}
	}
}

class HandlerJSON extends HandlerFabric {
		public function handle(Collector $collector) {
		if ($collector->getRequest() == 'POST'){
			$status = new \lib\Status();
			$json = new \lib\View('views/json_status.php', array('status'=>$status->get()));
			$collector->appendResponse($json->get());
		}
	}
}

class HandlerLOG extends HandlerFabric {
		public function handle(Collector $collector) {
			$request = $collector->getRequest();
			file_put_contents('log/log.txt', $request . PHP_EOL, FILE_APPEND);
	}
}

