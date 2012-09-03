<?php
/*
 * User editable config options
 */
$DevProject = "final_db_proj/"; // For use by the developer

// Mysql Connection Info
$Reg->Set('db_user', 'root');
$Reg->Set('db_password', '');
$Reg->Set('db_location', 'localhost');
$Reg->Set('db_name', 'Final_Project');

$Reg->Set('tplTitle', 'Final DB Project');

// Paths
$Reg->Set('doc_root', $_SERVER['DOC_ROOT']); // Default is usually correct. Only change if your site is in a subdirectory

// Default Controller
$Reg->Set('default_controller', 'home');

// Error Pages
$Reg->Set('error_404', '404');


// The following if statement should be used for a developer developing on his/her own machine
if (preg_match("/localhost/", $_SERVER['SERVER_NAME'])) {
	// On Ben's dev box

	$Reg->Set('http_link', "http://localhost/$DevProject");
	$Reg->Set('doc_root', $_SERVER['DOCUMENT_ROOT'] . "/$DevProject");
	$Reg->Set('db_location', "localhost");

	$Reg->Set('smarty_cache_enabled', 'false');
	$Reg->Set('smarty_debugging', false);

	error_reporting(E_ALL);
}



/*
 * There are several settings that are automagically put in by the cms. This speeds up development
 * time. However, there may be occasions when the structure of the cms needs to be changed. If this
 * is one of those times take a look in lib/Registry.class.php->__construct for the config defaults.
 * Any of the config defaults may be changed. Please place all non default changes below this
 * comment. That will help other developers to get a better feel of what is happening in this system
 */

?>
