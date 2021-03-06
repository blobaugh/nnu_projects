<?php
/**
 * Programmer: Ben Lobaugh
 * Description: Sets up all the commonly needed items, and maintains the session
 **/


/**
* Kill off some bad php defaults
**/
set_magic_quotes_runtime(0);
ini_set('register_globals', 'off');

ini_set('magic_quotes_gpc', 'off');
ini_set('magic_quotes_runtime', 'off');


// Fun little var to see how long it takes the site to load
// Unfortunately the ending time is in the template display
$site_start_time = mktime();

// This file needed before all else. It is godly
require_once('lib/global_functions.php'); // After this NO other includes should EVER be required to make a new class

// Registry holds all non user definable config data
// User defined settings in /includes/Settings.php
$Reg = Registry::GetRegistry();

// Get the site settings
require_once(find_doc_root() . 'app/' . "Settings.php");

// Create the template that all pages will use to display content
$Tpl = new Template();

// Are we in debug mode or not?
if($Reg->Get('site_mode') == 'debug') {
        error_reporting(E_ALL);
	$Tpl->DisableCache();
} else {
        // Create a custom error handler for here
        // that logs to something
        error_reporting(0);
        $Tpl->EnableCache();
        $Reg->Set('smarty_debugging', false);
}

// Include non class related files
require_once($Reg->Get('path_core') . 'lib/' . "dBug.php");
// These are magically included app files. The dev may choose not to use them, but i doubt it
if(is_file($Reg->Get('path_app') . 'lib/' . "common_functions.php")) {
        require_once($Reg->Get('path_app') . 'lib/' . "common_functions.php");
}
if(is_file($Reg->Get('path_app') . "Include.php")) {
        require_once($Reg->Get('path_app') . "Include.php");
}




// Connect to database
//$Db = new mysqli($Reg->Get('db_location'), $Reg->Get('db_user'), $Reg->Get('db_password'), $Reg->Get('db_name'));
$Db = Database::GetDatabase();

site_sanity_check(); // In global_functions

?>
