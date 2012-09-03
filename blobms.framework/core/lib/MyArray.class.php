<?php
/******************************************************
* Programmer: Ben Lobaugh
* File: Array.class.php
* Site: N/A
* Version: 1.0
* Creation Date: 04-08-2007
* Modified Date: 04-08-2007
* Description: New datatype that completely wraps
*	the standard php array datatype. Allows for
*	all the normal array usage, but with easier
*	access to manipulate an array. eg delete...
* Note: This object REQUIRES PHP5 minimum
* Note: This is my first attempt to create a datatype
*	if you find bugs in it please email them to
*	ben@lobaugh.net, and any fixes you do too :D
* ToDo: Add all the funtionality in comments below
******************************************************/


// insertAt - insert at a specific position
// setPos - set current position
// sort - from lowest to highest, note erases keys - sort
// changeCase - just cause its funny array_change_key_case
// diff - differences in arrays - diff
// merge - merges passed in array with internal, erases first common key - array_merge
// search - searches for value and returns the key - array_search
// shift - shift element off beginning of array - array_shift
// makeUnique - removes duplicate values and their keys - array_unique
class MyArray implements Iterator{

	/**
	* @var array - This is the primitive that everything is stored in
	**/
	var $arr;
	
	/**
	* Sets up the class
	*
	* @return Array
	**/
	function __construct() {}
	
	/**
	* Adds an element to the array
	*
	* @param $key mixed - When using an associative array this is the key, otherwise it is the value
	* @param $value mixed - Only used when using an associative array. Otherwise leave empty
	* @return boolean - Success
	**/
	function add($key, $value=NULL) {
		$ret = FALSE;
		$size = $this->size();
		if($value !== NULL) {
			$this->arr[$key] = $value;
		} else {
			$this->arr[] = $key;
		}
		$nsize = $this->size();
		($nsize > $size) ? $ret = TRUE : $ret = FALSE;
		
		return $ret;
	}
	
	/**
	* This is a prebuilt primitive array type
	**/
	function populate($array) {
		foreach($array AS $k => $v) {
			$this->add($k, $v);
		}
	}
	/**
	* Adds an element to the array
	*
	* @param $key mixed - When using an associative array this is the key, otherwise it is the value
	* @param $value mixed - Only used when using an associative array. Otherwise leave empty
	* @return boolean - Success
	**/
	function insert($key,$value=NULL) {
		return add($key, $value);
	}
	
	/**
	* Removes a specific position from the array
	*
	* @param $pos integer - Position of element to remove
	* @return boolean - Success
	**/
	function remove($pos) {
		$ret = FALSE;
		$size = $this->size();
		unset($this->arr[$pos]);
		$nsize = $this->size();
		($nsize < $size) ? $ret = TRUE : $ret = FALSE;
		
		return $ret;
	}

	/**
	* Gets the size of the array
	*
	* @return integer - Size of MyArray
	**/
	function Size() {
		return count($this->arr);
	}
	
	/**
	* Advances the internal pointer to the next element and returns that element's  value
	*
	* @return mixed - Value at next array position
	**/
	function next() {
		return next($this->arr);
	}
	
	/**
	* Moves internal pointer to the previous element and returns that element's value
	*
	* @return mixed - Value at previous array position
	**/
	function previous() {
		return prev($this->arr);
	}
	
	/**
	* Returns the current element in the array without advancing the internal pointer
	*
	* @return mixed - Value for current array position
	**/
	function current() {
		return current($this->arr);
	}
	
	/**
	* Moves the internal pointer to the first element and returns that elements value
	*
	* @return mixed - Value of first array position
	**/
	function rewind() {
		return reset($this->arr);
	}
	
	/**
	* Returns this current key
	*
	* @return Mixed - String or Integer
	**/
	function key() {
		return key($this->arr);
	}
	
	/**
	* Checks whether or not the current element
	* is a valid element of the array
	**/
	function valid() {
		$ret = TRUE;
		
		if($this->current() === FALSE) $ret = FALSE;
		return $ret;
	}
	
	/**
	* Moves the internal pointer to the end of the array and returns that elements value
	*
	* @return mixed - Value of last array position
	**/
	function end() {
		return end($this->arr);
	}
	
	/**
	* Searches through the array for an element with the value of $value
	* If $compare_type is true elements match only if they have the same datatype
	*
	* @return boolean - Exists or not
	**/
	function exists($value, $compare_type=TRUE) {
		return in_array($value, $this->arr, $compare_types);
	}
	
	/**
	* Reverses the entire array
	*
	* @return boolean - Success
	**/
	function reverse() {
		$ret = FALSE;
		$oarrs = $this->start();
		
		// Reverse the array
		$this->arr = array_reverse($this->arr);
		
		$narre = $this->end();
		//Make sure the array was reversed
		($oarrs == $narre) ? $ret = TRUE : $ret = FALSE;
		
		return $ret;
	}
	
	/**
	* Pulls the first element off the array and returns it
	*
	* @return mixed - Remove first element and return it
	**/
	function shift() {
		return array_shift($this->arr);
	}
	
	/**
	* Returns element at specific location
	*
	* @return mixed - Element at specific location
	**/
	function get($pos) {
		return (!empty($this->arr[$pos])) ? $this->arr[$pos] : '';
	}

		
} // end class MyArray

?>
