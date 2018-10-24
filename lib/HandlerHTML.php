<?php
namespace lib;
class HandlerHTML implements HandlerInterface {
	
	public function handle($request) {
		if ($request == 'GET'){
			$view = new \lib\View('views/html_main.php');
			$view ->show();
		}
	}
}