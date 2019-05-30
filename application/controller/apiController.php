<?php

	class apiController{
	
		function index(){
		}

		function __construct(){
			if(!$_SESSION['uid']){
				header("location:".BASEURL);
				exit;
			}
	    	}
	}
	
?>
