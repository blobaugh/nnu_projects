<?php /* Smarty version 2.6.21, created on 2009-02-01 00:15:15
         compiled from add_income.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="">
	<table border="0" cellpadding="5">
		<tr>
			<td><b>Buget:</b></td>
			<td><?php echo $this->_tpl_vars['tplBudgetMenu']; ?>
</td>
			<td style="font-size:10px;"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/help.png"> Please choose a budget to apply this income to.</td>
		</tr>
		<tr>
			<td><b>From:</b></td>
			<td colspan="2"><input type="text" name="From"></td>
		</tr>
		<tr>
			<td><b>Amount:</b></td>
			<td><input type="text" name="Amount"></td>
			<td style="font-size:10px;"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/help.png"> Number on. No '$'</td>
		</tr>
		<tr>
			<td><b>Comment:</b></td>
			<td colspan="2"><input type="text" name="Comment"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="add_income" value="Add Income"></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>