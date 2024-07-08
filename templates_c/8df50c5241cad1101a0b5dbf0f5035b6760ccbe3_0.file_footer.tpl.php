<?php
/* Smarty version 5.0.2, created on 2024-07-03 00:29:01
  from 'file:default/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6684711da5c920_29665988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df50c5241cad1101a0b5dbf0f5035b6760ccbe3' => 
    array (
      0 => 'default/footer.tpl',
      1 => 1718452007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/footer-menu.tpl' => 1,
  ),
))) {
function content_6684711da5c920_29665988 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default';
?>		<?php $_smarty_tpl->renderSubTemplate("file:default/footer-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
	</div>

	<?php echo '<script'; ?>
 src="/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/node_modules/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/node_modules/plyr/dist/plyr.polyfilled.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/templates/app/default/js/app.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
