<?php /* Smarty version 2.6.21, created on 2009-04-14 06:06:21
         compiled from users_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'users_home.tpl', 22, false),array('modifier', 'escape', 'users_home.tpl', 26, false),)), $this); ?>
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
user"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user_add.png" alt="New User" title="New User" width="16" height="16" class="icon" />New User</a></td>
                </tr>
                <tr>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user.png" alt="User" title="User" width="16" height="16" class="icon" />Name</th>
                        <th>Username</th>
                        <th>Group</th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user_edit.png" alt="Edit User" title="Edit User" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user_delete.png" alt="Delete User" title="Delete User" width="16" height="16" class="icon" /></th>
                </tr>

                <?php if ($this->_tpl_vars['users']): ?>
                <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                        <tr class="<?php echo smarty_function_cycle(array('values' => "rowa,rowb"), $this);?>
">
                                <td><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user.png" alt="<?php echo $this->_tpl_vars['r']['fname']; ?>
 <?php echo $this->_tpl_vars['r']['lname']; ?>
" title="<?php echo $this->_tpl_vars['r']['fname']; ?>
 <?php echo $this->_tpl_vars['r']['lname']; ?>
" width="16" height="16" class="icon" /><?php echo $this->_tpl_vars['r']['fname']; ?>
 <?php echo $this->_tpl_vars['r']['minitial']; ?>
 <?php echo $this->_tpl_vars['r']['lname']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['r']['email']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['r']['group']; ?>
</td>
                                <td><a href="user/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user_edit.png" alt="Edit User <?php echo $this->_tpl_vars['r']['fname']; ?>
 <?php echo $this->_tpl_vars['r']['lname']; ?>
" title="Edit User <?php echo $this->_tpl_vars['r']['fname']; ?>
 <?php echo $this->_tpl_vars['r']['lname']; ?>
" width="16" height="16" class="icon" /></a></td>
                                <td><a href="user_delete/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user_delete.png" alt="Delete User <?php echo $this->_tpl_vars['r']['fname']; ?>
 <?php echo $this->_tpl_vars['r']['lname']; ?>
" title="Delete User <?php echo $this->_tpl_vars['r']['fname']; ?>
 <?php echo $this->_tpl_vars['r']['lname']; ?>
" width="16" height="16" class="icon" /></a></td>
                        </tr>
                <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                        <tr class="error">
                                <td colspan="5"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user_orange.png" alt="No Users Found!" title="No Users Found!" width="16" height="16" class="icon" />No Users Found!<img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/user_orange.png" alt="No Users Found!" title="No Users Found!" width="16" height="16" class="icon" /></td>
                        </tr>
                 <?php endif; ?>
        </table>
</center>


<br />
<br />

<center>
        <table width="80%" border="0" cellpadding="4" cellspacing="0">
                <tr class="noBorders">
                        <td colspan="5"><a href="<?php echo $this->_tpl_vars['http_link']; ?>
group"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_add.png" alt="New Group" title="New Group" width="16" height="16" class="icon" />New Group</a></td>
                </tr>
                <tr>
                        <th><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group.png" alt="Group" title="Group" width="16" height="16" class="icon" />Name</th>
                        <th>Description</th>
                        <th># Members</th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_edit.png" alt="Edit Group" title="Edit Group" width="16" height="16" class="icon" /></th>
                        <th width="1%"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_delete.png" alt="Delete Group" title="Delete Group" width="16" height="16" class="icon" /></th>
                </tr>

                <?php if ($this->_tpl_vars['groups']): ?>
                <?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
                        <tr class="<?php echo smarty_function_cycle(array('values' => "rowa,rowb"), $this);?>
">
                                <td><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group.png" alt="<?php echo $this->_tpl_vars['r']['name']; ?>
" title="<?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /><?php echo $this->_tpl_vars['r']['name']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['r']['description']; ?>
</td>
                                <td align="center"><?php echo $this->_tpl_vars['r']['num_members']; ?>
</td>
                                <td><a href="group/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_edit.png" alt="Edit Group <?php echo $this->_tpl_vars['r']['name']; ?>
" title="Edit Group <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                                <td><a href="group_delete/<?php echo ((is_array($_tmp=$this->_tpl_vars['r']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_delete.png" alt="Delete Group <?php echo $this->_tpl_vars['r']['name']; ?>
" title="Delete Group <?php echo $this->_tpl_vars['r']['name']; ?>
" width="16" height="16" class="icon" /></a></td>
                        </tr>
                <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                        <tr class="error">
                                <td colspan="5"><img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_error.png" alt="No Groups Found!" title="No Groups Found!" width="16" height="16" class="icon" />No Groups Found!<img src="<?php echo $this->_tpl_vars['http_images']; ?>
icons/group_error.png" alt="No Groups Found!" title="No Groups Found!" width="16" height="16" class="icon" /></td>
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