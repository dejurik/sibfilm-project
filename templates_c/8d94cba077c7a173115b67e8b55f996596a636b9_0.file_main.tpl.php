<?php
/* Smarty version 5.0.2, created on 2024-03-31 12:01:08
  from 'file:default/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_660926546257e1_86089847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d94cba077c7a173115b67e8b55f996596a636b9' => 
    array (
      0 => 'default/main.tpl',
      1 => 1711875662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/header.tpl' => 1,
    'file:default/footer.tpl' => 1,
  ),
))) {
function content_660926546257e1_86089847 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\default';
$_smarty_tpl->renderSubTemplate("file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('page'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
