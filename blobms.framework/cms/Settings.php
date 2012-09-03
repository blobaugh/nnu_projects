<?php
/*
 * Default settings for the CMS
 *
 * You should not be editing these if you are not a developer
 */
$Reg->Set('path_cms', $Reg->Get('doc_root') . "cms/");
$Reg->Set('cms_path_controllers', $Reg->Get('doc_root') . 'cms/controllers/');
$Reg->Set('cms_default_controller', "404");

$Tpl->SetTemplateDir($Reg->Get('path_cms') . 'views/');
