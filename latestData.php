<?php 

	include "connect.php";

	$link = Connection();

	$query = 'SELECT * FROM tempLog ORDER BY timestamp DESC LIMIT 1';

	$data = mysqli_query($link, $query);
	$rows = array();
	while($r = mysqli_fetch_assoc($data)){
		$rows[] = $r;
	}

	print json_encode($rows);

 ?>