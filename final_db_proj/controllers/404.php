<?php

$Tpl->Prepend('tplTitle', '404 Page Not Found -');

$Tpl->Set('tplPage', 'Page Not Found');

srand(time());
$random = (rand()%24+1);
$Tpl->Set('404', $random);

default_submenu();
$Tpl->display('404.tpl');
