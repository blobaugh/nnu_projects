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
	}

	public function Set($Var, $Value) {
		$this->assign($Var, $Value);
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

	public function AddHead($Val) {
	        $this->Append('tplHead', "\n\t" . $Val);
	}

	public function Display($TemplateFile) {
	        parent::display($TemplateFile);
	}
} // end class
