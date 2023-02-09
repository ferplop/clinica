<?php
session_start();

// Define database
define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpass', 'Mega6609058aa');
define('dbname', 'cita');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
