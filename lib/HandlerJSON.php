<?php
namespace lib;
class HandlerJSON extends Handler {
		public function handle(Collector $collector) {
		if ($collector->getRequestMethod() == 'POST'){
			$status = new \lib\Status();
			$json = new \lib\View('views/json_status.php', array('status'=>$status->get()));
			$collector->appendResponse($json->get());
		}
	}
}

