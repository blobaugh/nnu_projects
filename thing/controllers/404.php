<?php

$Tpl->Prepend('tplTitle', 'Home -');

$Tpl->Set('tplPage', 'Page Not Found');

default_submenu();
$Tpl->display('404.tpl');
