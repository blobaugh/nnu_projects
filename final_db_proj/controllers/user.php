<?php

// Are we looking at a specific user? If go get their info
if($route[count($route) - 1] != 'user') {
        $query = "SELECT * FROM `users` WHERE email='{$route[count($route) - 1]}' LIMIT 1";
        $result = $Db->query($query);
        $user = $result->fetch_assoc();
        $Tpl->Set('user', $user);

        $Tpl->Prepend('tplTitle', 'Edit User ' . $user['fname'] . ' ' . $user['lname'] . '(' . $user['email'] . ') -');

$Tpl->Set('tplPage', 'Edit User ' . $user['fname'] . ' ' . $user['lname'] . '(' . $user['email'] . ')');
} else {
$Tpl->Prepend('tplTitle', 'Add User -');

$Tpl->Set('tplPage', 'Add User');
}


// Has the save button been clicked?
// ** NOTE: THIS CODE DOES __NO__ ERROR CHECKING!! **
if(isset($_POST['save_user'])) {

        // Check to see if the user exists. If so update everything. Else create new
        $f_user = $Db->Select('users', "email='{$_POST['email']}'");
        if(mysqli_num_rows($f_user) == 1) {
                // Edit User
                $f_user = $f_user->fetch_assoc();

                $Db->Update('users', $_POST, "email='{$_POST['email']}'");
                $Db->Update('user_groups', $_POST, "user_id='{$f_user['user_id']}'");
        } else {
                // New User
                $Db->Insert('users', $_POST);
                $_POST['user_id'] = mysqli_insert_id($Db->GetConnection());
                new dBug($_POST);
                $Db->Insert('user_groups', $_POST);
        }
        //$Db->ShowQueries();
        // Send back to users page
        header("Location: " . $Reg->Get('http_link') . 'users');
        exit();
}



// Build group menu
// ** NOTE: Group is no reselected on an edit **
$Tpl->Set('group_menu', group_menu());

// Setup Submenu
user_submenu();


// Display Page
$Tpl->display('user.tpl');
