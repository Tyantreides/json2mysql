<?php
require_once(GLOBAL_INCLUDE_DIR.'/model/core/mysql.php');

class model_ext_mysql extends model_core_mysql{
	
	public function simpleQuery($querystring){
		return mysql_query($querystring,$this->_connection);
	}
} 