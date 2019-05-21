<?php

	class homeController{
		
		function welcome(){ 
			if(! @$_SESSION['uid']){
				header("location:".BASEURL."auth/logout");
				exit;
			}

		}
	}

?>