<?php /* Smarty version 2.6.21, created on 2009-04-27 05:37:45
         compiled from vendor_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'vendor_home.tpl', 19, false),array('modifier', 'escape', 'vendor_home.tpl', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php echo $this->_tpl_vars['content']; ?>


<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="<?php echo $this->_tpl_vars['http_link']; ?>
vendor"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_add.png" alt="New" title="New" width="16" height="16" class="icon" />New Vendor</a></td>
                </tr>
                <tr>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/groups.png" alt="Vendor" title="Vendor" width="16" height="16" class="icon" />Name</th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_edit.png" alt="Edit" title="Edit" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_delete.png" alt="Delete" title="Delete" width="16" height="16" class="icon" /></th>
                </tr>

                <?php if ($this->_tpl_vars['vendors']): ?>
                <?php $_from = $this->_tpl_vars['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                        <tr class="<?php echo smarty_function_cycle(array('values' => "rowa,rowb"), $this);?>
">
                                <td><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group.png" alt="Vendor" title="Vendor" width="16" height="16" class="icon" /><?php echo $this->_tpl_vars['r']['name']; ?>
</td>
                                <td><a href="vendor/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard_edit.png" alt="Edit <?php echo $this->_tpl_vars['r']['name']; ?>
 " title="Edit <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                                <td><a href="vendor_delete/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/vcard_delete.png" alt="Delete <?php echo $this->_tpl_vars['r']['name']; ?>
" title="Delete <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                        </tr>
                <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                        <tr class="error">
                                <td colspan="5"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/error.png" alt="No Vendors Found!" title="No Vendors Found!" width="16" height="16" class="icon" />No Vendors Found!<img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/error.png" alt="No Vendors Found!" title="No Vendors Found!" width="16" height="16" class="icon" /></td>
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