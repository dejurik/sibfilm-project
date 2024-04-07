<?php
/* Smarty version 5.0.2, created on 2024-03-31 11:53:50
  from 'file:default/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6609249eb3b958_45930669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da785bdd79803402d792181c2cd0d9f17b25301' => 
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
function content_6609249eb3b958_45930669 (\Smarty\Template $_smarty_tpl) {
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
