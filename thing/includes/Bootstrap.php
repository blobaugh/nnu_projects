<?php
/**
 * Programmer: Ben Lobaugh
 * Description: Sets up all the commonly needed items, and maintains the session
 **/

// This file needed before all else. It is godly
require_once('lib/global_functions.php'); // After this NO other includes should EVER be required to make a new class

// Registry holds all non user definable config data
// User defined settings in /includes/Settings.php
$Reg = Registry::GetRegistry();

// Get the site settings
require_once("Settings.php");

// Include non class related files
require_once($Reg->Get('path_library') . "dBug.php");
require_once($Reg->Get('path_includes') . "common_functions.php");

// Create the template that all pages will use to display content
$Tpl = new Template();
$Tpl->DisableCache();
// Connect to database
//$Db = new mysqli($Reg->Get('db_location'), $Reg->Get('db_user'), $Reg->Get('db_password'), $Reg->Get('db_name'));
$Db = Database::GetDatabase();
// Check to see if a valid user is logged in


?>
