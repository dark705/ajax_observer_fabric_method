<?php
namespace lib;
abstract class HandlerFabric implements HandlerInterface{
	
	public static function create($type){
		$type = __NAMESPACE__.'\Handler' . $type;
		return new $type;
	}
	
	abstract public function handle($request);
} 

class HandlerHTML extends HandlerFabric{
	public function handle($request) {
		if ($request == 'GET'){
			$view = new \lib\View('views/html_main.php');
			$view ->show();
		}
	}
}

class HandlerJSON extends HandlerFabric {
		public function handle($request) {
		if ($request == 'POST'){
			$status = new \lib\Status();
			$json = new \lib\View('views/json_status.php', array('status'=>$status->get()));
			$json ->show();
		}
	}
}


