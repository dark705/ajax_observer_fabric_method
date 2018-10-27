<?php
namespace lib\Handlers;
use lib\KernelHTTP;
interface HandlerInterface{
	 public function handle(KernelHTTP $kernel);
}