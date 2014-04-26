<?php

/**
 * 
 */
class model_core_config{
	
	protected $_dbserver;
    protected $_dbname;
    protected $_dbuser;
    protected $_dbpass;
	protected $_dbtablename;
	protected $_fieldmapping;
	
	function __construct() {
		include(GLOBAL_CONFIG_DIR.'/globalsettings.php');
		$this->setdbserver($dbserver);
		$this->setdbname($dbname);
		$this->setdbuser($dbuser);
		$this->setdbpass($dbpass);
		$this->settablename($dbtable);
		$this->setfieldmapping($dbfields);
	}
	
	function setdbserver($dbserver){
		$this->_dbserver = $dbserver;
	}
	
	function setdbname($dbname){
		$this->_dbname = $dbname;
	}
	
	function setdbuser($dbuser){
		$this->_dbuser = $dbuser;
	}
	
	function setdbpass($dbpass){
		$this->_dbpass = $dbpass;
	}
	
	function settablename($tablename){
		$this->_dbtablename = $tablename;
	}
	
	function setfieldmapping($fieldmapping){
		$this->_fieldmapping = $fieldmapping;
	}
	
	function getdbserver(){
		return $this->_dbserver;
	}
	
	function getdbname(){
		return $this->_dbname;
	}
	
	function getdbuser(){
		return $this->_dbuser;
	}
	
	function getdbpass(){
		return $this->_dbpass;
	}
	
	function getdbtablename(){
		return $this->_dbtablename;
	}
	
	function getfieldmapping(){
		return $this->_fieldmapping;
	}
	
}
