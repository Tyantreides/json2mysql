<?php
// echo $_SERVER['DOCUMENT_ROOT'];

require_once('inc/config/globalpath.php');
// require_once(MODEL_CORE_PATH.'config.php');
// require_once(MODEL_EXT_PATH.'mysql.php');
// require_once(MODEL_EXT_PATH.'request.php');
require_once(APP_EXT_PATH.'controller.php');


// $controller = new app_ext_controller('pull','SELECT * FROM testtabelle');
$controller = new app_ext_controller('pushjson','{"test1":"teststring1","test2":"teststring"}');

print_r('<pre>');
print_r($controller->viewresult());
print_r('</pre>');
// $config = new model_core_config();
// $model = new model_ext_mysql($config);
// $request = new model_ext_request('read','SELECT * FROM testtabelle',true);
// echo $model->processrequest($request);
// $model->connect();
// $model->selectdb();
// $result = $model->simpleQuery('SELECT * FROM testtabelle');
// 

// print_r('<pre>');
// print_r($result);
// print_r('</pre>');
// while ($row = mysql_fetch_assoc($result)) {
    // echo $row['id'].'<br>';
    // echo $row['datetime'].'<br>';
    // echo $row['feld1'].'<br>';
    // echo $row['feld2'].'<br>';
	// echo $row['feld3'].'<br>';
	// echo $row['feld4'].'<br>';
// }
// echo GLOBAL_BASE_DIR.'<br>';
// echo GLOBAL_INCLUDE_DIR.'<br>';
// echo GLOBAL_CONFIG_DIR.'<br>';
