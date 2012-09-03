<?php
/*
 * This file contains functions that are useful in all areas of the cms.
 * As such it will _always_ be loaded
 */


/**
 * PHP Magic function.
 * When a class is instantiated($b = new TeddyBear())
 * without a required file, this method is automagically
 * called in an attempt to autoload the class file.
 * This function searches through the library and attempts
 * to find the file
 *
 * @param String $class_name
 **/
function __autoload($class_name) {

	$location = find_file(ucfirst($class_name) . '.class.php', '.');
//	echo "<br><b>Loading: $location</b><br>";
	//require_once($location);
}




/**
 * Find a file in a directory and return the path to that file
 *
 * @param String $file
 * @param String $dir
 * @return String
 **/
function find_file($file, $dir) {
	$dir = new DirectoryIterator($dir);

	foreach($dir AS $f) {

		if(!$f->isDot() && $f->isDir()) {
			// Looking at a directory. Descend into it
			find_file($file, $f->getPathname());
		} else if(!$f->isDot() && $file == $f->getFilename()){
			require_once ($f->getPathname());
		}

	}
}


/**
 * Find the document root on the local file system.
 * This is accomplished by looking at $_SERVER['DOCUMENT_ROOT'].
 * Starting from the last folder in the list and going backwards
 * until all the items in the base array are found in one directory
 *
 * @return String - Path of Document Root
 */
function find_doc_root() {
        // These items will be looked for in the current dir. If present it must be base
        $base_files = array('index.php', '.htaccess');
        $base_dirs = array('app', 'cache', 'core', 'modules');

        $path = $_SERVER['SCRIPT_FILENAME']; // Where the current script is executing
        while(strlen($path) > 0) { // As long as we have a path
                $count = 0; // If this is 6 the base is found
                if (is_dir($path)) { // If we are in a directory
                        foreach($base_dirs AS $dir) { // Look through the base dirs
                                if(is_dir("$path/$dir")) $count++; // Count up the dirs to make sure the exist
                        }

                        if($count == 4) { // If all the dirs aren't there don't bother looking at the files
                                foreach($base_files AS $file) {// Look through the base files
                                        if(is_file("$path/$file")) $count++;
                                }
                        }
                }

                if ($count == 6) { // Have all the files been found?
                        return $path;
                }


                $path = preg_replace("#/$#", '', $path);
                $path = preg_replace("#[^/]+$#", '', $path);
            }




        // If have reached this point something really bad happened!
        $error_message = "The site base could not be found. Please check your installation for the following files or contact your site administrator. The following files MUST be in the root of your site:
                          <ul>
                                <li>index.php</li>
                                <li>.htaccess</li>
                                <li>app - Directory</li>
                                <li>cache - Directory</li>
                                <li>core - Directory</li>
                                <li>modules - Directory</li>
                          </ul>
                          <br /><br />global_functions:find_doc_root";
        throw_fatal_error($error_message);
}


function site_sanity_check() {
        // Need to fill this in with some fancy schtuff

        // Make sure /app/uploads is writable
}


/**
 * Displays an error message then exits the running script
 */
function throw_fatal_error($error_message) {
        $error_message = "<html><body style=\"background-color:grey\"><center><div style=\"background-color:yellow; border: 1px solid red; width: 60%; text-align: left; padding: 5px\"><h2 style=\"color: red;\">Fatal Error!</h2><br />" . $error_message . "</div></center></body></html>";
        die($error_message);
}
?>
