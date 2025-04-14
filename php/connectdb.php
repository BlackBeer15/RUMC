<?php 
	try {
		$conn = new PDO('mysql:host=localhost;dbname=rumc_spo','Dmitry','Soroka-456585');
	} catch (PDOException $pe) {
		die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
?>