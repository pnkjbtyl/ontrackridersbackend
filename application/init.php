<?php

	//Intialize session and output buffering
	ob_start();
	session_start();
    
	//Intialize DB
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($db->connect_errno){
		echo "<b>Database Error:</b> ";
		echo $db->connect_error;
		exit;
	}

?>