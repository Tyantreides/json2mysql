<?php
echo $_SERVER['DOCUMENT_ROOT'];

require_once('inc/config/globalpath.php');
require_once(GLOBAL_INCLUDE_DIR.'/model/core/config.php');
require_once(GLOBAL_INCLUDE_DIR.'/model/ext/mysql.php');

$config = new model_core_config();
$model = new model_ext_mysql($config);

$model->connect();
$model->selectdb();
$result = $model->simpleQuery('SELECT * FROM testtabelle');

while ($row = mysql_fetch_assoc($result)) {
    echo $row['id'].'<br>';
    echo $row['datetime'].'<br>';
    echo $row['feld1'].'<br>';
    echo $row['feld2'].'<br>';
	echo $row['feld3'].'<br>';
	echo $row['feld4'].'<br>';
}
// echo GLOBAL_BASE_DIR.'<br>';
// echo GLOBAL_INCLUDE_DIR.'<br>';
// echo GLOBAL_CONFIG_DIR.'<br>';
