<?php
namespace lib\Handlers;
use lib\KernelHTTP;
class HandlerHTML extends Handler{
	public function handle(KernelHTTP $kernel) {
		if ($kernel->getServer()->getRequestMethod() == 'GET'){
			$view = new \lib\View('views/html_main.php'); //Формируем шаблон
			$kernel->appendResponseBody($view->get()); //Добавляем в тело ответа
			//$kernel->appendResponseHeader('WWW-Authenticate: Negotiate'); //Можем изменить заголовок
			//$kernel->appendResponseHeader("HTTP/1.0 404 Not Found");
		}
	}
}
