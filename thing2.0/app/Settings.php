<?php
/*
 * User editable config options
 *
 * $Reg is a global variable containing the site registry
 */



/*
 * If your project is not in the root of your directory
 * structure you will want to set the location here.
 * This setting MUST be correct for your site to run
 * correctly.
 *
 * Default: $RrojLocation = '';

$ProjLocation = '';
*/


/*
 * Database Connection Settings
 *
 * At current BlobMS only supports MySQL
 *
 * There are no default settings for a database
 * connection, so if you are using a database you
 * must supply your connection information. If you
 * do not know this information please contact your
 * server administrator.
 *
 * An attempt at fake load balancing has been made.
 * If you have a busy, high traffic, site it may
 * benefit you to speak with your server administrator
 * to ascertain whether enabling this will help you or
 * not. The 'load balancing' is accomplished by creating
 * multiple database connections and rotating through
 * them each time a request is made. Enabling this is
 * trivial, simply create a comma(,) seperated list of
 * server addresses in db_location and a new connection
 * will be created to each one. Ensure that you have a
 * proper MySQL cluster setup before attempting this.
 * Place the master node in front of the others. This
 * node will be the node all writes are sent to.
 *
 * Description:
 *      db_user - User you will connect to the database with.
 *      db_password - Password to connect with
 *      db_location - Address to the server hosting the database (usually localhost)
 *      db_name - Name of the database to connect to
 */
$Reg->Set('db_user', 'root');
$Reg->Set('db_password', '');
$Reg->Set('db_location', 'localhost');
$Reg->Set('db_name', 'blobms');

// URI set for use in templates
$Reg->Set('http_link', $_SERVER['SERVER_NAME']); // Probably adequete

// Default Controller
$Reg->Set('default_controller', 'home');

// Error Pages
$Reg->Set('error_404', '404');

/***********************************************************
 **** THE FOLLOWING SHOULD ONLY BE EDITED BY DEVELOPERS ****
 *
 * Below this point are advanced options provided to the
 * developers for more power and flexibility in defining
 * the site. The settings usually will not need to be
 * changed and generally should be left alone. If you
 * feel compelled to change a setting please make sure
 * you understand what you are doing or you risk loosing
 * functionality on your website.
 ***********************************************************/
// This check is provided to prevent warnings
$ProjLocation = (isset($ProjLocation)) ? $ProjLocation : '';

/*
 * I find it convenient to develop on my personal machine
 * before uploading. Some settings are location specific
 * however, so I set them up here. If you are developing
 * on your maching it may be productive to set this
 * section up for your machine.
 *
 * This section may not have much documentation as the
 * developer is expected to know what needs to be set
 * here on a per site basis
 */
if (preg_match("/localhost/", $_SERVER['SERVER_NAME'])) {
	// On Ben's dev box
	$DevLocation = 'personal/thing2.0/';

        $Reg->Set('site_mode', 'debug');

	$Reg->Set('http_link', "http://localhost/$DevLocation");
	//$Reg->Set('db_location', "localhost");


	$Reg->Set('smarty_debugging', false); // Pop up window
}



/* File System Paths
 *
 * In order for your site to function properly it must
 * be able to find the files it needs access to. In general
 * the defaults are perfect, however if you have a custom
 * need set it here. Be careful changing these setting or you
 * may render your site inoperable
 */
// Path of file system root
$Reg->Set('doc_root', find_doc_root()); // Default is usually correct. Only change if your site is in a subdirectory
// Location of app folder in file system
$Reg->Set('path_app', $Reg->Get('doc_root') . 'app/');
// Location of core folder in file system
$Reg->Set('path_core', $Reg->Get('doc_root') . 'core/');
// Where the template stores it's cache
$Reg->Set('path_cache', 'cache/');
// Where the templates are stored
$Reg->Set('path_views', $Reg->Get('path_app') . 'views/');
// Where the controllers are stored
$Reg->Set('path_controllers', $Reg->Get('path_app') . 'controllers/');

/* URI Paths
 *
 * These are provided as full paths to help ease the job of template creators
 */
$Reg->Set('http_images', $Reg->Get('http_link') . 'app/images/');
$Reg->Set('http_css', $Reg->Get('http_link') . 'app/css/');
$Reg->Set('http_js', $Reg->Get('http_link') . 'app/js/');
$Reg->Set('http_uploads', $Reg->Get('http_link') . 'app/uploads/');
?>
