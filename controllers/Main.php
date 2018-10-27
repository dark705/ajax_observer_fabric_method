<?php
namespace controllers;
use \lib\KernelHTTP;
use \lib\Server;
use \lib\Handler;


class Main {
	private function __construct(){}
	
	public static function go(){
		//Объект для более удобной работы с Суперглобальным массивом $_SERVER
		$server = new Server($_SERVER); 
		//Внедряем в ядро объект (Dependency Injection)
		$kernel = new KernelHTTP($server);
		
		//Добавляем обработчиков, каждый из которых может вносить изменения в заголовок и тело ответа
		$kernel->attachHandler(Handler::create('HTML'));
		$kernel->attachHandler(Handler::create('JSON'));
		$kernel->attachHandler(Handler::create('LOG'));
	
		$kernel->notifyHandlers(); //"Запускаем" обработчиков
		$kernel->reply(); //Отвечаем клиенту напрямую, хотя могли использовать и ещё одного обработчика или выделенный объект
	}
}

?>