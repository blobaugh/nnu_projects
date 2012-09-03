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
	global $Reg; // Registry from Bootstrap.php

	$location = find_file(ucfirst($class_name) . '.class.php', 'lib/');
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
?>