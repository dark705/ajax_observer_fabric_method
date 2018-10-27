<?php
namespace lib\Handlers;
use lib\Kernel;
class HandlerHTML extends Handler{
	public function handle(Kernel $kernel) {
		if ($kernel->interactWeb()->getRequestMethod() == 'GET'){
			$view = new \lib\View('views/html_main.php'); //Формируем шаблон
			$kernel->interactWeb()->appendResponseBody($view->get()); //Добавляем в тело ответа
			//$kernel->interactWeb()->appendResponseHeader('WWW-Authenticate: Negotiate'); //Можем изменить заголовок
			//$kernel->interactWeb()->appendResponseHeader("HTTP/1.0 404 Not Found");
		}
	}
}
