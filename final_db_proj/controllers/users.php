<?php

$Tpl->Prepend('tplTitle', 'Users -');

$Tpl->Set('tplPage', 'Users');


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

// Setup Submenu
user_submenu();


// Display Page
$Tpl->display('users_home.tpl');
