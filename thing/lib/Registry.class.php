<?php
/** 
 * This class acts like a registry to hold various config values
 **/

/**
 * Singleton. Use Registry->GetRegistry
 **/
class Registry {
	
	/**
	* Holds whether a registry exists already or not.
	* 
	* @var Boolean
	*/
	private static $Exists = FALSE;
	
	/**
	 * Holds the info
	 *
	 * @var Array
	 **/
	private $Registry; 
	
	/**
	 * Default constructor
	 *
	 * Sets up some normal defaults for the cms
	 **/
	private function __construct() {
		// Paths - PLEASE APPEND WITH /
		$this->Set('path_library', 'lib/');
		$this->Set('path_includes' , 'includes/');
		$this->Set('path_controllers', 'controllers/');
		$this->Set('path_modules', 'modules/');
		$this->Set('path_views', 'views/'); // Smarty needs this
		$this->Set('path_cache', 'cache/'); // Smarty needs this
		
		// Smarty Specific
		$this->Set('smarty_cache_enabled', true);
		$this->Set('smarty_cache_life', 3600); // 1 hour in seconds
		$this->Set('smarty_debugging', false);
		
		// Http links
		$this->Set('http_link', 'http://' . $_SERVER['SERVER_NAME'] . '/');
		$this->Set('http_images', 'images/');
		
		// Misc
		$this->Set('default_controller', 'home'); // Default controller
		
	}
	
	public function GetRegistry() {
		
		if(!self::$Exists) {
			self::$Exists = new Registry();
		}
		
		return self::$Exists;
	}
	
	public function Set($Var, $Value) {
		$this->Registry[$Var] = $Value;
	}
	
	public function Get($Var) {
		return $this->Registry[$Var];
	}
	
	public function GetLink($Link) {
		return $this->Registry['http_link'] . $this->Registry[$Link];
	}
	
	public function Remove($Var) {
	        unset($this->Registry[$Var]);
	}
} // end class
