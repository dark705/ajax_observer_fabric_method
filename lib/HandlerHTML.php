<?php
namespace lib;
class HandlerHTML extends Handler{
	public function handle(Collector $collector) {
		if ($collector->getRequestMethod() == 'GET'){
			$view = new \lib\View('views/html_main.php');
			$collector->setResponse($view->get());
		}
	}
}
