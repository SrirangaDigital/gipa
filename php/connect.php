<?php
	$host = 'localhost';
	$user = 'root';
	$password = 'mysql';
	$database = 'igipa';
		
	$mysqli = new mysqli("$host","$user","$password", "$database");
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
		echo "Errno: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		exit;
	}
?>
