<?php
/**
 * Programmer: Ben Lobaugh
 *
 * This is the templating system for the cms. This template system relies
 * heavily on the smarty engine. In fact, all the methods contained herein
 * use smarty in some way.
 *
 * PLEASE NOTE: There are many variables contained here that come from the Settings.php file
 **/
require_once("Smarty/Smarty.class.php");

class Template extends Smarty {

	public function __construct() {
		global $Reg; // Global registry object. Bootstrap.php
		parent::__construct();


		$this->cache_lifetime = 3600; // 1 hour in seconds

		$this->template_dir = $Reg->Get('path_views');
		$this->compile_dir  = $Reg->Get('path_cache');
		$this->cache_dir    = $Reg->Get('path_cache');

		// Default framework tags
		$this->assign('http_link', $Reg->Get('http_link'));
		$this->assign('http_images', $Reg->Get('http_images'));
		$this->assign('http_css', $Reg->Get('http_css'));
		$this->assign('http_js', $Reg->Get('http_js'));
		$this->assign('http_uploads', $Reg->Get('http_uploads'));

		// Require BlobMS Smarty plugins
		require_once $this->_get_plugin_filepath('function', 'html_form');
	}

        /**
         * Set the value of a template tag
         *
         * This function accepts many types of objects and must know how
         * to deal with them without blowing up.
         *
         * A generic object may be passed in that this method does not know
         * how to deal with as long as a Create, GetName methods are available to create
         * the html
         *
         * Handles Types:
         * Generic Object with GetName() and Create() methods
         * Form
         *
         * @param String $Var
         * @param Mixed $Value
         **/
	public function Set($Var, $Value) {
	        if($Value instanceof Iterator) {
	                /*
	                 * This is a Form. Form implements Iterator, so we
	                 * can loop through and on each element call this
	                 * method again while sending the FormElement along.
	                 */
	                 for($Value->rewind(); $Value->valid(); $Value->next()) {
	                        $this->Set('Object', $Value->current());
	                 }
	        } else if(is_object($Value)) {
	                /*
	                 * Generic object
	                 * Must have a GetName and Create method
	                 */
	                $this->Set($Value->GetName(), $Value->Create());
	        } else {
	                // Well, if nothing else it is probably a string!
        		$this->assign($Var, $Value);
                }
	}

	public function Append($Var, $Value) {
		$this->Set($Var, $this->Get($Var) . $Value);
	}

	public function Prepend($Var, $Value) {
		$this->Set($Var, $Value . $this->Get($Var));
	}

	public function Get($Var) {
		return $this->get_template_vars($Var);
	}

	public function SetCacheLife($Time) {
		$this->cache_lifetime = $Time;
	}

	public function DisableCache() {
		$this->caching = false;
	}

	public function EnableCache() {
		$this->caching = true;
	}

	public function EnableDebugging() {
	        $this->debugging = true;
	}

	public function AddHead($Val) {
	        $this->Append('tplHead', "\n\t" . $Val);
	}

	public function SetTemplateDir($Dir) {
	        $this->template_dir = $Dir;
	        echo 'setting dir to ' . $Dir;
	}

	public function Display($TemplateFile) {
	        global $Db, $Timer;
	        $this->assign('tplNumQueries', $Db->GetQueryCount());
	        $this->assign('tplBuildTime', $Timer->FindDiff('site_startup'));
	        error_reporting(0); // Turn off error reporting here or smarty barfs up warnings
	        echo $TemplateFile;
	        parent::display($TemplateFile);
	}
} // end class
