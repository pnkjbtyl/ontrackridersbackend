<?php
	
	$routes['default_controller'] = 'home';
	$routes['default_function'] = 'welcome';



	$current_controller = $routes['default_controller'].'Controller';
   	$current_function = $routes['default_function'];
    
	require_once('application/controller/'.$current_controller.'.php');
	$current_controller = new $current_controller;
	$current_controller->{$current_function}();
	
?>
