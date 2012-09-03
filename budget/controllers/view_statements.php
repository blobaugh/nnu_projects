<?php

$Tpl->Prepend('tplTitle', 'View Statements - ');

// Do we need to add a new income statement?
if(isset($_POST['add_income'])) {

        // Insert the income into the income table
	$query = "INSERT INTO `budget_income` SET
		BudgetId='{$_POST['BudgetId']}',
		`From`='{$_POST['From']}',
		Amount='{$_POST['Amount']}',
		Comment='{$_POST['Comment']}',
		Modified=NOW(),
		Created=NOW()";
		
	$Db->query($query);
	$income_id = $Db->insert_id;
	
	// Create all the fields needed in the statement table
	// Get Fields
        $query = "SELECT * FROM budget_fields WHERE BudgetId='{$_POST['BudgetId']}'";
        $result = $Db->query($query);

        // Kinda a crappy way to do this, but I don't really care. It's a simplistic system
        $fields = array();
        while($r = $result->fetch_assoc()) {
                $query = "INSERT INTO `budget_statement` SET
                                BudgetId='{$_POST['BudgetId']}',
                                BudgetFieldId='{$r['BudgetFieldId']}',
                                IncomeId='$income_id',
                                Title='{$r['Title']}',
                                Dollars='{$r['Dollars']}',
                                Percent='{$r['Percent']}',
                                Comment='{$r['Comment']}',
                                Modified=NOW(),
                                Created=NOW()";
                  $Db->query($query);
                
        }
        
	
	//header("Location: view_statement/?id=" . $income_id);
} else if(isset($_GET['delete']) && is_numeric($_GET['delete'])) {
        // Remove income from table
        $query = "DELETE FROM `budget_income` WHERE IncomeId='{$_GET['delete']}'";
        $Db->query($query);
        
        // Remove all fields from this income
        $query = "DELETE FROM `budget_statement` WHERE IncomeId='{$_GET['delete']}'";
        $Db->query($query);
}


$temp = budget_menu();
$Tpl->assign('tplBudgetMenu', $temp);

$query = "SELECT * FROM budget_income";

$result = $Db->query($query);

$statements = array();
while($r = $result->fetch_assoc()) {
	$statements[] = $r;
}
$Tpl->assign('tplStatements', $statements);

$Tpl->display('view_statements.tpl');
