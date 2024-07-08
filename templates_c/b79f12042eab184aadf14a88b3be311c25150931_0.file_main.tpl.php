<?php
/* Smarty version 5.0.2, created on 2024-07-03 00:36:50
  from 'file:templates/admin/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668472f209ea43_41119426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b79f12042eab184aadf14a88b3be311c25150931' => 
    array (
      0 => 'templates/admin/main.tpl',
      1 => 1719169194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668472f209ea43_41119426 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin';
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
		<link rel="stylesheet" type="text/css" media="screen" href="/templates/css/output.css">
		<link rel="stylesheet" type="text/css" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">
		<link rel="shortcut icon" href="/templates/admin/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/templates/admin/images/favicon.ico" type="image/x-icon">

</head>

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('/templates/admin/images/bg-body.png')]">

	<nav  class="bg-gradient-to-r from-slate-800 to-slate-600 px-2.5 py-2.5 shadow-sm sm:px-4 block">
		<div class="container mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">

			<div class="flex items-center">
				<a href="#" class="flex items-center outline-none">
					<img src="/templates/admin/images/logo.png" alt="" class="h-8" />
				</a>
			</div>

			<div class="order-2 w-full items-center justify-between md:order-1 md:ml-7 md:flex md:w-auto">
				<ul class="mt-4 flex flex-col *:font-medium md:mt-0 md:flex-row text-sm space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 text-gray-300">
					<li>
						<a href="/admin/" class="<?php if (!$_smarty_tpl->getValue('mod')) {?>text-white<?php }?>">Рабочий стол</a>
					</li>
					<li>
						<a href="/admin/?mod=menu&act=view_all" class="<?php if ($_smarty_tpl->getValue('mod') && $_smarty_tpl->getValue('mod') == 'menu') {?>text-white<?php }?>">Навигация</a>
					</li>
					<li class="dropdown">
						<button class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
							Контент
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-0.5 w-3 h-3">
								<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
							</svg>
						</button>
						<div class="dropdown-menu absolute z-20 my-1 w-96 left-0 right-0 xl:left-auto xl:right-auto list-none divide-y divide-gray-100 rounded bg-white shadow hidden">
							<div class="grid grid-cols-2 gap-4 px-3 py-3">
								<div class="col-span-1">
									<ul class="py-1">
										<li>
											<a href="/admin/?mod=news&act=view_all" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Новости</a>
										</li>
										<li>
											<a href="/admin/?mod=pages&act=view_all" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Страницы</a>
										</li>
										<li>
											<a href="/admin/?mod=projects&act=view_all" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Проекты</a>
										</li>
									</ul>
								</div>
								<div class="col-span-1">
									<ul class="py-1">
										<li>
											<a href="/admin/?mod=staffs&act=view_all" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Участники</a>
										</li>
										<li>
											<a href="/admin/?mod=features&act=view_all"  class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Характеристики</a>
										</li>
										<li>
											<a href="/admin/?mod=sliders&act=view_all" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Слайдер</a>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown">
						<button class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
							Магазин
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-0.5 w-3 h-3">
								<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
							</svg>
						</button>
						<div class="absolute z-10 my-1 hidden list-none divide-y divide-gray-100 rounded bg-white shadow w-44 dropdown-menu">
							<ul class="py-1">
								<li>
									<a href="/admin/?mod=shop&act=categories" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Категории</a>
								</li>
								<li>
									<a href="/admin/?mod=shop&act=products" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Продукты</a>
								</li>
								<li>
									<a href="/admin/?mod=shop&act=orders" class="block px-4 py-2 text-slate-500 hover:bg-gray-800/20">Заказы</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="/admin/?mod=feedback&act=view_all" class="<?php if ($_smarty_tpl->getValue('mod') && $_smarty_tpl->getValue('mod') == 'feedback') {?>text-white<?php }?>">Обратная связь</a>
					</li>
					<li>
						<a href="/admin/?mod=config&act=view_all" class="<?php if ($_smarty_tpl->getValue('mod') && $_smarty_tpl->getValue('mod') == 'config') {?>text-white<?php }?>">Настройки</a>
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
							<a href="/admin/logout/" class="font-medium text-gray-300">Выход</a>
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
 src="/node_modules/jquery-ui/dist/jquery-ui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/node_modules/tabbedcontent/dist/tabbedcontent.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="/templates/admin/js/cropper/scripts/jquery.Jcrop.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/templates/admin/js/cropper/scripts/jquery.SimpleCropper.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="/node_modules/sweetalert2/dist/sweetalert2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/node_modules/nestable2/dist/jquery.nestable.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/node_modules/jquery-modal/jquery.modal.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/node_modules/plupload/js/plupload.full.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/templates/admin/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
