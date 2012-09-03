<?php /* Smarty version 2.6.21, created on 2009-02-23 07:06:08
         compiled from side_menu.tpl */ ?>
<?php $_from = $this->_tpl_vars['tplSubMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub']):
?>
        <div class="box">
			<h3><?php echo $this->_tpl_vars['sub']['title']; ?>
</h3>
			<ul class="bottom">
                        <?php $_from = $this->_tpl_vars['sub']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
       			
				<li><a href="<?php echo $this->_tpl_vars['r']['link']; ?>
"><?php echo $this->_tpl_vars['r']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
	</div>
<?php endforeach; endif; unset($_from); ?>