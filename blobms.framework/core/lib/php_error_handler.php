<?php
/*
 * This is the error handler that deals with all the php errors
 *
 * Stolen from CodeIgnitor
 */

 function blobms_error_handler($severity, $message, $filepath, $line)   {
        global $Db;

	 // We don't bother with "strict" notices since they will fill up
	 // the log file with information that isn't normally very
	 // helpful.  For example, if you are running PHP 5 and you
	 // use version 4 style class functions (without prefixes
	 // like "public", "private", etc.) you'll get notices telling
	 // you that these have been deprecated.

	if ($severity == E_STRICT)
	{
		return;
	}


	// Should we display the error?
	// We'll get the current error_reporting level and add its bits
	// with the severity bits to find out.

	if (($severity & error_reporting()) == $severity)
	{
		$error->show_php_error($severity, $message, $filepath, $line);
	}

	// If we have a database connection lets log it, otherwise display it and
	// kill the world
	if(isset($Db)) {
	        // Dump in db
	} else {
                echo "<br /><b>$severity</b>: $message.<br />File: $filepath<br />Line: $line";
                if($severity == E_FATAL) die();
	}


}
