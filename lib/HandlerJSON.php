<?php
namespace lib;
class HandlerJSON extends Handler {
		public function handle(KernelHTTP $http) {
		if ($http->getRequestMethod() == 'POST'){
			$status = new \lib\Status();
			$json = new \lib\View('views/json_status.php', array('status'=>$status->get()));
			$http->appendResponseBody($json->get());
		}
	}
}

