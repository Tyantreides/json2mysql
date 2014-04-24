<?php

/**
 * 
 */
class model_core_dataobj{
	protected $_processed;
	protected $_type;
	protected $_data;
	
	function __construct() {
		
	}
	
	private function setdata($data){
		$this->_data = $data;
	}
	
	private function getdata(){
		return $this->_data;
	}
	
	private function setprocessed($status){
		$this->_processed = $status;
	}
	
	private function getprocessed(){
		return $this->_processed;
	}
	
	private function settype($type){
		$this->_type = $type;
	}
	
	private function gettype(){
		return $this->_type;
	}
	
	public function processed(){
		$this->setprocessed(true);
	}
	public function unprocessed(){
		$this->setprocessed(false);
	}
	public function status(){
		return $this->getprocessed();
	}
	
	public function pushdata($data){
		$this->setdata($data);
	}
	
	protected function pulldata(){
		return $this->getdata();
	}
}
