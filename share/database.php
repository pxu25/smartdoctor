<?php
	$dbName   = "patients";
	$username = "patients";
	$password = "!SmartDoctor1234";
	$host = "localhost";

	$dsn = "mysql:host=$host;dbname=$dbName";

	try {
		$db = new PDO($dsn, $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		error_log("Database connection error: Reason: " . $e->getMessage(), 0);
		echo 'The connection to database failed';
		exit();
	}
?>
