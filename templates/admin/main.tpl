<!DOCTYPE HTML PUBLIC '-//W3С//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
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
						<a href="/admin/" class="{if !$mod}text-white{/if}">Рабочий стол</a>
					</li>
					<li>
						<a href="/admin/?mod=menu&act=view_all" class="{if $mod && $mod eq 'menu'}text-white{/if}">Навигация</a>
					</li>
					<li>
						<a href="/admin/?mod=pages&act=view_all" class="{if $mod && $mod eq 'pages'}text-white{/if}">Страницы</a>
					</li>
					<li>
						<a href="#">Проекты</a>
					</li>
					<li>
						<a href="#">Каталог</a>
					</li>
					<li>
						<a href="/admin/?mod=feedback&act=view_all" class="{if $mod && $mod eq 'feedback'}text-white{/if}">Обратная связь</a>
					</li>
					<li>
						<a href="/admin/?mod=sliders&act=view_all" class="{if $mod && $mod eq 'sliders'}text-white{/if}">Слайдер</a>
					</li>
				</ul>
			</div>

			<div class="order-1 ml-auto flex items-center md:order-2">

				<div class="mr-2 lg:mr-0 flex items-center">
					<a href="#" class="flex items-center rounded-full text-sm focus:bg-none focus:ring-0  md:mr-0">
						<img class="h-8 w-8 rounded-full" src="{$user_id.avatar}" alt="{$user_id.name}" />
						<span class="ml-2 hidden text-left xl:block">
							<span class="block font-medium text-gray-300">{$user_id.name}</span>
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
		{include file=$page}

		<div class="absolute bottom-0 left-2 right-2 block">
			<div class="container mx-auto">
				<footer class="footer mt-4 rounded-tr-md rounded-tl-md text-sm bg-white dark:bg-slate-800 p-4 text-center font-medium text-slate-600 shadow md:text-left">
					&copy;<script>document.write(new Date().getFullYear());</script>
					<span class="float-right hidden md:inline-block text-gray-500 text-sm">Alatis Studio</span>
				</footer>
			</div>
		</div>
	</div>

	
	<script src="/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="/node_modules/jquery-ui/dist/jquery-ui.min.js"></script>
	<script src="/node_modules/tabbedcontent/dist/tabbedcontent.min.js"></script>


	<script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
	<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8"></script>-->
	<script src="/node_modules/nestable2/dist/jquery.nestable.min.js"></script>
	<script src="/node_modules/jquery-modal/jquery.modal.min.js"></script>
	<script src="/templates/admin/js/main.js"></script>

</body>
</html>
