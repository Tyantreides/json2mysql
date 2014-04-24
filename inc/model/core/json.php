<?php

/**
 * 
 */
class model_core_json{
	
	private $jsonstring;
	private $jsonobj;
	
	function __construct() {
		
	}
	
	private function setjsonstring(string $jsonstring){
		$this->jsonstring = $jsonstring;
	}
	
	private function getjsonstring(){
		return $this->jsonstring;
	}
	
	private function setjsonobj($jsonobj){
		$this->jsonstring = $jsonstring;
	}
	
	private function getjsonobj(){
		return $this->jsonobj;
	}
	
	protected function pulljsonobj(){
		return $this->getjsonobj();
	}
	
	protected function pulljsonstring(){
		return $this->getjsonstring();
	}
	
	protected function pushjsonobj($jsonobj){
		$this->setjsonobj($jsonobj);
	}
	
	protected function pushjsonstring($jsonstring){
		$this->setjsonstring($jsonstring);
	}
}
