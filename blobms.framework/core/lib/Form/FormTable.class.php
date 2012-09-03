<?php
/******************************************************
* Programmer: Ben Lobaugh
* File: FormTable.class.php
* Site: ben.lobaugh.net
* Version: 2.0
* Creation Date: 07-06-2009
* Modified Date: 07-06-2009
* Description: Creates an HTML two column table from the
*       given Form object
*
*
* ToDo: Expand the functionality to allow the passing
*       in of objects to manipulate how the table looks
******************************************************/


class FormTable {

        /**
         * Hold the form object that will be made
         * into a table
         *
         * @var Form
         **/
	private $mForm;

	/**
	 * Constructor
	 *
         * @param Form $Form
         **/
	public function FormTable($Form) {
	        $this->mForm = $Form;
	}

	public function Create() {
	        $s = '<form name="' . $this->mForm->GetName() . '" action="' . $this->mForm->GetAction() . '" method="' . $this->mForm->GetMethod() . '">';
	        $s .= "\n" . '<table border="0" class="form_' . $this->mForm->GetName() . '">';

                for($this->mForm->Rewind(); $this->mForm->Valid(); $this->mForm->Next()) {
                    $s .= "\n<tr>";

                    $s .= "\n\t<td align=\"right\" valign=\"top\">&nbsp;<b>" . $this->mForm->Current()->GetCaption() . ":</b>";
                    if($this->mForm->Current()->GetExample() != '') $s .= "<br /><span style=\"font-size: 10px;\">E.G:" . $this->mForm->Current()->GetExample() . "</span>";
                    $s .= "</td>";

                    $s .= "\n\t<td valign=\"top\">" . $this->mForm->Current()->Create() . "</td>";

                    $s .= "\n</tr>";
                }

	        $s .= "\n</table>";


	        // These are a couple hidden elements to hopefully fool a bot
	        $s .= "\n<input type=\"hidden\" name=\"honey_one\" value=\"2\">";
	        $s .= "\n<input type=\"hidden\" name=\"honey_two\" value=\"3\">";
	        $s .= "\n<input type=\"hidden\" name=\"honey_three\" value=\"6\">";
	        $s .= "\n<input type=\"hidden\" name=\"honey_four\" value=\"\">";

	        $s .= "\n</form>";

	        return $s;
	}

	/**
	 * Returns the name of the Form
	 *
	 * @return String
	 **/
	 public function GetName() {
	        return $this->mForm->GetName();
	 }

} // end class

?>
