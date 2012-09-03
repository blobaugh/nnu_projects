<?php

function budget_menu() {
	global $Db;

	$query = "SELECT * FROM `budget` WHERE Status='1'";

	$result = $Db->query($query);

	$ret = "<select name=\"BudgetId\">";
	while($r = $result->fetch_assoc()) {
		$ret .= '<option value="' . $r['BudgetId'] . '">' . $r['Title'] . ' - ' . $r['Comment'] . '</option>';
	}
	$ret .= "</select>";

	return $ret;
}

function default_submenu() {
        global $Tpl, $Reg;
        $submenu = array(array('title' => 'Navigation',
                               'items' => array(
                                          array('title' => 'Users', 'link' => $Reg->Get('http_link') . 'users'),
                                          array('title' => 'Inventory', 'link' => $Reg->Get('http_link') . 'inventory'),
                                          array('title' => 'Departments', 'link' => $Reg->Get('http_link') . 'departments'),
                                          array('title' => 'Purchases', 'link' => $Reg->Get('http_link') . 'purchases'),
                                          array('title' => 'Vendors', 'link' => $Reg->Get('http_link') . 'vendors'),
                                          array('title' => 'Reports', 'link' => $Reg->Get('http_link') . 'reports'),
                                          array('title' => 'Settings', 'link' => $Reg->Get('http_link') . 'settings')
                                          )
                        ));
        $Tpl->Set('tplSubMenu', $submenu);
}

function user_submenu() {
         global $Tpl, $Reg;
$submenu = array(array('title' => 'Navigation',
                        'items' => array(
                                        array('title' => 'Add User', 'link' => $Reg->Get('http_link') . 'user'),
                                        array('title' => 'Add Group', 'link' => $Reg->Get('http_link') . 'group'),
                                        )
                ));
$Tpl->Set('tplSubMenu', $submenu);
}

function settings_submenu() {
         global $Tpl, $Reg;
$submenu = array(array('title' => 'Navigation',
                        'items' => array(
                                        array('title' => 'Users', 'link' => $Reg->Get('http_link') . 'users')
                                        )
                ));
$Tpl->Set('tplSubMenu', $submenu);
}

function inventory_submenu() {
         global $Tpl, $Reg;
$submenu = array(array('title' => 'Navigation',
                        'items' => array(
                                        array('title' => 'Books', 'link' => $Reg->Get('http_link') . 'books'),
                                        array('title' => 'General Products', 'link' => $Reg->Get('http_link') . 'general_products'),
                                        array('title' => 'Low On Hand Stock', 'link' => $Reg->Get('http_link') . 'reports/low_on_hand_stock'),
                                        //array('title' => 'Product Orders', 'link' => $Reg->Get('http_link') . 'product_order')
                                        )
                ));
$Tpl->Set('tplSubMenu', $submenu);
}


function department_submenu() {
         global $Tpl, $Reg;
$submenu = array(array('title' => 'Navigation',
                        'items' => array(
                                        array('title' => 'Add Department', 'link' => $Reg->Get('http_link') . 'department'),
                                       // array('title' => 'Departmental Taxes', 'link' => $Reg->Get('http_link') . 'departmental_taxes')
                                        )
                ));
$Tpl->Set('tplSubMenu', $submenu);
}

function vendor_submenu() {
         global $Tpl, $Reg;
$submenu = array(array('title' => 'Navigation',
                        'items' => array(
                                        array('title' => 'Add Vendor', 'link' => $Reg->Get('http_link') . 'vendor'),
                                       // array('title' => 'Departmental Taxes', 'link' => $Reg->Get('http_link') . 'departmental_taxes')
                                        )
                ));
$Tpl->Set('tplSubMenu', $submenu);
}

function report_submenu() {
         global $Tpl, $Reg;
$submenu = array(array('title' => 'Navigation',
                        'items' => array(
                                        array('title' => 'Low On Hand Stock', 'link' => $Reg->Get('http_link') . 'reports/low_on_hand_stock'),
                                       // array('title' => 'New Products', 'link' => $Reg->Get('http_link') . 'reports/new_products'),
                                       // array('title' => 'Product Quantities by Department', 'link' => $Reg->Get('http_link') . 'reports/product_quantities_by_department'),
                                      //  array('title' => 'New Users', 'link' => $Reg->Get('http_link') . 'reports/new_users'),
                                       // array('title' => 'Departmental Taxes', 'link' => $Reg->Get('http_link') . 'departmental_taxes')
                                        )
                ));
$Tpl->Set('tplSubMenu', $submenu);
}

function group_menu() {
        global $Db;
        $s = "<select name='group_id'>";


        $query = "SELECT group_id, name FROM `groups`";
        $result = $Db->query($query);
        while($r = $result->fetch_assoc()) {
                $s .= "\n<option value=\"{$r['group_id']}\">{$r['name']}</option>";
        }
        $s .= "</select>";
        return $s;
}
