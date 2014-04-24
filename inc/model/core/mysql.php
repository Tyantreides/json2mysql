<?php
// require_once('/inc/app/core/debug.php');
// require_once(GLOBAL_INCLUDE_DIR.'/model/core/config.php');

class model_core_mysql {
    protected $_server;
    protected $_dbname;
    protected $_dbuser;
    protected $_dbpass;
    protected $_connection;
	protected $_config;

    public $_debuglog;

    function __construct($config){
		$this->_config = $config;
		$this->_server = $this->_config->getdbserver();
		$this->_dbname = $this->_config->getdbname();
		$this->_dbuser = $this->_config->getdbuser();
		$this->_dbpass = $this->_config->getdbpass();
    }

    public function connect(){
        $this->_connection = mysql_connect($this->_server,$this->_dbuser,$this->_dbpass)  or die(mysql_error());
        // or die($this->_debuglog = $this->adddebugline(get_class($this).' : '.mysql_error(),$this->_debuglog));
        return true;
    }

    public function disconnect(){
        mysql_close($this->_connection);
        // or die($this->_debuglog = $this->adddebugline(get_class($this).' : '.mysql_error(),$this->_debuglog));
    }

    public function selectdb(){
        mysql_select_db($this->_dbname,$this->_connection) or die('<br>DB select fail: dbname: '.$this->_dbname.' mysqlerror: '.mysql_error());
        // or die($this->_debuglog = $this->adddebugline(get_class($this).' : '.mysql_error(),$this->_debuglog));
        return true;
    }
} 