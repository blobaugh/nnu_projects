<?php

function module_menu_get_menu() {
        global $Db;

        $query = "SELECT * FROM `Menu` ORDER BY `Order`";

        $result = $Db->Query($query);

        $arr = array();
        while($r = $result->fetch_assoc()) {
                $arr[] = $r;
        }

        return $arr;
}
