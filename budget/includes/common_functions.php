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