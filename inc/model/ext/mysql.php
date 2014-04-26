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
        $this->prepare();
        if($this->checkdata($requestobj)){
        	$this->prepairquery($requestobj);
            return $requestobj->pulldata();
        }
		else{
            return false;
        }
	}

    private function prepare(){
        $this->connect();
        $this->selectdb();
    }

    private function checkdata(model_ext_request $requestobj){
        return is_array($requestobj->pulldata());
    }

    private function prepairquery(model_ext_request $requestobj){
    	$mappeddata = $this->mapfields($requestobj);
		$this->makequery($mappeddata);
		$tempquery = "INSERT INTO `json2mysql`.`testtabelle` (`id`, `datetime`, `feld1`, `feld2`) 
						VALUES 
						(NULL, '2014-04-26 14:36:35', 'test1', 'test2'), 
						(NULL, '2014-04-26 14:36:37', 'test1', 'test2')
						;";
    }
	
	private function mapfields(model_ext_request $requestobj){
		$dataarray = array();
		$mappingconfig = $this->getfieldmapping();
		$requestdata = $requestobj->pulldata();
		foreach ($requestdata as $key => $dataset) {
			foreach ($dataset as $fieldname => $fieldvalue) {
				if(array_key_exists($fieldname, $mappingconfig)){
					$dataarray[$key][$mappingconfig[$fieldname]] = $fieldvalue;
				}
			}
		}
		return $dataarray;
	}
	
	private function makequery($mappeddata){
		$this->getfieldsstring($mappeddata);
		print_r('<pre>');
		print_r($this->_dbtablename);
		print_r("</pre>");
		$query = "INSERT INTO `".$this->_dbname."`.`".$this->_dbtablename."` ".$this->getfieldsstring($mappeddata)." VALUES";
		print_r('<pre>');
		print_r($query);
		print_r("</pre>");
		foreach ($mappeddata as $key => $dataset) {
			
		}
	}
	
	private function getfieldsstring($mappeddata){
		$fieldliststr = '(`';
		$dataset = each($mappeddata);
		$fieldliststr .= implode("`,`", array_keys($dataset['value']));
		$fieldliststr .= '`)';
		return $fieldliststr;
	}
} 