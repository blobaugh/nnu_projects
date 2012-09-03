<?php

$Tpl->Prepend('tplTitle', 'View Statement - ');

// Get Income
$query = "SELECT * FROM budget_income WHERE IncomeId='{$_GET['id']}'";
$result = $Db->query($query);
$income = $result->fetch_assoc();
$Tpl->assign('tplIncome', $income);


// Get Fields
$query = "SELECT * FROM budget_statement WHERE IncomeId='{$_GET['id']}'";
$result = $Db->query($query);

$remaining = $income['Amount'];

$fields = array();
while($r = $result->fetch_assoc()) {
	$temp = round($r['Percent'] * pow(10, -2) * $income['Amount']);
	
	
	$r['Percent'] = $r['Percent'] . ' ($' . $temp . ')';
	$r['Amount'] = $temp + $r['Dollars'];
	$r['Remaining'] = $remaining - $r['Amount'];
	$fields[] = $r;
	
	$remaining = $r['Remaining'];
}

$Tpl->assign('tplRemaining', $remaining);

$Tpl->assign('tplFields', $fields);

$Tpl->display('view_statement.tpl');
