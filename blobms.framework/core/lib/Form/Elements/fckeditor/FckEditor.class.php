<?php
/*
* Author: Ben Lobaugh
* Description: Just sets up some defaults and makes it a
* tad easier to use
*/
require_once('fckeditor.php');

class FckEditor {
	
	private $Editor;
	
	
	function __construct($Name) {
		$this->Editor = new FCKeditor($Name);
		$this->Editor->BasePath
	}
} // end class
?>