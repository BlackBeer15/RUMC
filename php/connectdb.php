<?php 
	try {
		$conn = new PDO('mysql:host=localhost;dbname=rumc_spo','#','#');
	} catch (PDOException $pe) {
		die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
?>