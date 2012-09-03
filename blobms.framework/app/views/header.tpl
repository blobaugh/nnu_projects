<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>{$tplSettings.SiteTitle}</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="{$tplSettings.SiteKeywords}" />
	<meta name="description" content="{$tplSettings.SiteDescription}" />
	<link rel="stylesheet" href="{$http_link}app/css/site.css" type="text/css" />

	<link rel="SHORTCUT ICON" href="{$http_link}app/images/favicon.ico" />

	<script language="JavaScript" type="text/javascript" src="{$http_link}app/js/site.js"></script>

</head>

<body>

<center>

<div class="outer_container">
<center>
<div class="inner_container">

<div class="header"></div>

<div class="menu">
        <table width="100%">
                <tr>
                        <td>{$slogan}</td>
                        <td align="right" valign="bottom">
                                {foreach from=$menu item=r}
                                        <a href="{$r.Link}">{$r.Title}</a>
                                {/foreach}
                        </td>
                </tr>
        </table>
</div>

{* I Know using tables is a lame way to do it, but it is the easiest for me so :-P *}

<table border="1" width="100%">
        <tr>
                <! - >
                <td width="175" valign="top">
                        <div class="left_column">{include file="left_column.tpl"}</div>
                </td>

                <td valign="top">
