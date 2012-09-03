<?php
/******************************************************
* Programmer: Ben Lobaugh
* File: Form.class.php
* Site: ben.lobaugh.net
* Version: 2.0
* Creation Date: 05-31-2007
* Modified Date: 05-02-2008
* Description: Holds all the elements of the form and
*	allows you to do cool things with it such as
*	validate all the elements
* Dependencies: MyArray
******************************************************/


class Form implements Iterator {

	/**
	* Hold all the FormElement objects
	*
	* var MyArray
	**/
	public $mFormElements;

	/**
	* Holds all the errors from the current form as an array
	*
	* @var Array
	**/
	private $mErrors;

	/**
	 * Name of the form
	 *
	 * @var String
	 **/
	 private $mName;

	 /**
	  * Action of form
	  *
	  * @var String
	  **/
	  private $mAction;

	  /**
	   * Method of posting the form
	   *
	   * @var String
	   **/
	   private $mMethod;

	function Form($Name, $Action, $Method) {
                $this->mName = $Name;
                $this->mAction = $Action;
                $this->mMethod = $Method;

		$this->mFormElements = new MyArray();
		$this->mErrors = array();
	}

	/**
	*  Add a FormElement to the Form
	*
	* @param FormElement $FormElement - And object of the type FormElement
	**/
	function Add($FormElement) {
		$this->mFormElements->add($FormElement->getName(), $FormElement);

		/**
		* In the future we may want to do some checking to make sure this worked
		* to get that workings simply get the size of $this->mFormElements before
		* you add the new element and then again afterwards. If the size increased
		* by one(1) then we know it worked.
		**/
	}

	/**
	* Retrieve a single element
	*
	* @param String - Name of element
	**/
	function Get($ElementName) {
		return $this->mFormElements->get($ElementName);
	}

	/**
	* Loop through all of the form elements and make sure they all have valid values
	*
	* Any errors about invalid elements can be retrieved with $this->getErrors
	*
	* @return Boolean
	**/
	function Validate() {
		$ret = TRUE;

		for($this->mFormElements->rewind(); $this->mFormElements->valid(); $this->mFormElements->next()) {
			$c = $this->mFormElements->current(); // Individual form element

			if(!$c->validate()) {
				$this->mErrors[] = $c->mErrorMessage;
				$ret = FALSE;
			}
		}
		return $ret;
	}

	function SetValue($ElementName, $Value) {

		$e = &$this->mFormElements->get($ElementName);

		if(is_object($e)) {
			/**
			* If you do not do this and the element does not exist the
			* entire world will explode!
			**/
			$e->setValue($Value);

			if($e instanceof CheckBox && $Value == '1') {
				$e->selected();
			}
		}

	}

	function GetValue($ElementName) {
		$ret = '';
		$e = &$this->mFormElements->get($ElementName);

		if(is_object($e)) {
			$ret = $e->getValue();
		}
		return $ret;
	}

	function SetAttribute($ElementName, $Attribute, $Value) {

		$e = &$this->mFormElements->get($ElementName);

		if(is_object($e)) {
			/**
			* If you do not do this and the element does not exist the
			* entire world will explode!
			**/
			$e->setAttribute($Attribute, $Value);
		}

	}

	/**
	 * Returns the name of the form
	 *
	 * @return String
	 **/
	function GetName() {
	        return $this->mName;
	}

	function GetMethod() {
	        return $this->mMethod;
	}

	function GetAction() {
	        return $this->mAction;
	}

	function GetElement($ElementName) {
		$ret = FALSE;
		$e = $this->mFormElements->get($ElementName);

		if(is_object($e)) {
			$ret = $e;
		}
		return $ret;
	}

	/**
	* Set a whole bunch of element values at once. This will probably
	* usually be done with an iterator
	*
	* You may pass in any object that has the following methods:
	* getValue - create is check first. If it does not exist getValue is checked
	* getName
	*
	* If the object is an iterator is must contain all the standard PHP5
	* iterator methods:
	* rewind
	* valid
	* next
	* current
	* key
	* AND
	* size
	**/
	function SetValues($Values) {

		if(is_a($Values, 'Iterator')) {
			/**
			* This is an iterator object that we can loop through and set
			* multiple elements from.
			*
			* Remember that the objects inside the iterator MUST contain
			* the methods listed above.
			**/
			if($Values->size() > 0) {
				$Values->rewind();
				do {
					$this->setValues($Values->current());
				} while ($Values->next() !== FALSE);
			}

		} else if(is_array($Values)) {
			/**
			* This is an array.
			* Toss this into a MyArray to loop through it easy
			**/
			$Iterator = new MyArray();
			$Iterator->populate($Values);
			/**
			* Make sure something is in the Iterator
			**/

			if($Iterator->size() > 0) {
				$Iterator->rewind();
				do {
					$this->setValue($Iterator->key(), $Iterator->get($Iterator->key()));
				} while ($Iterator->next() !== FALSE);
			}

		} else if(is_object($Values)) {
			/**
			* This is an object that we can get one template item from
			**/
			if(method_exists($value, 'create')) {
				$this->mTags[$this->mTagOpen . $value->getName() . $this->mTagClose] = $value->create();
			} else if(method_exists($value, 'getName')) {
				$this->mTags[$this->mTagOpen . $value->getName() . $this->mTagClose] = $value->getName();
			}

		}


	}




	function GetErrors() {
		return $this->mErrors;
	}

	function ToString() {
		require_once(CORE_CLASSES . 'dBug.php');
		new dBug($this);
	}

	//
	// **** The following methods allow this class to act as an iterator ****
	//

	public function Rewind(){
		$this->mFormElements->rewind();
	}

	public function Next() {
		return $this->mFormElements->next();
	}

	public function Previous() {
		return $this->mFormElements->previous();
	}

	public function Current() {
		return $this->mFormElements->current();
	}

	public function Valid() {
		return $this->mFormElements->valid();
	}

	public function Key() {
		return $this->mFormElements->key();
	}

	public function Size() {
		return $this->mFormElements->size();
	}

} // end class

?>
