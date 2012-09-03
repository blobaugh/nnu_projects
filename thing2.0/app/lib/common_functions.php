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
                                          array('title' => 'Finances', 'link' => $Reg->Get('http_link') . 'finances'),
                                          array('title' => 'Inventory', 'link' => $Reg->Get('http_link') . 'inventory'),
                                          array('title' => '1965 VW Bus', 'link' => $Reg->Get('http_link') . 'bus'),
                                          array('title' => 'Memos', 'link' => $Reg->Get('http_link') . 'memos'),
                                          array('title' => 'Projects', 'link' => $Reg->Get('http_link') . 'projects'),
                                          array('title' => 'Passwords', 'link' => $Reg->Get('http_link') . 'passwords')
                                          )
                        ));
        $Tpl->Set('tplSubMenu', $submenu);
}
