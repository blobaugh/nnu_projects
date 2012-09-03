<?php /* Smarty version 2.6.21, created on 2009-04-14 05:19:44
         compiled from user.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form action="" method="post">
<center>
        <table width="80%" cellpadding="5" cellspacing="0">
                <tr class="borders">
                        <td align="right"><b>Group:</b></td>
                        <td><?php echo $this->_tpl_vars['group_menu']; ?>
</td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>First Name:</b></td>
                        <td><input type="text" name="fname" value="<?php echo $this->_tpl_vars['user']['fname']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Last Name:</b></td>
                        <td><input type="text" name="lname" value="<?php echo $this->_tpl_vars['user']['lname']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Middle Initial:</b></td>
                        <td><input type="text" name="minitial" value="<?php echo $this->_tpl_vars['user']['minitial']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Phone:</b></td>
                        <td><input type="text" name="phone" value="<?php echo $this->_tpl_vars['user']['phone']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Email:</b></td>
                        <td><input type="text" name="email" value="<?php echo $this->_tpl_vars['user']['email']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Address:</b></td>
                        <td><input type="text" name="address1" value="<?php echo $this->_tpl_vars['user']['address1']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Address:</b></td>
                        <td><input type="text" name="address2" value="<?php echo $this->_tpl_vars['user']['address2']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>City:</b></td>
                        <td><input type="text" name="city" value="<?php echo $this->_tpl_vars['user']['city']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>State:</b></td>
                        <td><input type="text" name="state" value="<?php echo $this->_tpl_vars['user']['state']; ?>
"></td>
                </tr>

                <tr class="borders">
                        <td align="right"><b>Zip:</b></td>
                        <td><input type="text" name="Zip" value="<?php echo $this->_tpl_vars['user']['zip']; ?>
"></td>
                </tr>

                <tr>
                        <td colspan="2">
                                <input type="submit" name="save_user" value="Save User">
                        </td>
                </tr>
        </table>
</center>
</form>

<br />
<br />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>