<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$tplTitle} Thing</title>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <link href="{$http_css}site.css" rel="stylesheet" type="text/css" />

        <!-- Modular Head Items -->
        {$tplHead}
</head>

<body>

<div id="header">
	<ul id="menu">
		<li><a href="{$http_link}home" title="Home">Home</a></li>
		<li><a href="{$http_link}finances" title="Money management, budgeting, future purchase targets">Finances</a></li>
		<li><a href="{$http_link}inventory" title="View/Maintain personal inventory and locations">Inventory</a></li>
		<li><a href="{$http_link}bus" title="Projects for my 1965 VW Bus">1965 VW Bus</a></li>
		<li><a href="{$http_link}memos" title="Random tidbits I want to remember">Memos</a></li>
		<li><a href="{$http_link}projects" title="Various hairbrained schemes">Projects</a></li>
		<li><a href="{$http_link}passwords" title="Shhh! These are my super secret passwords!">Passwords</a></li>
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
			<h1><a href="{$http_link}home">Thing</a></h1>
			<h2>By Ben Lobaugh</h2>
		</div>

		{include file="side_menu.tpl"}
	</div>
	<div id="colTwo">
		<h2>{$tplPage}</h2>
