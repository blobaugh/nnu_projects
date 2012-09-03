<?php
/******************************************************
* Programmer: Ben Lobaugh
* File: FormElement.class.php
* Site: ben.lobaugh.net
* Version: 1.5
* Creation Date: 05-02-2008
* Modified Date: 07-07-2009
* Description: Element that provides minimum functionality
*	and defines the minimum required methods in the child
*	classes
******************************************************/

class FormElement {
	
	/**
	* Attributes of the element
	*
	* @var Array - Associative array of valid HTML attributes
	**/
	public $mAttributes;
	
	/**
	* Holds a list of legal attributes for the current element
	*
	* var Array
	**/
	private $mLegalAttributes;
	
	/**
	* Holds the default error message. Override this in the 
	* child class
	*
	* @var String
	**/
	protected $mDefaultErrorMessage;
	
	/**
	 * Caption to display by the element
	 *
	 * @var String
	 **/
	 protected $mCaption;
	 
	 /**
	  * Example message to display by the element
	  *
	  * @var String
	  **/
	  protected $mExample;
	
	function FormElement($Attributes, $LegalAttributes, $ErrorMessage) {
		$this->mAttributes = $Attributes;
		
		/**
		* These attributes are standard
		**/
		$StandardAttributes = array(
			'name', 'value', 'id', 'class', 'title', 'style', 'dir', 'lang', 'xml:lang',	'tabindex', 'accesskey', 'onfocus', 'onblur',	'onselect', 'onchange', 'onclick', 'ondblclick', 'onmousedown', 'onmouseup', 'onmouseover', 'onmousemove', 'onmouseout', 'onkeypress', 'onkeydown', 'onkeyup');
			
		/**
		* The arrays $StandardAttributes and $LegalAttributes need to be
		* merged into one array, and that array needs to be flipped so the
		* values become the keys. When looking for legal attributes the keys
		* are tested and this is the easiest way
		**/
		$this->mLegalAttributes = array_flip(array_merge($StandardAttributes, $LegalAttributes));
		
		
		/**
		* This error message shows to the user if validation fails
		**/
		$this->mErrorMessage = $ErrorMessage;
	}
	
	/**
	* Display the form element.
	*
	* This either sends back the element string (Default) or
	* echoes the element right away
	**/
	function Display($Echo = FALSE) {
		$ret = $this->create();
		
		if($Echo) {
			echo $ret;
			$ret = TRUE;
		} 
		
		return $ret;
	}
	
	/**
	* Set the value for the form element.
	*
	* NOTE: This must be done BEFORE printing the element on the page
	* or it will screw with the users mind. The element will validate 
	* of some strange values they have no idea about
	*
	* @param Mixed $Value - Value for this element
	**/
	function SetValue($Value) {
		$this->mAttributes['value'] = $Value;
	}
	
	
	/**
	* Get the current value for this element
	*
	* @return Mixed
	**/
	function GetValue() {
		return (isset($this->mAttributes['value']))? $this->mAttributes['value'] : '';
	}
	
	function SetAttribute($Attribute, $Value) {
		$this->mAttributes[$Attribute] = $Value;
	}
	
	function GetName() {
		return $this->mAttributes['name'];
	}
	
	/**
	* Will find all the legal attributes that have 
	* been passed in as compared by the legal attribute
	* list
	**/
	function GetLegalAttributes() {
		return array_intersect_key($this->mAttributes, $this->mLegalAttributes);
	}
	
	
	/**
	* Show the error message if the field did not validate.
	* If there is no message make one.
	**/
	function GetErrorMessage() {
		if($this->mErrorMessage != '') {
			$ret = $this->getName() . ' is not valid.';
		} else { 
			$ret = $this->mErrorMessage();
		}
		return $ret;
	}
	
	/**
	 * Set the caption text to be displayed by the element
	 *
	 * @param String $Caption
	 **/
	 public function SetCaption($Caption) {
	        $this->mCaption = $Caption;
	 }
	 
	 /**
	  * Get the caption
	  *
	  * @return String
	  **/
	  public function GetCaption() {
	        return $this->mCaption;
	  }
	  
	  /**
	   * Set the example text
	   *
	   * @param String $Example
	   **/
	   public function SetExample($Example) {
	        $this->mExample = $Example;
	   }
	   
	   /**
	    * Get the example text
	    *
	    * @return String
	    **/
	    public function GetExample() {
	        return $this->mExample;
	    } 
	
	
	// ********** THE FOLLOWING METHODS MUST BE OVERRIDDING BY THE CHILD CLASS ************ //
	
	/**
	* Build the HTML string to setup the element
	*
	* Please check to make sure the keys in $this->mAttributes are legal for the element.
	* Use $this->getLegalAttributes() to find all the legal passed in attributes
	*
	* Return a HTML string of the element
	**/
	function Create() {
		echo 'You must override this method in your child class Form.create';
	}
	
	/**
	* Place everything that is needed to validate here
	*
	* Return TRUE or FALSE
	**/
	function Validate() {
		echo 'You must override this method in your child class Form.validate';
	}

} // end class
?>
