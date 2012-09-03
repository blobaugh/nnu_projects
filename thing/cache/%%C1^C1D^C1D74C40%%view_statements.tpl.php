<?php /* Smarty version 2.6.21, created on 2009-02-22 02:52:00
         compiled from view_statements.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<b>Add Income</b>
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

<hr>

<ul>
	<?php $_from = $this->_tpl_vars['tplStatements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
		<li><a href="?delete=<?php echo $this->_tpl_vars['r']['IncomeId']; ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/delete.png" border="0" alt="Delte this income statement" title="Delete this income statement"></a> - <b><?php echo $this->_tpl_vars['r']['Created']; ?>
</b> - <a href="view_statement/?id=<?php echo $this->_tpl_vars['r']['IncomeId']; ?>
"><?php echo $this->_tpl_vars['r']['From']; ?>
 - <?php echo $this->_tpl_vars['r']['Amount']; ?>
</a> - <?php echo $this->_tpl_vars['r']['Comment']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>