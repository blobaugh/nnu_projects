<?php
/**
 * Programmer: Ben Lobaugh
 * Description: This file is essentially the router that will put the whole
 * 	site together.
 **/

require_once("core/Bootstrap.php");
error_reporting(E_ALL);
$route = explode('/', $_SERVER['PATH_INFO']); // Break up the url on /
$i = 1; // First route starts at position...


if($route[$i] != '') { // The user is trying to view a page somewheres. Try to load it

        // Find initial controller file
        $controller = $Reg->Get('path_controllers')  . $route[$i];

	/*
	 * It is highly likely that there will be several levels of folders before we
	 * find an actual controller file. We need to go down through each one and check it out.
	 *
	 * If the controller also has sub directories the controller file must be named the same
	 * as the folder. Sorry, that was very poorly worded. I'll try to fix it later.
	 *
	 * E.G: http://example.com/users
	 *      This will load the users.php controller and lists the user, but there is also a link like
	 *      http://example.com/users/admins
	 *      Which loads users/admins.php and lists the users in the admin group
	 *      So, for http://example.com/users we need a file users/users.php
	 */
	while(is_dir($controller)) {
		$controller = $controller . '/' . $route[++$i];
	}

	if(is_dir($controller)) {
	        // The controller is also a folder
	        $controller = "$controller/$controller.php" ;
	} else if(is_file($controller . ".php")) {
	        // The controller is a file
		require_once($controller . ".php");
	} else {
	        // Load the default controller
		require_once($Reg->Get('path_controllers') . $Reg->Get('default_controller') . ".php");
	}

} else { // User did not try to view anything. Show default view
	require_once($Reg->Get('path_controllers') . $Reg->Get('default_controller') . ".php");
}
