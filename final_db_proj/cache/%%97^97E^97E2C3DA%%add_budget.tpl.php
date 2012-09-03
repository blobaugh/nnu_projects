<?php /* Smarty version 2.6.21, created on 2009-02-01 00:15:25
         compiled from add_budget.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="">
	<table border="0" cellpadding="5">
		<tr>
			<td><b>Title:</b></td>
			<td colspan="2"><input type="text" name="Title"></td>
			<td style="font-size:10px;"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/help.png"> Name this budget will be referred to by.</td>
		</tr>
		<tr>
			<td><b>Comment:</b></td>
			<td colspan="2"><input type="text" name="Comment"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="add_budget" value="Add Budget"></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>