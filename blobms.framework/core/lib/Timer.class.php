<?php
/**
 * Microtime php timer.
 **/

//number_format(abs(microtime() - $site_start_time), 4)
class Timer {

        /**
         * Holds the timer marks
         *
         * @var Array
         **/
         private $mMarks;

         /**
          * Number of decimals to show
          *
          * @var Integer
          **/
          private $mPrecision;


         public function __construct() {
                $this->Trigger('timer_startup');

                // Default precision of 4
                $this->SetPrecision(4);
         }


         /**
          * Create a named timing mark
          *
          * @param String $Name
          **/
          public function Trigger($Name) {
                $this->mMarks[$Name] = microtime();
          }

          /**
           * Alias to Trigger()
           **/
           public function Mark($Name) {
                $this->Trigger($Name);
           }

           /**
            * Returns a specific mark
            *
            * @param String $Name
            * @return String
            **/
            public function GetMark($Name) {
                return $this->mMarks[$Name];
            }

          /**
           * Finds the difference in time
           *
           * @param String $StartMark
           * @param String $EndMark - optional
           * @return String
           **/
           public function FindDiff($StartMark, $EndMark = NULL) {
                // If no end mark is specified assume it is now
                (!$EndMark) ? $EndMark = microtime() : $EndMark = $this->GetMark($EndMark);

                return number_format(abs($EndMark - $this->GetMark($StartMark)), $this->mPrecision);
           }

          /**
           * Set number of decimal points to view
           *
           * @param Integer $Int
           **/
          public function SetPrecision($Int) {
                $this->mPrecision = $Int;
          }

} // end class
