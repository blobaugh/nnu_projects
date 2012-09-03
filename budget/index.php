<?php
/**
 * Programmer: Ben Lobaugh
 * Description: This file is essentially the router that will put the whole
 * 	site together.
 **/

require_once("includes/Bootstrap.php");


$route = explode('/', $_SERVER['PATH_INFO']); // Break up the url on /
$i = 1; // First route starts at position...

#Take a look at blueskybilling.com/v4/index.html at the class_exists, and see if it can possibly be useful

if($route[$i] != '') { // The user is trying to view a page somewheres. Try to load it
	$controller = $Reg->Get('path_controllers')  . $route[$i];
	// Make sure we go down all the directories till we find a controller file
	while(is_dir($controller)) { 
		$controller = $controller . '/' . $route[++$i];
	}
	if(is_dir($controller)) $controller = $controller . '/' . $route[++$i];
	
	if(is_file($controller . ".php")) { // Make sure the controller exists. If not show 404
		require_once($controller . ".php");
	} else {
		require_once($Reg->Get('path_controllers') . $Reg->Get('error_404') . ".php");
	}

} else { // User did not try to view anything. Show default view
	require_once($Reg->Get('path_controllers') . $Reg->Get('default_controller') . ".php");
}

?>

