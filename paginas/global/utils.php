<?php
	function getArraySQL($sql) {
		$rawdata = array();
		$i=0;

		$result = mysql_query($sql);
		while($row = mysql_fetch_assoc($result)) {
			$rawdata[$i] = $row;
			$i++;
		}

		return $rawdata;
	}
	function Solombrino() {
		if (isset($_SERVER['HTTP_ORIGIN'])) {
        	header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        	header('Access-Control-Allow-Credentials: true');
        	header('Access-Control-Max-Age: 86400');    // cache for 1 day
		}

		// Access-Control headers are received during OPTIONS requests
		if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
			if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");	
    		if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        		header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        	exit(0);
		}
	}
?>
