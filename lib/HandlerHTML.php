<?php
namespace lib;
class HandlerHTML extends Handler{
	public function handle(KernelHTTP $http) {
		if ($http->getRequestMethod() == 'GET'){
			$view = new \lib\View('views/html_main.php'); //Формируем шаблон
			$http->appendResponseBody($view->get()); //Добавляем в тело ответа
			//$http->appendResponseHeader('WWW-Authenticate: Negotiate'); //Можем изменить заголовок
			//$http->appendResponseHeader("HTTP/1.0 404 Not Found");
		}
	}
}
