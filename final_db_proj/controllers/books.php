<?php

$Tpl->Prepend('tplTitle', 'Books - Inventory -');

$Tpl->Set('tplPage', 'Books - Inventory');



// Find Groups
$query = "SELECT * FROM `products` WHERE isbn<>''";

$result = $Db->query($query);
$data = array();

while($r = $result->fetch_assoc()) {
        $data[] = $r;
}
$Tpl->Set('books', $data);

// Setup Submenu
inventory_submenu();


// Display Page
$Tpl->display('inventory_books.tpl');
