<?php

$Tpl->Prepend('tplTitle', 'Products - Inventory -');

$Tpl->Set('tplPage', 'Products - Inventory');



// Find Groups
$query = "SELECT * FROM `products` WHERE isbn IS NULL";

$result = $Db->query($query);
$data = array();
while($r = $result->fetch_assoc()) {
        $data[] = $r;
}

$Tpl->Set('products', $data);

// Setup Submenu
inventory_submenu();


// Display Page
$Tpl->display('inventory_products.tpl');
