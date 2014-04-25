<?php
require_once(MODEL_CORE_PATH.'dataobj.php');
/**
 * 
 */
class model_ext_request extends model_core_dataobj {
	
	private $_auth;
	private $_action;
	private $_requestparam;
	
	function __construct($inputobj) {
		$this->setprocessed($inputobj['processed']);
		$this->setaction($inputobj['action']);
		$this->setrequestparam($inputobj['requestparam']);
		$this->setauth($inputobj['auth']);
		$this->pushdata($inputobj['data']);
        $this->settype($inputobj['type']);
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
