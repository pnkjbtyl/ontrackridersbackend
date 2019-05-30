<?php

class homeController{
		
	function __construct(){
		
		if(!$_SESSION['uid']){
			header("location:".BASEURL."auth/login");
			exit;
		}
	}

		function welcome(){ 
		}
	}

?>
