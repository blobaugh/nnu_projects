<?php

$Tpl->Prepend('tplTitle', 'Home -');

$Tpl->Set('tplPage', 'Welcome to Thing!');

default_submenu();


$Tpl->display('home.tpl');
