<?php 

	include "connect.php";

	$link = Connection();

	$query = 'SELECT * FROM tempLog ORDER BY timestamp DESC LIMIT 1';

	$queryFetch = mysqli_query($link, $query);
	$rows = array();
	while($r = mysqli_fetch_assoc($queryFetch)){
		$data = $r["timestamp"];
		$date = new DateTime($data);
		$date->add(new DateInterval('PT7H'));
		$rows[] = [
			"Humidity" => $r['humidity'],
			"Temperature" => $r['temperature'],
			"Timestamp" => $date->format('Y-m-d H:i:s')
		];
	}

	print json_encode($rows);

 ?>