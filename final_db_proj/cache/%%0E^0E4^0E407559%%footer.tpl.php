<?php /* Smarty version 2.6.21, created on 2009-04-14 03:34:42
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'footer.tpl', 4, false),)), $this); ?>
</div>
</div>
<div id="footer">
	<p>Copyright (c) 2008-<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
 Ben Lobaugh & John Donaldson. All rights reserved. Design by <a href="http://ben.lobaugh.net/webdesign">Ben Lobaugh</a>.</p>
</div>
</body>
</html>