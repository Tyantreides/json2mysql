<?php

/**
 * Global Paths
 */
define(GLOBAL_BASE_DIR,$_SERVER['DOCUMENT_ROOT'].'/json2mysql');
define(GLOBAL_INCLUDE_DIR, GLOBAL_BASE_DIR.'/inc');

/**
 * Global Module Paths
 */
define(GLOBAL_CONFIG_DIR, GLOBAL_INCLUDE_DIR.'/config/');
define(GLOBAL_MODEL_DIR, GLOBAL_INCLUDE_DIR.'/model');
define(GLOBAL_APP_DIR, GLOBAL_INCLUDE_DIR.'/app');
define(GLOBAL_HELPER_DIR, GLOBAL_INCLUDE_DIR.'/helper/');

/**
 * Core an Ext Paths
 */
 define(APP_CORE_PATH, GLOBAL_APP_DIR.'/core/');
 define(APP_EXT_PATH, GLOBAL_APP_DIR.'/ext/');
 
 define(MODEL_CORE_PATH, GLOBAL_MODEL_DIR.'/core/');
 define(MODEL_EXT_PATH, GLOBAL_MODEL_DIR.'/ext/');



