<?php
require_once('/inc/app/core/debug.php');

class model_core_mysql {
    protected $_server;
    protected $_dbname;
    protected $_dbuser;
    protected $_dbpass;
    protected $_connection;
    use app_core_debug;

    public $_debuglog;

    function __construct(){


    }

    protected function connect(){
        $this->_connection = mysql_connect($this->_server,$this->_dbuser,$this->_dbpass) or
        die($this->_debuglog = $this->adddebugline(get_class($this).' : '.mysql_error(),$this->_debuglog));
        return true;
    }

    protected function disconnect(){
        mysql_close($this->_connection) or
        die($this->_debuglog = $this->adddebugline(get_class($this).' : '.mysql_error(),$this->_debuglog));
    }

    protected function selectdb(){
        mysql_select_db($this->_dbname,$this->_connection) or
        die($this->_debuglog = $this->adddebugline(get_class($this).' : '.mysql_error(),$this->_debuglog));
        return true;
    }
} 