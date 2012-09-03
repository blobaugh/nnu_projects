<?php

$Tpl->Prepend('tplTitle', 'Test Page - ');

//$Tpl->debugging = true;

$Tpl->Set('content', 'this is some content');

$Db->Insert('sometable', array('col1'=>'data', 'col2'=>'moredata', 'col3'=>'evenmoredata'));
$Db->Update('anothertable', array('col1'=>'data', 'col2'=>'moredata', 'col3'=>'evenmoredata'), array('this'=>'that'));
$Db->Delete('thistable', "this='otherthing'");
$Db->ShowQueries();
//die('test');
$Tpl->Display('content.tpl');
