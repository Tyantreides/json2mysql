<?php
require_once(APP_CORE_PATH.'controller.php');
require_once(MODEL_CORE_PATH.'config.php');
require_once(MODEL_EXT_PATH.'request.php');
require_once(MODEL_EXT_PATH.'json.php');
require_once(MODEL_EXT_PATH.'mysql.php');
require_once(GLOBAL_HELPER_DIR.'viewhelper.php');
/**
 * 
 */
class app_ext_controller extends app_core_controller {
	
	private $requestobj;
	private $modelmysql;
	private $modeljson;
	private $config;
	private $view;
	private $result;
	
	function pullaction($params){
		$this->config = new model_core_config();
		$this->requestobj = new model_ext_request('pull',$params,$this->auth());
		$this->modelmysql = new model_ext_mysql($this->config);
		$this->view = new helper_viewhelper();
		$this->modelmysql->connect();
		$this->modelmysql->selectdb();
		$this->result = $this->modelmysql->processrequest($this->requestobj);
	}
	
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
	
	function pushjsonaction($params){
        $this->view = new helper_viewhelper();
        $this->view->print_r($params);

		$this->config = new model_core_config();
        $this->modeljson = new model_ext_json();
        $this->requestobj = new model_ext_request($this->modeljson->toobj($params));
        $this->view->print_r($this->requestobj);
		$this->modelmysql = new model_ext_mysql($this->config);
		$this->requestobj->pushdata($this->modeljson->toobj($this->requestobj->pullrequestparam()));
		// $this->view->print_r($this->requestobj);
		$this->result = $this->modelmysql->processrequest($this->requestobj);
		// $this->view->print_r($this->result);
	}
	
	function viewresult($rendered=false){
		if($rendered){
			return $this->view->renderresultsimple($this->result);
		}
		return $this->view->returnresultsimple($this->result);
	}
	
	function auth(){
		//TODO auth implementieren
		return true;
	}
}
