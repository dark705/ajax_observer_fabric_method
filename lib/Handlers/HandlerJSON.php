<?php
namespace lib\Handlers;
use lib\Kernel;
class HandlerJSON extends Handler {
	public function handle(Kernel $kernel) {
		if ($kernel->interactWeb()->getRequestMethod() == 'POST'){
			$status = new \lib\Status();
			$json = new \lib\View('views/json_status.php', array('status'=>$status->get()));
			$kernel->interactWeb()->appendResponseBody($json->get());
		}
	}
}

