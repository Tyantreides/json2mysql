<?PHP

$dbserver = 'localhost';
$dbname = 'test';
$dbuser = 'json2mysql';
$dbpass = 'json';
$dbtable = 'testtabelle';

/**
 * Datenbank Feldmapping
 * Jsonstring Datenfeldname => Mysql Feldname
 */
$dbfields = array('numid' => 'id',
					'zeit' => 'datetime', 
					'field1' => 'feld1',
					'field2' => 'feld2'
					);
					
$dbfields2 = array('sample' => array(0 => array('src' => 'numid','dest' => 'id','placeholder' => '%a','type' => 'string'),
					  		1 => array('src' => 'zeit','dest' => 'datetime','placeholder' => '%a','type' => 'string'),
					  		2 => array('src' => 'field1','dest' => 'feld1','placeholder' => '%a','type' => 'string'),
					  		1 => array('src' => 'field2','dest' => 'feld2','placeholder' => '%a','type' => 'string'),
							)
					);
													
?>