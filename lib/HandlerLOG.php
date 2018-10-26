<?php
namespace lib;
class HandlerLOG extends Handler {
		public function handle(Collector $collector) {
			$request = $collector->getRequestMethod();
			file_put_contents('log/log.txt', $request . PHP_EOL, FILE_APPEND);
	}
}

