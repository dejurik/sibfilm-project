<?php
/* Smarty version 5.0.2, created on 2024-03-28 19:36:06
  from 'file:default/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66059c76bd7565_36374256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11c1e4d33a5cb1def4f3f8d791284242653ae7aa' => 
    array (
      0 => 'default/header.tpl',
      1 => 1711643651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/header-menu.tpl' => 1,
  ),
))) {
function content_66059c76bd7565_36374256 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\default';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php if ((null !== ($_smarty_tpl->getValue('content')['meta_title'] ?? null))) {
echo $_smarty_tpl->getValue('content')['meta_title'];
} else {
echo $_smarty_tpl->getValue('config')['meta_title'];
}?></title>
		<meta name="keywords" content="<?php if ((null !== ($_smarty_tpl->getValue('content')['meta_keywords'] ?? null))) {
echo $_smarty_tpl->getValue('content')['meta_keywords'];
} else {
echo $_smarty_tpl->getValue('config')['meta_keywords'];
}?>">
		<meta name="description" content="<?php if ((null !== ($_smarty_tpl->getValue('content')['meta_description'] ?? null))) {
echo $_smarty_tpl->getValue('content')['meta_description'];
} else {
echo $_smarty_tpl->getValue('config')['meta_description'];
}?>">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="./templates/<?php echo $_smarty_tpl->getValue('template');?>
/css/output.css" rel="stylesheet" />
	</head>

<body>
	<div id="loader" class="fixed hidden top-0 left-0 h-full w-full bg-white/70 z-[100]">
    	<img class="block absolute right-1/2 top-1/2 z-[150] opacity-100" src="/templates/<?php echo $_smarty_tpl->getValue('template');?>
/images/loading.gif">
	</div>
	<div class="w-full overflow-hidden">
		<?php $_smarty_tpl->renderSubTemplate("file:default/header-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
