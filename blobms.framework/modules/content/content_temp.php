<?php
// Temp file till module system is built


function module_content_get_body($title) {
        global $Db;
        $title = $Db->EscapeString($title);
        $query = "SELECT Body FROM `Content` WHERE `Title`='$title'";

        $result = $Db->Query($query);
        $result = $result->fetch_assoc();
        return $result['Body'];
}
