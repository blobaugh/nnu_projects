<?php

/*
 * Layout stuff from the db
 */
 $Tpl->Set('slogan', module_content_get_body('slogan'));
 $Tpl->Set('menu', module_menu_get_menu());


/*
 * ****** NOTE *******
 *
 * The following functions should be left in here.
 * They can be tweaked as needed, but should not need it
 */



/**
 * Pulls the settings out of the Settings table for use in the template
 **/
 settings_for_template();
 function settings_for_template() {
        global $Db, $Tpl;

        $query = "SELECT Name, Value FROM `Settings`";

        $result = $Db->Query($query);

        $arr = array();
        while($r = $result->fetch_assoc()) {
                $arr[str_replace(' ', '', $r['Name'])] = $r['Value'];
        }

        $Tpl->Set('tplSettings', $arr);
}
