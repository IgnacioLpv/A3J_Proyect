<?php

	$dbhost = "mysql.hostinger.es";
	$dbuser = "u929643830_ilv";
	$dbpass = "Calabaza97";
	$dbname = "u929643830_cim";
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,  
				     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $error) {
		die("Error conexión BBDD " . $error->getMessage());
	}	
?>

