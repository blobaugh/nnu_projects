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
	private function __construct() {}

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

	public function GetHttpLink($Link) {
		return $this->Registry['http_link'] . $this->Registry[$Link];
	}

	public function Remove($Var) {
	        unset($this->Registry[$Var]);
	}

	public function ToString() {
	        ksort($this->Registry);
	        new dBug(($this->Registry));
	}
} // end class
