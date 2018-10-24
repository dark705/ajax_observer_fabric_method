<?php
namespace lib;
class Status {
	public function __construct(){
		
	}
	
	public function get(){
		$rand = rand(0,10); 
		if($rand < 5){
			return true;
		} elseif ($rand > 5){
			return false;
		} else {
			return '...........';
		}	
	}
}

?>