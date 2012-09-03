<?php
/******************************************************
* Programmer: Ben Lobaugh
* File: FileBox.class.php
* Site: ben.lobaugh.net
* Version: 1.0
* Creation Date: 05-12-2008
* Modified Date: 05-12-2008
* Description: Element that provides minimum functionality
*	and defines the minimum required methods in the child
*	classes
******************************************************/

require_once('FormElement.class.php');

class FileBox extends FormElement {

	/**
	* Holds the rule if this element is used by itself and not overridden
	*
	* @var String $mRule - Regex
	**/
	private $mRule;
	
	/**
	* Defines whether or not this textbox is required for a valid form
	*
	* @var Boolean
	**/
	private $mRequired;

	/**
	* Default constructor
	*
	* All of the legal attributes for a textbox must be listed in here
	* or the attributes will not be added when the element is displayed
	*
	* @param String $Name
	* @param Array $Attributes
	* @return TextBox
	**/
	function __construct($Name, $Required, $Rule = '', $ErrorMessage = '', $Attributes = array()) {
		$LegalAttributes = array(
			'disabled',
			'maxlength',
			'readonly',
			'size',
			'type'
			);
		
		$Attributes['type'] = 'file';
		$Attributes['name'] = $Name;
		$Attributes['class'] = 'textbox';
		
		$this->mRequired = $Required;
		$this->mRule = $Rule;
				
		parent::__construct($Attributes, $LegalAttributes, $ErrorMessage);
	}
	
	
	
	
	/**
	* Build the HTML string to setup the element
	*
	* Please check to make sure the keys in $this->mAttributes are legal for the element.
	* Use $this->getLegalAttributes() to find all the legal passed in attributes
	*
	* Return a HTML string of the element
	**/
	function create() {
		$LegalAttributes = $this->getLegalAttributes();
		
		$Html = '<input ';
		
		foreach($LegalAttributes AS $k => $v) {
			$Html .= "$k=\"$v\" ";
		}
		
		$Html .= '/>';
		
		return $Html;
	}
	
	/**
	* Place everything that is needed to validate here
	*
	* You will still want to override this method if you have a
	* textbox class that is specific to something. EG USTextBox
	*
	* Return TRUE or FALSE
	**/
	function validate() {
		$ret = TRUE;
		
		/**
		* If we do not want this field required we need to check here.
		* If there is any data in the field validate anyways
		**/
		
		if($this->mRequired || $this->getValue() != '') {
			if(!preg_match('/' . $this->mRule . '/', $this->getValue())) $ret = FALSE;
		}
		return $ret;
	}
	

	function toString() {
		require_once(getcwd() . "/dBug.php");
		new dBug($this);
	}
	

} // end class

?>