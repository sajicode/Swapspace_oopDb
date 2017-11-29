<?php

	include('connection.php');
	include('result.php');

	$show_connection = new DBConn();

	$result = $show_connection->query("SELECT * FROM category");

	while($row = $result->fetch()) {
		var_dump($row);
	}
