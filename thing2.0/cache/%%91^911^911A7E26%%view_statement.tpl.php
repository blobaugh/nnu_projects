<?php /* Smarty version 2.6.21, created on 2009-02-11 03:38:18
         compiled from view_statement.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'view_statement.tpl', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sub_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul>
	<li><b>From:</b> <?php echo $this->_tpl_vars['tplIncome']['From']; ?>
</li>
	<li><b>Amount: <font color="green">$<?php echo $this->_tpl_vars['tplIncome']['Amount']; ?>
</font></b></li>
	<li><b>Comment: </b><?php echo $this->_tpl_vars['tplIncome']['Comment']; ?>
</li>
	<li><?php echo $this->_tpl_vars['tplIncome']['Created']; ?>
</li>
</ul>

<center>
<table border="0" cellpadding="5">
	<tr>
		<th>Title</th>
		<th>Dollars</th>
		<th>Percent</th>
		<th>Amount</th>
		<th>Remaining</th>
		<th>Comment</th>
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
			<td>$<?php echo $this->_tpl_vars['r']['Amount']; ?>

			<td><?php if ($this->_tpl_vars['r']['Remaining'] > 1): ?> <font color="green"> <?php else: ?> <font color="red"> <?php endif; ?> $<?php echo $this->_tpl_vars['r']['Remaining']; ?>
</font></td>
			<td><?php echo $this->_tpl_vars['r']['Comment']; ?>

		</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
</center>

<?php if ($this->_tpl_vars['tplRemaining'] > 0): ?>
	<br />There are <font color="green"><b>$<?php echo $this->_tpl_vars['tplRemaining']; ?>
</b></font>. I suggest you put this into saving or investments.
<?php else: ?>
	<br /><span style="background-color: red;">You do not have enough money! Please come up with $<?php echo $this->_tpl_vars['tplRemaining']; ?>
 or manually adjust your budget.</span>
<?php endif; ?>
<br />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>