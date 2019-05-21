<?php

	class ErrorController{
	
		function page_not_found(){
		
			header('HTTP/1.0 404 Not Found');
			echo 'Page not found!';
			exit;
		}

		function no_default_template_found(){
		
			header('HTTP/1.0 404 Not Found');
			echo 'No default template was found';
			exit;
		}
	}

?>