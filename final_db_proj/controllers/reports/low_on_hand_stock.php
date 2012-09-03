<?php

$Tpl->Prepend('tplTitle', 'Low on hand stock - Reports -');

$Tpl->Set('tplPage', 'Low On Hand Stock - Reports');



// Find Groups
$query = "SELECT * FROM `products` WHERE (current_quantity - minimum_quantity) < 4";

$result = $Db->query($query);
$data = array();
while($r = $result->fetch_assoc()) {
        $data[] = $r;
}

$Tpl->Set('products', $data);

// Setup Submenu
report_submenu();


// Display Page
$Tpl->display('inventory_products.tpl');
