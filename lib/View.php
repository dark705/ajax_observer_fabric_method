<?php
namespace lib;
class View {
	private $html;

	public function __construct($file, $var = array()){
		extract($var);
		ob_start();
			include $file;
		$this->html = ob_get_clean();
	}
	
	public function get(){
		return $this->html;
	}
	
	public function show(){
		echo $this->html;
	}
}
?>