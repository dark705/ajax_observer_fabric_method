<?php
namespace lib\Handlers;
use lib\Kernel;
class HandlerLOG extends Handler {
		public function handle(Kernel $kernel) {
			$request = $kernel->interactWeb()->getRequestMethod();
			file_put_contents('log/log.txt', $request . PHP_EOL, FILE_APPEND);
	}
}

