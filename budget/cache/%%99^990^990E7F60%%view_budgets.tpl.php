<?php /* Smarty version 2.6.21, created on 2009-02-11 03:12:56
         compiled from view_budgets.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<b>Add Budget</b>
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

<hr>

<ul> <b>Active</b>
	<?php $_from = $this->_tpl_vars['tplActive']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
		<li><a href="view_budget/?id=<?php echo $this->_tpl_vars['r']['BudgetId']; ?>
"><?php echo $this->_tpl_vars['r']['Title']; ?>
</a> - <?php echo $this->_tpl_vars['r']['Modified']; ?>
 - <?php echo $this->_tpl_vars['r']['Comment']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<ul> <b>Inactive</b>
	<?php $_from = $this->_tpl_vars['tplInactive']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
		<li><a href="view_budget/?id=<?php echo $this->_tpl_vars['r']['BudgetId']; ?>
"><?php echo $this->_tpl_vars['r']['Title']; ?>
</a> - <?php echo $this->_tpl_vars['r']['Modified']; ?>
 - <?php echo $this->_tpl_vars['r']['Comment']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>