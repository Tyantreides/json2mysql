<?php

/**
 * 
 */
class helper_viewhelper{
	
	function __construct() {
		
	}
	
	public function render($param){
		
	}
	
	public function renderresultsimple($result){
		$output = '';
		while ($row = mysql_fetch_assoc($result)) {
		    $output .=  $row['id'].'<br>';
		    $output .=  $row['datetime'].'<br>';
		    $output .=  $row['feld1'].'<br>';
		    $output .=  $row['feld2'].'<br>';
			$output .=  $row['feld3'].'<br>';
			$output .=  $row['feld4'].'<br>';
		}
		return $output;
	}
	
	public function returnresultsimple($result){
		return $result;
	}
	
	public function print_r($debug){
		print_r('<pre>');
		print_r($debug);
		print_r('</pre>');
	}
}
