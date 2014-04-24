<?php
// require_once(APP_CORE_PATH.'requesttrait.php');
require_once(MODEL_CORE_PATH.'mysql.php');

class model_ext_mysql extends model_core_mysql{
	private $action;
	
	public function simpleQuery($querystring){
		return mysql_query($querystring,$this->_connection);
	}
	
	public function processrequest(model_ext_request $requestobj){
		if(method_exists($this, $requestobj->pullaction())){
			$methodname = $requestobj->pullaction();
			return $this->$methodname($requestobj);
		}
	}
	
	private function pull(model_ext_request $requestobj){
		// return $this->simpleQuery($pullparams);
		return $this->simpleQuery($requestobj->pullrequestparam());
	}
	
	private function push(model_ext_request $requestobj){
		return $requestobj;
	}
	
	private function pushjson(model_ext_request $requestobj){
		// print_r('<pre>');
		// print_r($requestobj);
		// print_r('</pre>');
		return $requestobj->pulldata();
	}
} 