<?php

	//Load configurations
	require_once(dirname(__FILE__).'/application/config.php');

	//Init Framework
	require_once(dirname(__FILE__).'/application/init.php');

	//Parse URL request
	$req_path = @$_GET['path'];
	$_request = explode('/', $req_path);

	//Fetch Controllers and views
	$current_controller = @$_request[0]? $_request[0].'Controller': DEFAULT_CONTROLLER.'Controller';
   	$current_function = @$_request[1]? $_request[1]: DEFAULT_VIEW;
	try{
	
		//Instantiate controller and views if exists
		if(file_exists(BASEPATH.'/application/controller/'.$current_controller.'.php')){
			
			require_once(BASEPATH.'/application/controller/'.$current_controller.'.php');
			$current_controller = new $current_controller;
			
			//Assign default variables to controller
			$current_controller->db = $db;
			$current_controller->template = DEFAULT_TEMPLATE;

			if(method_exists($current_controller, $current_function))
					//Call controller's view function for application logic
					$current_controller->{$current_function}();
			else	throw new Exception('PAGE_NOT_FOUND');
			
			if(file_exists((BASEPATH.'/application/view/'.$current_function.'.php')))
					//Get view output
					include_once(BASEPATH.'/application/view/'.$current_function.'.php');
			else	throw new Exception('PAGE_NOT_FOUND');
			
			//Clean all data from output stream and store into a variable
			$current_controller->response = ob_get_clean();
		
			//Include required template and merge outputs inside the template structure
			if(file_exists(('application/view/templates/'.$current_controller->template.'.php')))
					include_once('application/view/templates/'.$current_controller->template.'.php');
			else	throw new Exception('TEMPLATE_NOT_FOUND');

			//End processes and Respond to client. Execution stops here.
		
		}else throw new Exception('PAGE_NOT_FOUND');
		
	}catch(Exception $e){
			require_once('application/controller/errorController.php');
			$current_controller = new errorController();
			
			switch($e->getMessage()){
				
				case 'PAGE_NOT_FOUND':
					$current_controller->page_not_found();
				break;

				case 'TEMPLATE_NOT_FOUND':
					$current_controller->no_default_template_found();
				break;

				case 'AUTHENTICATION_FAILED':
					$current_controller->authentication_failed();
				break;
			}
	}
?>
