<?php

$Tpl->Prepend('tplTitle', 'View Budgets - ');

// Do we need to add a new budget? statement?
if(isset($_POST['add_budget'])) {
	$query = "INSERT INTO `budget` SET
		Title='{$_POST['Title']}',
		Comment='{$_POST['Comment']}',
		Modified=NOW(),
		Created=NOW()";
		
	$Db->query($query);
}

$query = "SELECT * FROM budget WHERE Status='1'";
$query2 = "SELECT * FROM budget WHERE Status='0'";

$result = $Db->query($query);
$active = array();
while($r = $result->fetch_assoc()) {
	$active[] = $r;
}
$Tpl->assign('tplActive', $active);

$result = $Db->query($query2);
$inactive = array();
while($r = $result->fetch_assoc()) {
	$inactive[] = $r;
}
$Tpl->assign('tplInctive', $inactive);

$Tpl->display('view_budgets.tpl');
