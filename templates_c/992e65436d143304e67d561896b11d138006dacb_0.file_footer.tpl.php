<?php
/* Smarty version 5.0.2, created on 2024-03-28 20:19:17
  from 'file:default/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6605a695a23480_56149174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992e65436d143304e67d561896b11d138006dacb' => 
    array (
      0 => 'default/footer.tpl',
      1 => 1711646319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/footer-menu.tpl' => 1,
  ),
))) {
function content_6605a695a23480_56149174 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\default';
?>		<?php $_smarty_tpl->renderSubTemplate("file:default/footer-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
	</div>

	<?php echo '<script'; ?>
 src="node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/default/src/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
