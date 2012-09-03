<?php

$Tpl->Prepend('tplTitle', 'Home -');

$Tpl->Set('tplPage', 'Inventory Home');

default_submenu();
$Tpl->display('home.tpl');
