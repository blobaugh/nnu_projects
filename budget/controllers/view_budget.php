<?php

if(!isset($_GET['id'])) header("Location: view_budgets");

$Tpl->Prepend('tplTitle', 'View Budget - ');

// Do we need to add a new field?
if(isset($_POST['add_field'])) {
	$query = "INSERT INTO `budget_fields` SET
		BudgetId='{$_GET['id']}',
		Title='{$_POST['Title']}',
		Dollars='{$_POST['Dollars']}',
		Percent='{$_POST['Percent']}',
		Comment='{$_POST['Comment']}',
		Modified=NOW(),
		Created=NOW()";
		
	$Db->query($query);
}

$query = "SELECT * FROM budget WHERE BudgetId='{$_GET['id']}'";
$result = $Db->query($query);
$Tpl->assign('tplBudget', $result->fetch_assoc());


$query = "SELECT * FROM budget_fields WHERE BudgetId='{$_GET['id']}'";

$result = $Db->query($query);

$fields = array();
while($r = $result->fetch_assoc()) {
	$fields[] = $r;
}
$Tpl->assign('tplFields', $fields);

$Tpl->display('view_budget.tpl');
