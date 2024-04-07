<?php
/* Smarty version 5.0.2, created on 2024-04-07 12:01:22
  from 'file:default/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_661260e2be4750_64948955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3d4513c63e0ca112a90aafbe23e330203e6a52c' => 
    array (
      0 => 'default/header.tpl',
      1 => 1712480477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/header-menu.tpl' => 1,
  ),
))) {
function content_661260e2be4750_64948955 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default';
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
		<link href="/templates/css/output.css" rel="stylesheet" />
	</head>

<body>
	<div id="loader" class="fixed hidden top-0 left-0 h-full w-full bg-white/70 z-[100]">
    	<img class="block absolute right-1/2 top-1/2 z-[150] opacity-100" src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/loading.gif">
	</div>
	<div class="w-full overflow-hidden">
		<?php $_smarty_tpl->renderSubTemplate("file:default/header-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
