<?php 
	try {
		$conn = new PDO('mysql:host=localhost;dbname=rumc_spo','Dmitry','Soroka-456585');	
	} catch (PDOException $e) {
		echo 'ОШИБКА'.$e->getMessage()."<br />";
	}
?>