<?php
namespace controllers;
use lib\Kernel;
use lib\Web;
use lib\Handlers\Handler;


class Main {
	private function __construct(){}
	
	public static function go(){
		//Объект для более удобной работы с web сервером (request - responce)
		$web = new Web($_SERVER); 
		//$sql = new MySQL_();
		
		//Внедряем в ядро объект (Dependency Injection) 
		$kernel = new Kernel($web /*, $sql*/); //также можем внедрить объект для работы с БД например MySQL
		
		//Добавляем обработчиков, каждый из которых может работать с сервером, получать и отправлять запросы
		$kernel->attachHandler(Handler::create('HTML'));
		$kernel->attachHandler(Handler::create('JSON'));
		$kernel->attachHandler(Handler::create('LOG'));
		$kernel->notifyHandlers(); //"Запускаем" обработчиков
		
		//Окончательный ответ клиенту даёт web сервер после, после работы над ним обработчиков
		$web->reply(); 
	}
}

?>