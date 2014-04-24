<?php
require_once(MODEL_CORE_PATH.'dataobj.php');
/**
 * 
 */
class model_ext_request extends model_core_dataobj {
	
	private $_auth;
	private $_action;
	private $_requestparam;
	
	function __construct($action,$requestparam,$auth,$data=NULL) {
		$this->unprocessed();
		$this->setaction($action);
		$this->setrequestparam($requestparam);
		$this->setauth($auth);
		$this->pushdata($data);
	}
	
	private function getauth(){
		return $this->_auth;
	}
	
	private function setauth($auth){
		$this->_auth = $auth;
	}
	
	private function getaction(){
		return $this->_action;
	}
	
	private function setaction($action){
		$this->_action = $action;
	}
	
	private function getrequestparam(){
		return $this->_requestparam;
	}
	
	private function setrequestparam($requestparam){
		$this->_requestparam = $requestparam;
	}
	
	public function pushdata($data){
		parent::pushdata($data);
	}
	
	public function pulldata(){
		return parent::pulldata();
	}
	
	public function process(){
		parent::processed();
	}
	
	/**
	 * returns the auth status of the request obj
	 */
	public function isauth(){
		return $this->getauth();
	}
	
	public function pullaction(){
		return $this->getaction();
	}
	
	public function pullrequestparam(){
		return $this->getrequestparam();
	}
}
