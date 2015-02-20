<?php
	


	try{
		$handler = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pass);
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e){
		header("location:../../member/action/404.php");
		echo $e->getMessage();
		die();
	}
?>