<?php

$Tpl->Prepend('tplTitle', 'Inventory -');

$Tpl->Set('tplPage', 'Inventory');


// Find Users
$query = "SELECT u.*, g.name AS `group`
          FROM `users` AS u
          LEFT JOIN `user_groups` AS ug ON u.user_id = ug.user_id
          LEFT JOIN `groups` AS g ON ug.group_id = g.group_id
          ORDER BY u.fname, u.lname";

$result = $Db->query($query);
$users = array();

while($r = $result->fetch_assoc()) {
        $users[] = $r;
}
$Tpl->Set('users', $users);


// Find Groups
$query = "SELECT g.name, g.description, COUNT(ug.user_id) AS num_members
          FROM groups AS g
          LEFT JOIN user_groups AS ug ON ug.group_id = g.group_id
          GROUP BY ug.group_id
          ORDER BY g.name";

$result = $Db->query($query);
$groups = array();

while($r = $result->fetch_assoc()) {
        $groups[] = $r;
}
$Tpl->Set('groups', $groups);

// Find Stats
$query = "SELECT COUNT(*) total_products,
          SUM(current_quantity) AS total_on_hand,
          (SELECT COUNT(*) FROM `products` WHERE (current_quantity - minimum_quantity) < 4) AS low_on_hand,
          (SELECT SUM(current_quantity * price) FROM `products`) AS total_value
          FROM `products`";

$result = $Db->query($query);

$Tpl->Set('stats', $result->fetch_assoc());

// Setup Submenu
inventory_submenu();


// Display Page
$Tpl->display('inventory_home.tpl');
