<?php
/**
 * 
 */
class app_core_controller{
	
	function __construct($action,$params=NULL) {
		$this->run($action,$params);
	}
	
	function defaultaction(){
		
	}
	
	private function run($action,$params=NULL){
		if(method_exists($this, $this->converttomethodname($action, 'action'))){
			$methodname = $this->converttomethodname($action, 'action');
			if(isset($params) && $params != NULL){
				return $this->$methodname($params);
			}
			else {
				return $this->$methodname();
			}
		}
	}
	
	private function converttomethodname($string,$methodtype){
		return $string.$methodtype;
	}
}
