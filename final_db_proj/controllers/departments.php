<?php

$Tpl->Prepend('tplTitle', 'Departments -');

$Tpl->Set('tplPage', 'Departments');


// Find Departments
$query = "SELECT * FROM `departments`";

$result = $Db->query($query);
$depts = array();

while($r = $result->fetch_assoc()) {
        $depts[] = $r;
}
$Tpl->Set('depts', $depts);




// Find Stats
$query = "SELECT d.name, products.department_id, products.department_id AS dept,  COUNT(*) total_products,
          SUM(current_quantity) AS total_on_hand,
          (SELECT COUNT(*) FROM `products` WHERE (current_quantity - minimum_quantity) < 4 AND department_id=dept) AS low_on_hand,
          (SELECT SUM(current_quantity * price) FROM `products` WHERE department_id=dept) AS total_value
          FROM `products`
          INNER JOIN departments AS d ON d.department_id=products.department_id
          GROUP BY products.department_id";

$result = $Db->query($query);
$stats = array();

while($r = $result->fetch_assoc()) {
        $stats[] = $r;
}
$Tpl->Set('stats', $stats);


// Setup Submenu
department_submenu();


// Display Page
$Tpl->display('department_home.tpl');
