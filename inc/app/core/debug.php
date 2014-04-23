<?php
/**
 * app_core_debug
 * package json2mysql
 * Author: Christian Meissner
 *
 * Debug Trait for general debug logging
 */

trait app_core_debug {

    function adddebugline($line,$debuglog){
        return $debuglog.date('H:i:s').' : '.$line.'<br>';
    }
} 