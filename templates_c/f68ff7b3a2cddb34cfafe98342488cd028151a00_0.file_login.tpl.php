<?php
/* Smarty version 5.0.2, created on 2024-07-06 18:31:45
  from 'file:templates/admin/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66896361a89163_67527624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68ff7b3a2cddb34cfafe98342488cd028151a00' => 
    array (
      0 => 'templates/admin/login.tpl',
      1 => 1712248616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66896361a89163_67527624 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>CMS Panel</title>
		<meta name="description" content="Alatis Studio CMS Panel">
		<meta name="author" content="Turkmen">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" media="screen" href="/templates/css/output.css">
	</head>

	<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('/templates/admin/images/bg-body.png')]">

	<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
		<div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
			<div class="text-center p-6 bg-slate-900 rounded-t">
				<h3 class="font-semibold text-white text-xl mb-1">Alatis Studio CMS Panel</h3>
				<p class="text-xs text-slate-400">Пройдите авторизацию для внесения изменений.</p>
			</div>



			<form class="p-6" action="" method="post" id="form_login" onsubmit="event.preventDefault()">

				<div id="result" class="p-4 mb-4 text-sm rounded-lg hidden" role="alert"></div>




				<div>
					<label for="email" class="block text-sm text-gray-900">Email</label>
					<div class="mt-2">
						<input id="email" name="email" type="email" autocomplete="email" placeholder="Введите Email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
					</div>
				</div>

				<div class="mt-4">
					<label for="email" class="block text-sm text-gray-900">Пароль</label>
					<div class="mt-2">
						<input type="password" name="password" id="password" placeholder="Введите пароль" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
					</div>
				</div>

				<div class="block mt-3">
					<label class="custom-label">
						<div class="bg-white dark:bg-slate-700 dark:border-slate-600 border border-slate-200 rounded w-3 h-3  inline-block leading-4 text-center -mb-[3px]">
							<input type="checkbox" class="" name="remember">
							<i class="fas fa-check  text-xs text-slate-700 dark:text-slate-300"></i>
						</div>
						<span class="text-sm text-slate-500 font-medium">Запомнить меня</span>
					</label>
				</div>
				<div class="mt-6">
					<button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
						Войти
					</button>
				</div>
			</form>
		</div>
	</div>
	<!--<?php echo '<script'; ?>
 type="module" src="/admin/templates/default/js/main.js"><?php echo '</script'; ?>
>-->
	<?php echo '<script'; ?>
 src="/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/templates/admin/js/login.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
