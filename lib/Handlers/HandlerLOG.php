<?php
namespace lib\Handlers;
use lib\KernelHTTP;
class HandlerLOG extends Handler {
		public function handle(KernelHTTP $kernel) {
			$request = $kernel->getServer()->getRequestMethod();
			file_put_contents('log/log.txt', $request . PHP_EOL, FILE_APPEND);
	}
}

