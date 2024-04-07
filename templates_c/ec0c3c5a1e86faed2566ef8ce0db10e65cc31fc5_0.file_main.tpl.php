<?php
/* Smarty version 5.0.2, created on 2024-03-29 16:24:14
  from 'file:admin/templates/default/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6606c0fedc3e32_90057837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec0c3c5a1e86faed2566ef8ce0db10e65cc31fc5' => 
    array (
      0 => 'admin/templates/default/main.tpl',
      1 => 1711718574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6606c0fedc3e32_90057837 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\admin\\templates\\default';
?><!DOCTYPE HTML PUBLIC '-//W3С//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html>
<head>
	<title>Система управления содержимым | Alatis CMS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Коршунов Алексей Сергеевич" />
		<meta name="copyright" content="Alatis Studio Сайт - это просто">
		<meta http-equiv="Pragma" content="no-cache">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" media="screen" href="/admin/templates/default/css/output.css">
		<link rel="shortcut icon" href="/admin/templates/default/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/admin/templates/default/images/favicon.ico" type="image/x-icon">

</head>

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')]">

	<nav  class="bg-gradient-to-r from-slate-800 to-slate-600 px-2.5 py-2.5 shadow-sm sm:px-4 block">
		<div class="container mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">

			<div class="flex items-center">
				<a href="#" class="flex items-center outline-none">
					<img src="/admin/templates/default/images/logo.png" alt="" class="h-8" />
				</a>
			</div>

			<div class="order-2 w-full items-center justify-between md:order-1 md:ml-7 md:flex md:w-auto">
				<ul class="mt-4 flex flex-col *:font-medium md:mt-0 md:flex-row text-sm space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 text-gray-300">
					<li>
						<a href="/admin/">Рабочий стол</a>
					</li>
					<li>
						<a href="/admin/?mod=menu&act=view_all" class="text-white">Навигация</a>
					</li>
					<li>
						<a href="/admin/?mod=pages&act=view_all" class="text-white">Страницы</a>
					</li>
					<li>
						<a href="#">Проекты</a>
					</li>
					<li>
						<a href="#">Каталог</a>
					</li>
				</ul>
			</div>

			<div class="order-1 ml-auto flex items-center md:order-2">

				<div class="mr-2 lg:mr-0 flex items-center">
					<a href="#" class="flex items-center rounded-full text-sm focus:bg-none focus:ring-0  md:mr-0">
						<img class="h-8 w-8 rounded-full" src="<?php echo $_smarty_tpl->getValue('user_id')['avatar'];?>
" alt="<?php echo $_smarty_tpl->getValue('user_id')['name'];?>
" />
						<span class="ml-2 hidden text-left xl:block">
							<span class="block font-medium text-gray-300"><?php echo $_smarty_tpl->getValue('user_id')['name'];?>
</span>
						</span>
					</a>
					<ul class="ml-8 mt-4 flex flex-col md:mt-0 md:flex-row md:text-sm space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8">
						<li>
							<a href="/admin/" class="font-medium text-gray-300">Выход</a>
						</li>
					</ul>
				</div>

			</div>

		</div>
	</nav>

	<div class="container mx-auto px-2 min-h-[calc(100vh-52px)] relative pb-14">
		<?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('page'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


		<div class="absolute bottom-0 left-2 right-2 block">
			<div class="container mx-auto">
				<footer class="footer mt-4 rounded-tr-md rounded-tl-md text-sm bg-white dark:bg-slate-800 p-4 text-center font-medium text-slate-600 shadow md:text-left">
					&copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>
					<span class="float-right hidden md:inline-block text-gray-500 text-sm">Alatis Studio</span>
				</footer>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 src="/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/admin/templates/default/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
