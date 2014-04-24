<?php

require_once(MODEL_CORE_PATH.'json.php');

/**
 * 
 */
class model_ext_json extends model_core_json {
	
	public function tostring($jsonobj){
		// $this->pushjsonstring();
		return json_encode($json);
	}
	
	public function toobj($jsonstring){
		return json_decode($jsonstring,true);
	}
}

