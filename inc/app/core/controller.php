<?php
/**
 * app_core_controller
 * Author: Christian Meißner
 * base class for controllers
 * 
 */
class app_core_controller{

	/**
	 * constructor
	 * runs specified action with given parameters
	 * @action: action in string format
	 * @params: params in any needed format. for example: a json string
	 */
	function __construct($action,$params) {
		$this->run($action,$params);
	}
	
	/**
	 * defaultaction
	 * defaultaction of the controller
	 * (optional) @params
	 */
	function defaultaction($params=NULL){
		//TODO implementieren
	}

	/**
	 * run
	 * runs the given action as method is method exists
	 * @action: string
	 * @params: mixed
	 * @return: the return of the method that runs
	 */
	private function run($action,$params){
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
	
	/**
	 * converttomethodname
	 * helpermethod to convert the action to a complete methodname
	 * @string string
	 * @methodname string
	 * @return: string
	 */
	private function converttomethodname($string,$methodtype){
		return $string.$methodtype;
	}
}
