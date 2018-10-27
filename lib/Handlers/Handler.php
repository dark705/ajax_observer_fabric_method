<?php
namespace lib\Handlers;
use lib\Kernel;
abstract class Handler implements HandlerInterface {
	
	public static function create($type){
		$type = __NAMESPACE__.'\Handler' . $type;
		return new $type;
	}
	
	abstract public function handle(Kernel $kernel);
}

