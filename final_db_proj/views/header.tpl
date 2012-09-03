<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$tplTitle} Inventory</title>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <link href="{$http_link}css/site.css" rel="stylesheet" type="text/css" />

        <!-- Modular Head Items -->
        {$tplHead}
</head>

<body>

<div id="header">
	<ul id="menu">
		<li><a href="{$http_link}home" title="Home">Home</a></li>
		<li><a href="{$http_link}inventory" title="Manage Inventory">Inventory</a></li>
		<li><a href="{$http_link}departments" title="Manage Departments">Departments</a></li>
		<li><a href="{$http_link}purchases" title="View Purchases">Purchases</a></li>
		<li><a href="{$http_link}vendors" title="Manage Vendors">Vendors</a></li>
		<li><a href="{$http_link}report" title="Create Reports">Reports</a></li>
		<li><a href="{$http_link}settings" title="Shhh! These are my super secret passwords!">Settings</a></li>
	</ul>
	<form id="search" method="get" action="{$http_link}search">
		<fieldset>
		<input name="search" type="text" id="input1" />
		<input name="input2" type="submit" id="input2" value="Search" />
		</fieldset>
	</form>
</div>
<div id="content">
	<div id="colOne">
		<div id="logo">
			<h1><a href="{$http_link}home">Inventory</a></h1>
			<h2>By Ben Lobaugh <br />& John Donaldson</h2>
		</div>

		{include file="side_menu.tpl"}
	</div>
	<div id="colTwo">
		<h2>{$tplPage}</h2>
