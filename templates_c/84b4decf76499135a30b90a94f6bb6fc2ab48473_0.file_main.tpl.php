<?php
/* Smarty version 5.0.2, created on 2024-05-02 16:43:19
  from 'file:default/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_663398776e4187_70617148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b4decf76499135a30b90a94f6bb6fc2ab48473' => 
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
function content_663398776e4187_70617148 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default';
$_smarty_tpl->renderSubTemplate("file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('page'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
