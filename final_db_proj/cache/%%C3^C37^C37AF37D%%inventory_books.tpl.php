<?php /* Smarty version 2.6.21, created on 2009-04-27 05:15:37
         compiled from inventory_books.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'inventory_books.tpl', 21, false),array('modifier', 'escape', 'inventory_books.tpl', 26, false),)), $this); ?>
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
book"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_add.png" alt="New Book" title="New Book" width="16" height="16" class="icon" />New Book</a></td>
                </tr>
                <tr>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database.png" alt="Database" title="Database" width="16" height="16" class="icon" />Name</th>
                        <th>ISBN</th>
                        <th>Quantity</th>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/coins.png" alt="Price" title="Price" width="16" height="16" class="icon" />Price</th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_edit.png" alt="Edit" title="Edit" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_delete.png" alt="Delete" title="Delete User" width="16" height="16" class="icon" /></th>
                </tr>

                <?php if ($this->_tpl_vars['books']): ?>
                <?php $_from = $this->_tpl_vars['books']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                        <tr class="<?php echo smarty_function_cycle(array('values' => "rowa,rowb"), $this);?>
">
                                <td><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database.png" alt="<?php echo $this->_tpl_vars['r']['name']; ?>
" title="<?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /><?php echo $this->_tpl_vars['r']['name']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['r']['isbn']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['r']['current_quantity']; ?>
</td>
                                <td><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/coins.png" alt="Price" title="Price" width="16" height="16" class="icon" /><?php echo $this->_tpl_vars['r']['price']; ?>
</td>
                                <td><a href="book/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['sku'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_edit.png" alt="Edit Data <?php echo $this->_tpl_vars['r']['name']; ?>
" title="Edit Data <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                                <td><a href="book_delete/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['sku'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_delete.png" alt="Delete Data <?php echo $this->_tpl_vars['r']['name']; ?>
" title="Delete Data <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                        </tr>
                <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                        <tr class="error">
                                <td colspan="5"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_error.png" alt="No Data Found!" title="No Data Found!" width="16" height="16" class="icon" />No Data Found!<img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/database_error.png" alt="No Data Found!" title="No Data Found!" width="16" height="16" class="icon" /></td>
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