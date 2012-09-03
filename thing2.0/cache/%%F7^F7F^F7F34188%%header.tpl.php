<?php /* Smarty version 2.6.21, created on 2009-05-26 06:50:09
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->_tpl_vars['tplTitle']; ?>
 Thing</title>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <link href="<?php echo $this->_tpl_vars['http_css']; ?>
site.css" rel="stylesheet" type="text/css" />

        <!-- Modular Head Items -->
        <?php echo $this->_tpl_vars['tplHead']; ?>

</head>

<body>

<div id="header">
	<ul id="menu">
		<li><a href="<?php echo $this->_tpl_vars['http_link']; ?>
home" title="Home">Home</a></li>
		<li><a href="<?php echo $this->_tpl_vars['http_link']; ?>
finances" title="Money management, budgeting, future purchase targets">Finances</a></li>
		<li><a href="<?php echo $this->_tpl_vars['http_link']; ?>
inventory" title="View/Maintain personal inventory and locations">Inventory</a></li>
		<li><a href="<?php echo $this->_tpl_vars['http_link']; ?>
bus" title="Projects for my 1965 VW Bus">1965 VW Bus</a></li>
		<li><a href="<?php echo $this->_tpl_vars['http_link']; ?>
memos" title="Random tidbits I want to remember">Memos</a></li>
		<li><a href="<?php echo $this->_tpl_vars['http_link']; ?>
projects" title="Various hairbrained schemes">Projects</a></li>
		<li><a href="<?php echo $this->_tpl_vars['http_link']; ?>
passwords" title="Shhh! These are my super secret passwords!">Passwords</a></li>
	</ul>
	<form id="search" method="get" action="<?php echo $this->_tpl_vars['http_link']; ?>
search">
		<fieldset>
		<input name="search" type="text" id="input1" />
		<input name="input2" type="submit" id="input2" value="Search" />
		</fieldset>
	</form>
</div>
<div id="content">
	<div id="colOne">
		<div id="logo">
			<h1><a href="<?php echo $this->_tpl_vars['http_link']; ?>
home">Thing</a></h1>
			<h2>By Ben Lobaugh</h2>
		</div>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "side_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<div id="colTwo">
		<h2><?php echo $this->_tpl_vars['tplPage']; ?>
</h2>