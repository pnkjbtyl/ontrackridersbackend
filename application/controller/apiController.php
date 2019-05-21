<?php

	class apiController{
	
		function index(){

		if(!@$_SESSION['login']){
				header("location:".BASEURL."auth/logout");
				exit;
			}
			
		}

		
	}

?>