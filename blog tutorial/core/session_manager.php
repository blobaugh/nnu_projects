<?php
/******************************************************
* Programmer: Ben Lobaugh (ben <AT> regexninja <DOT> com)
* File: session_manager.php
* Site: 
* Creation Date: 12-31-2008
* Modified Date: 12-31-2008
* Description: Sets up much of the behind the scenes
*	functionality of the site that users never see
******************************************************/

// Startup the session
session_start();

/*
* Setup some constants we will be able to use anywhere
* in our system. If anything changes it is much simpler to 
* change a constant than it is to find every place that piece
* of data was used and change it.
*/

// Database connection info
define('DB_USER', 'myblog');
define('DB_PASSWORD', ' myblogpassword');
define('DB_DB', 'blog'); // This is the name of the database
define('DB_LOCATION', 'localhost'); // Server the database resides on

// Database tables
define('DB_TBL_USERS', 'Users');
define('DB_TBL_COMMENTS', 'Comments');
define('DB_TBL_POSTS', 'Posts');


/*
* Create a database connection. 
*
* If the database connection fails then the site should
* panic and die. If there is no connection to the database
* what would be the point of continuing?
*/
// Connect to database server 
$Db = mysql_connect(DB_LOCATION, DB_USER, DB_PASSWORD) or die('Could not connect to server');
// Connect to database
if(!mysql_select_db(DB_DB, $Db)) {
	die('Could not select database');
}
?>