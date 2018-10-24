<?php
namespace lib;
class HandlerJSON implements HandlerInterface {

	public function handle($request) {
		if ($request == 'POST'){
			$status = new \lib\Status();
			$json = new \lib\View('views/json_status.php', array('status'=>$status->get()));
			$json ->show();
		}
	}
}