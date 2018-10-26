<?php
namespace lib;
class HandlerLOG extends Handler {
		public function handle(KernelHTTP $http) {
			$request = $http->getRequestMethod();
			file_put_contents('log/log.txt', $request . PHP_EOL, FILE_APPEND);
	}
}

