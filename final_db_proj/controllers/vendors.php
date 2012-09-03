<?php

$Tpl->Prepend('tplTitle', 'Vendors -');

$Tpl->Set('tplPage', 'Vendors');


// Find Departments
$query = "SELECT * FROM `vendors`";

$result = $Db->query($query);
$v = array();

while($r = $result->fetch_assoc()) {
        $v[] = $r;
}
$Tpl->Set('vendors', $v);



// Setup Submenu
vendor_submenu();


// Display Page
$Tpl->display('vendor_home.tpl');
