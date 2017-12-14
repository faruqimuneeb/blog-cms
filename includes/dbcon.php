<?php

	//include "config.php";

	//$link = new mysqli('localhost','root','','blogcms');
	try{
		$link = new PDO('mysql:hos=localhost;dbname=blogcms','root','');
		$link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	
?>