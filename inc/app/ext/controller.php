<?php
require_once(APP_CORE_PATH.'controller.php');
require_once(MODEL_CORE_PATH.'config.php');
require_once(MODEL_EXT_PATH.'request.php');
require_once(MODEL_EXT_PATH.'json.php');
require_once(MODEL_EXT_PATH.'mysql.php');
require_once(GLOBAL_HELPER_DIR.'viewhelper.php');
/**
 * app_ext_controller
 * Author: Christian Meißner
 * extends the app_core_controller and implementing the actions for it
 */
class app_ext_controller extends app_core_controller {
	
	private $requestobj;
	private $modelmysql;
	private $modeljson;
	private $config;
	private $view;
	private $result;
	
	/**
	 * pullaction
	 * executed at pull action. gets data from model via request object
	 * @params: json string for configuration needed
	 */
	function pullaction($params){
		$this->config = new model_core_config();
		$this->requestobj = new model_ext_request('pull',$params,$this->auth());
		$this->modelmysql = new model_ext_mysql($this->config);
		$this->view = new helper_viewhelper();
		$this->modelmysql->connect();
		$this->modelmysql->selectdb();
		$this->result = $this->modelmysql->processrequest($this->requestobj);
	}
	
	/**
	 * 
	 */
	function pushaction($params){
		$this->view = new helper_viewhelper();
		$this->config = new model_core_config();
		$this->requestobj = new model_ext_request('push',$params,$this->auth());
		$this->modelmysql = new model_ext_mysql($this->config);
		$this->modelmysql->connect();
		$this->modelmysql->selectdb();
		// $this->view->print_r($this->requestobj);
		$this->result = $this->modelmysql->processrequest($this->requestobj);
		$this->view->print_r($this->result);
	}
	
	/**
	 * pushjsonaction
	 * reacts to jsonpush action. creates a request object and pushes params into it
	 * 
	 */
	function pushjsonaction($params){
		$this->view = new helper_viewhelper();
		$this->config = new model_core_config();
		$this->requestobj = new model_ext_request('pushjson',$params,$this->auth());
		$this->modeljson = new model_ext_json();
		$this->modelmysql = new model_ext_mysql($this->config);
		$this->requestobj->pushdata($this->modeljson->toobj($this->requestobj->pullrequestparam()));
		$this->modelmysql->connect();
		$this->modelmysql->selectdb();
		// $this->view->print_r($this->requestobj);
		$this->result = $this->modelmysql->processrequest($this->requestobj);
		// $this->view->print_r($this->result);
	}
	
	/**
	 * viewresult
	 * helper method for output. its for developing purpose.
	 * it uses helper_viewhelper object. and can render 2 different ways controlled by parameter
	 * @rendered boolean
	 */
	function viewresult($rendered=false){
		if($rendered){
			return $this->view->renderresultsimple($this->result);
		}
		return $this->view->returnresultsimple($this->result);
	}
	
	/**
	 * auth
	 * method implemets the use of the auth system
	 */
	function auth(){
		//TODO auth implementieren
		return true;
	}
}
