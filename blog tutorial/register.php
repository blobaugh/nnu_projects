<?php
/******************************************************
* Programmer: Ben Lobaugh (ben <AT> regexninja <DOT> com)
* File: register.php
* Site: 
* Creation Date: 12-31-2008
* Modified Date: 12-31-2008
* Description:  Handles the registration of new users.
******************************************************/

// The session manager must be included on EVERY page
require_once("/core/session_manager.php");


/*
* Check to see if the user posted anything. 
*
* If the user posted something we need to check and make sure
* all of the form elements are there, and if so that they contain
* data in the correct format for our system.
*/
if(isset($_POST['btnSave'])) {
	$error = array(); // Hold any form errors

	// The user has posted something check it
	if(isset($_POST['username']) && isset($_POST['password'])) {
		/*
		* The user has posted all the right form elements
		* Now we need to check to ensure proper data.
		* This can very easily be done with regexs.
		*
		* Match the username to an email address (Very Basic)
		* Match the password to anything but space at least 6 
		* characters long
		*/
		if(!preg_match("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$")) {
			// The username did not match. Give the user an error
			$error[] = 'Invalid Username. Usernames must be in the form of an email address.';
		}
		if(!preg_match("/[^\s]{6,50}/")) {
			// The password did not match. Give the user an error
			$error[] = 'Invalid Password. Passwords must be at least 6 characters long and may not contain spaces.';
		}
		
		/*
		* If there were no errors we can now add the user to the database.
		* If the were errors we need to show the user and not enter anything
		* into the database
		*/
		if(sizeof($error) == 0) {
			/*
			* Create the query for the database. Normally it would be bad practice
			* to just put it on the page like this, but for this stupid simple system
			* we do not really care.
			*
			* First we need to make sure that the user does not exist. Then create.
			*/
			$query = "SELECT Username FROM `" . DB_TBL_USERS . "` WHERE Username='" . mysql_real_escape_string($_POST['username']) . "'";
			
		} else {
			// Show the errors
		}
		
	} else {
		/*
		* The user missed a form element.
		* Fill the form in with whatever the user had entered
		* and show it again with an error message.
		*/
	}
}

