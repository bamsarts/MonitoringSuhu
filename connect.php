<?php

	function Connection(){
		$server="localhost";
		$user="root";
		$pass="";
		$db="MonitoringSuhu";
	   	
		$connection = mysqli_connect($server, $user, $pass, $db);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}	
		return $connection;
	}
?>
