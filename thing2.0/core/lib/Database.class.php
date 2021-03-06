<?php
/** 
 * Mysqli database connector
 *
 * *********************************
 * TODO:
 *      Make Insert, Update, Delete, InsertUpdate, Etc check to make sure columns and tables exist first
 **/

/**
 * Singleton. Use Database->GetDatabase
 **/
class Database {

	/**
	* Holds whether an instance exists already or not.
	* 
	* @var Boolean
	*/
	private static $Exists = FALSE;
	
	/**
	 * The mysqli connection
	 *
	 * @var mysqli
	 */
	private $mConnection;

        /**
	 * @var Array - Holds strings of all queries made, both successful and not
	 */
	private $mQueries;
	/**
	 * @var Integer - Total number of queries executed
	 */
	private $mNumQueries;
	/**
	 * @var Integer - Total number of failed queries
	 */
	private $mNumFailedQueries;
	
        /*
         * Private constructor
         *
         * Creates connections
         */
        private function __construct() {
                global $Reg;
                
                $this->mConnection = new mysqli($Reg->Get('db_location'), $Reg->Get('db_user'), $Reg->Get('db_password'), $Reg->Get('db_name'));
                
                // Setup some defaults
                $this->mQueries = array();
                $this->mNumQueries = 0;
                $this->mNumFailedQueries = 0;
                $this->mErrors = array();
        }

        /**
         * Returns the database connection
         *
         * This object is a singleton so the returned object is always
         * the same connection
         **/
	public function GetDatabase() {
		
		if(!self::$Exists) {
			self::$Exists = new Database();
		}
		
		return self::$Exists;
	}
	
	public function Query($Sql) {
	        // Perform some statistics
	        $this->IncQueryCount();
	        $this->AddQuery($Sql);
	
	        return $this->mConnection->query($Sql);
	}
	
	
	/**
	 * Inserts a new row into the specified table
	 *
	 * The data passed in may be of mixed types.
	 * If a new type is desired simply add it.
	 *
	 * Example:
         * $Db->Insert('sometable', array('col1'=>'data', 'col2'=>'moredata', 'col3'=>'evenmoredata'));
         *
         * @param String $Table
         * @param Mixed $Data
         * @return Boolean - success
         **/
        public function Insert($Table, $Data) {
                $ret = false;
                $query = "INSERT INTO `$Table` SET ";
                
                /*
                 * Determine what type the data is and pass it to the appropriate handler
                 * The handler should return a string to be used in the query
                 */
                if(is_array($Data)) {
                        $query .= $this->BuildQueryFromArray($Data);
                } else {
                        // Could not figure out how to handle the data
                        $ret = false;
                }
                
                $query .= ", Modified=NOW(), Created=NOW()";
                $ret = $this->Query($query);
                
                return $ret;
        }
        
        /**
         * Updates a row, or rows, in the specified table
         * 
         * Data passed in may be of mixed types.
         * If a new type is desired simply add it.
         *
         * Example:
         * $Db->Update('anothertable', array('col1'=>'data', 'col2'=>'moredata', 'col3'=>'evenmoredata'), "this='that'");
         * $Db->Update('anothertable', array('col1'=>'data', 'col2'=>'moredata', 'col3'=>'evenmoredata'), array('this'=>'that'));
         *
         * @param String $Table
         * @param Mixed $Data
         * @param Mixed $Where
         * @return Boolean - success
         **/
         public function Update($Table, $Data, $Where) {
                $ret = false;
                $query = "UPDATE `$Table` SET ";
                
                /*
                 * Determine what type the data is and pass it to the appropriate handler
                 * The handler should return a string to be used in the query
                 */
                if(is_array($Data)) {
                        $query .= $this->BuildQueryFromArray($Data);
                } else {
                        // Could not figure out how to handle the data
                        $ret = false;
                }
                
                $query .= ", Modified=NOW() WHERE ";
                
                /*
                 * Determine what type the data is and pass it to the appropriate handler
                 * The handler should return a string to be used in the query
                 */
                if(is_array($Where)) {
                        $query .= $this->BuildQueryFromArray($Where);
                } else {
                        // Could not figure it out. Must be a string
                        $query .= $Where;
                }
                
                $ret = $this->Query($query);
                
                return $ret;
         }
         
         /**
          * Deletes a row, or rows, from the specified table
          *
          * NOTE: IF YOU DO NOT PASS A WHERE THE ENTIRE TABLE WILL BE ERASED!!!
          *
          * Example:
          * $Db->Delete('sometable', "this='that');
          * $Db->Delete('sometable', array('this'=>'that'));
          *
          * @param String $Table
          * @param Mixed $Where
          * @return Boolean - success
          **/
          public function Delete($Table, $Where) {
                $ret = false;
                $query = "DELETE FROM `$Table` ";
                
                /*
                 * Determine what type the data is and pass it to the appropriate handler
                 * The handler should return a string to be used in the query
                 */
                if(is_array($Where)) {
                        $query .= $this->BuildQueryFromArray($Where);
                } else {
                        // Must be a string
                        $query .= $Where;
                }
                
                $ret = $this->Query($query);
                
                return $ret;
          }
        
        /**
         * Given an array this function returns part of an sql query
         *
         * @param Array $Data
         * @return String
         **/
        private function BuildQueryFromArray($Data) {
                $a = array();
                if(!is_array($Data)) return $a; // Assure data is an array
                
                foreach($Data as $k => $v) {
                        $a[] = "$k='$v'";
                }
                $a = implode(',', $a);
                
                return $a;
        }
        
        
        /*********************************************************
        **** PUBLIC VERSIONS OF INTERNAL FUNCTIONS
        *********************************************************/
        
        /**
         * Displays all run queries
         **/
         public function ShowQueries() {
                new dBug($this->mQueries);
         }
        /*********************************************************
        **** INTERNAL DATABASE FUNCTIONS
        *********************************************************/
        
        /**
         * Increment total number of queries run
         */
        private function IncQueryCount() {
                $this->mNumQueries++;
        }
        
        /**
         * Add query to keep track of all queries run
         * If the query had an error mark in here
         *
         * @param String $Sql
         * @param Boolean $Error - default false
         */
         private function AddQuery($Sql, $Error = false) {
                $success = '<font color="green">';
                $failed = '<font color="red">';
                $close = '</font>';
                
                $s = ($Error)? $failed : $success;
                
                $s .= $Sql . $close;
                
                $this->mQueries[] = $s;
         }
        
} // end class
