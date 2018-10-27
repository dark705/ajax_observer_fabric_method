<?php
namespace lib\Handlers;
use lib\Kernel;
interface HandlerInterface{
	 public function handle(Kernel $kernel);
}