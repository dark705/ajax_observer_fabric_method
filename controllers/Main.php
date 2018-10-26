<?php
namespace controllers;
use \lib\KernelHTTP;
use \lib\Handler;


class Main {
	private function __construct(){}
	
	public static function go(){
		$http = new KernelHTTP($_SERVER);
		
		//Добавляем обработчиков, каждый из которых может вносить изменения в заголовок и тело ответа
		$http->attachHandler(Handler::create('HTML'));
		$http->attachHandler(Handler::create('JSON'));
		$http->attachHandler(Handler::create('LOG'));
	
		$http->notifyHandlers(); //"Запускаем" обработчиков
		$http->reply(); //Отвечаем клиенту
	}
}

?>