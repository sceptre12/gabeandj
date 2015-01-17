<?php
	require('../../config/db_config.php');
	if(($_POST['fgname2'] == "") || ( $_POST['lname2'] =="" )|| ( $_POST['gfood2'] == "") || ($_POST['gallergies2'] == "")){
		$fgname2 = $lgname2 = $gft2 = $gallergies2 = null;
	}
	if(($_POST['fgname3'] == "") || ( $_POST['lname3'] =="" )|| ( $_POST['gfood3'] == "") || ($_POST['gallergies3'] == "")){
		$fgname3 = $lgname3 = $gft3 = $gallergies3 = null;
	}
	if(($_POST['fgname4'] == "") || ( $_POST['lname4'] =="" )|| ( $_POST['gfood4'] == "") || ($_POST['gallergies4'] == "")){
		$fgname4 = $lgname4 = $gft4 = $gallergies4 = null;
	}
	if(($_POST['fgname5'] == "") || ( $_POST['lname5'] =="" )|| ( $_POST['gfood5'] == "") || ($_POST['gallergies5'] == "")){
		$fgname5 = $lgname5 = $gft5 = $gallergies5 = null;
	}
	
	if((isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['food'])) && 
	($_POST['fname'] != '' ) && ($_POST['lname'] != '') && ($_POST['email'] != '') && ($_POST['food'] !='') ){
		$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
		$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
		$food = filter_var($_POST['food'], FILTER_SANITIZE_STRING);
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		$allergies = filter_var($_POST['allergies'], FILTER_SANITIZE_STRING);
		$fgname2 = filter_var($_POST['fgname2'], FILTER_SANITIZE_STRING);
		$lgname2 = filter_var($_POST['lname2'], FILTER_SANITIZE_STRING);
		$gft2 = filter_var($_POST['gfood2'], FILTER_SANITIZE_STRING);
		$gallergies2 = filter_var($_POST['gallergies2'], FILTER_SANITIZE_STRING);
		$fgname3 = filter_var($_POST['fgname3'], FILTER_SANITIZE_STRING);
		$lgname3 = filter_var($_POST['lname3'], FILTER_SANITIZE_STRING);
		$gft3 = filter_var($_POST['gfood3'], FILTER_SANITIZE_STRING);
		$gallergies3 = filter_var($_POST['gallergies3'], FILTER_SANITIZE_STRING);
		$fgname4 = filter_var($_POST['fgname4'], FILTER_SANITIZE_STRING);
		$lgname4 = filter_var($_POST['lname4'], FILTER_SANITIZE_STRING);
		$gft4 = filter_var($_POST['gfood4'], FILTER_SANITIZE_STRING);
		$gallergies4 = filter_var($_POST['gallergies4'], FILTER_SANITIZE_STRING);
		$fgname5 = filter_var($_POST['fgname5'], FILTER_SANITIZE_STRING);
		$lgname5 = filter_var($_POST['lname5'], FILTER_SANITIZE_STRING);
		$gft5 = filter_var($_POST['gfood5'], FILTER_SANITIZE_STRING);
		$gallergies5= filter_var($_POST['gallergies5'], FILTER_SANITIZE_STRING);
		if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['food'])) {
			$insert = "INSERT INTO specialg VALUES('',:fn,:ln,:e,:m,:al,:mc,:2fn,:2ln,:2mc,:2al,:3fn,:3ln,:3mc,:3al,:4fn,:4ln,:4mc,:4al,:5fn,:5ln,:5mc,:5al);";
			$prep = $handler->prepare($insert);
			$results = $prep->execute(array(
					":fn" => $fname,
					":ln" => $lname,
					":e" => $email,
					":m" => $message,
					":al" => $allergies,
					":mc" => $food,
					":2fn" => $fgname2,
					":2ln" => $lgname2,
					":2mc" => $gft2,
					":2al" => $gallergies2,
					":3fn" => $fgname3,
					":3ln" => $lgname3,
					":3mc" => $gft3,
					":3al" => $gallergies3,
					":4fn" => $fgname4,
					":4ln" => $lgname4,
					":4mc" => $gft4,
					":4al" => $gallergies4,
					":5fn" => $fgname5,
					":5ln" => $lgname5,
					":5mc" => $gft5,
					":5al" => $gallergies5
				));
		}
	}else{
		header('location: 404.php');
		die();
	}

	$handler = null;
	header('location:../../index.html');
?>