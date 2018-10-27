<?php
namespace lib;
class HandlerJSON extends Handler {
		public function handle(KernelHTTP $kernel) {
		if ($kernel->getServer()->getRequestMethod() == 'POST'){
			$status = new \lib\Status();
			$json = new \lib\View('views/json_status.php', array('status'=>$status->get()));
			$kernel->appendResponseBody($json->get());
		}
	}
}

