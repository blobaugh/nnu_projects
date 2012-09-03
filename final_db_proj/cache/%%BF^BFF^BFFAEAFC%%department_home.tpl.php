<?php /* Smarty version 2.6.21, created on 2009-04-27 05:33:17
         compiled from department_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'department_home.tpl', 51, false),array('modifier', 'escape', 'department_home.tpl', 53, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php echo $this->_tpl_vars['content']; ?>


<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr>
                 <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard.png" alt="Department" title="Department" width="16" height="16" class="icon" />Department</th>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Total Products</th>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Total On Hand</th>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_error.png" alt="Database" title="Database" width="16" height="16" class="icon" />Low On Hand</th>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/coins.png" alt="Price" title="Price" width="16" height="16" class="icon" />Total Value</th>

                </tr>

                <?php $_from = $this->_tpl_vars['stats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                <tr>
                        <td><?php echo $this->_tpl_vars['r']['name']; ?>
</td>
                        <td align="right"><?php echo $this->_tpl_vars['r']['total_products']; ?>
</td>
                        <td align="right"><?php echo $this->_tpl_vars['r']['total_on_hand']; ?>
</td>
                        <td align="right" <?php if ($this->_tpl_vars['r']['low_on_hand'] > 0): ?>style="background-color: #fcc"<?php endif; ?>><?php echo $this->_tpl_vars['r']['low_on_hand']; ?>
</td>
                        <td align="right"><?php echo $this->_tpl_vars['r']['total_value']; ?>
</td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>

        </table>
</center>


<br />
<br />





<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="<?php echo $this->_tpl_vars['http_link']; ?>
department"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard_add.png" alt="New" title="New" width="16" height="16" class="icon" />New Department</a></td>
                </tr>
                <tr>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard.png" alt="Department" title="Department" width="16" height="16" class="icon" />Name</th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard_edit.png" alt="Edit" title="Edit" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard_delete.png" alt="Delete" title="Delete" width="16" height="16" class="icon" /></th>
                </tr>

                <?php if ($this->_tpl_vars['depts']): ?>
                <?php $_from = $this->_tpl_vars['depts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                        <tr class="<?php echo smarty_function_cycle(array('values' => "rowa,rowb"), $this);?>
">
                                <td><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard.png" alt="Department" title="Department" width="16" height="16" class="icon" /><?php echo $this->_tpl_vars['r']['name']; ?>
</td>
                                <td><a href="department/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard_edit.png" alt="Edit <?php echo $this->_tpl_vars['r']['name']; ?>
 " title="Edit <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                                <td><a href="department_delete/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard_delete.png" alt="Delete <?php echo $this->_tpl_vars['r']['name']; ?>
" title="Delete <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                        </tr>
                <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                        <tr class="error">
                                <td colspan="5"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/error.png" alt="No Departments Found!" title="No Departments Found!" width="16" height="16" class="icon" />No Departments Found!<img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/error.png" alt="No Departments Found!" title="No Departments Found!" width="16" height="16" class="icon" /></td>
                        </tr>
                 <?php endif; ?>
        </table>
</center>

<br />
<br />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>