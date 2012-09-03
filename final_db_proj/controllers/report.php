<?php

$Tpl->Prepend('tplTitle', 'Reports -');

$Tpl->Set('tplPage', 'Reports');



// Setup Submenu
report_submenu();


// Display Page
$Tpl->display('reports_home.tpl');
