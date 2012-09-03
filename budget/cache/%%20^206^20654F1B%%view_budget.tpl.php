<?php /* Smarty version 2.6.21, created on 2009-02-11 03:33:22
         compiled from view_budget.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'view_budget.tpl', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sub_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form method="post" action="">
	<table border="0" cellpadding="5">
		<tr>
			<td><b>Title:</b></td>
			<td><input type="text" name="Title"></td>
			<td style="font-size:10px;"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/help.png"> What this budget will be referred to as.</td>
		</tr>
		<tr>
			<td><b>Dollars:</b></td>
			<td><input type="text" name="Dollars"></td>
			<td style="font-size:10px;"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/help.png"> No symbols</td>
		</tr>
		<tr>
			<td><b>Percent:</b></td>
			<td><input type="text" name="Percent"></td>
			<td style="font-size:10px;"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/help.png"> No symbols</td>
		</tr>
		<tr>
			<td><b>Comment:</b></td>
			<td colspan="2"><input type="text" name="Comment"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="add_field" value="Add Field"></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>

<hr />

<ul>
        <li><b>Budget: </b> <?php echo $this->_tpl_vars['tplBudget']['Title']; ?>
</li>
        <li><b>Comment: </b> <?php echo $this->_tpl_vars['tplBudget']['Comment']; ?>
</li>
        <li><?php echo $this->_tpl_vars['tplBudget']['Modified']; ?>
</li>
</ul>

<center>
<table border="0" cellpadding="5">
	<tr>
		<th>Title</th>
		<th>Dollars</th>
		<th>Percent</th>
		<th>Comment</th>
		<th>Modified</th>
	</tr>
	<?php $_from = $this->_tpl_vars['tplFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => "rowa, rowb"), $this);?>
">
			<td><a href="edit_field/?id=<?php echo $this->_tpl_vars['r']['BudgetFieldId']; ?>
"><?php echo $this->_tpl_vars['r']['Title']; ?>
</a></td>
			<td>$<?php echo $this->_tpl_vars['r']['Dollars']; ?>
</td>
			<td><?php echo $this->_tpl_vars['r']['Percent']; ?>
%</td>
			<td><?php echo $this->_tpl_vars['r']['Comment']; ?>
</td>
			<td><?php echo $this->_tpl_vars['r']['Modified']; ?>

		</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
</center>
<br />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>