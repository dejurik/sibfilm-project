<?php
/* Smarty version 5.0.2, created on 2024-04-07 21:55:33
  from 'file:templates/admin/sliders/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6612ec25761e44_60660449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a5c38311eb40a8b0e50c0421a38bfd5b72d5187' => 
    array (
      0 => 'templates/admin/sliders/edit.tpl',
      1 => 1712516115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6612ec25761e44_60660449 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\sliders';
?><form method="post" enctype="multipart/form-data">

	<div class="flex flex-wrap">
		<div class="flex items-center py-4 w-full">
			<div class="w-full">
				<div class="">
					<div class="flex flex-wrap justify-between">
						<div class="items-center ">
							<h1 class="font-semibold text-xl mb-1 block">Слайдеры</h1>
							<span class="text-gray-500 text-xs font-semibold mr-2 py-0.5"><?php if ((null !== ($_smarty_tpl->getValue('view')['id_item'] ?? null))) {?>Редактировать <?php } else { ?>Добавить <?php }?>слайд</span>
						</div>
						<div class="flex items-center">
							<a href="/admin/?mod=sliders&act=view_all" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
							<button type="submit "
									class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить слайд</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="flex justify-between items-stretch mb-12">
		<div class="w-2/4 bg-white shadow rounded p-4 mr-2">


				<div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-start">
					<input name="id_item"  value="<?php if ((null !== ($_smarty_tpl->getValue('view')['id_item'] ?? null))) {
echo $_smarty_tpl->getValue('view')['id_item'];
}?>" type="hidden"/>
					<div class="">
						<label class="block text-sm text-gray-900">Заголовок</label>
						<div class="mt-2">
							<input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['title'] ?? null))) {
echo $_smarty_tpl->getValue('view')['title'];
}?>" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
						</div>
					</div>
					<div class="mt-5">
						<label class="block text-sm text-gray-900">Ссылка</label>
						<div class="mt-2">
							<input placeholder="Ссылка" type="text" name="url" value="<?php if ((null !== ($_smarty_tpl->getValue('view')['url'] ?? null))) {
echo $_smarty_tpl->getValue('view')['url'];
}?>" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
						</div>
					</div>

					<div class="flex justify-evenly border mt-5 p-2">
						<label class="inline-flex items-center cursor-pointer">
							<input type="checkbox" class="sr-only peer" name="visible" value="1" <?php if ((null !== ($_smarty_tpl->getValue('view')['visible'] ?? null)) && $_smarty_tpl->getValue('view')['visible'] == "1") {?>checked="checked"<?php }?>>
							<div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
							</div>
							<span class="ms-3 text-sm font-medium">Видимость слайда</span>
						</label>
					</div>

				</div>


		</div>

		<div class="w-1/4 bg-white shadow rounded p-4 overflow-hidden ml-2">
			<div>
				<?php if (!empty($_smarty_tpl->getValue('view')['image'])) {?>
				<img src="<?php echo $_smarty_tpl->getValue('view')['image'];?>
" alt="" class="mb-3 h-44">
				<input name="old_img"  value="<?php echo $_smarty_tpl->getValue('view')['image'];?>
" type="hidden"/>
				<?php } else { ?>
					<div class="block w-full h-44 bg-gray-200 rounded border border-gray-400 border-dotted mb-3"></div>
				<?php }?>
			</div>
				<div>
					<label class="block mb-2 text-sm font-medium text-gray-900" for="image">Картинка</label>
					<input class="block w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-200 cursor-pointer p-1 focus:outline-none focus:border-transparent" id="image" accept=".jpg, .webp" type="file" name="image">
					<div class="mt-1 text-xs text-gray-500">Доступно к загрузке тип файла webp, jpg, не более 5 мб</div>
				</div>
		</div>

		<div class="w-1/4 bg-white shadow rounded p-4 overflow-hidden ml-2">
				<div>
					<?php if (!empty($_smarty_tpl->getValue('view')['videofile'])) {?>
						<video playsinline autoplay muted loop poster="<?php echo $_smarty_tpl->getValue('view')['image'];?>
" class="mb-3 h-44">
							<source src="<?php echo $_smarty_tpl->getValue('view')['videofile'];?>
" type="video/webm">
						</video>
						<input name="old_videofile"  value="<?php echo $_smarty_tpl->getValue('view')['videofile'];?>
" type="hidden"/>
					<?php } else { ?>
						<div class="block w-full h-44 bg-gray-200 rounded border border-gray-400 border-dotted mb-3"></div>
					<?php }?>
				</div>
				<div>
					<label class="block mb-2 text-sm font-medium text-gray-900" for="videofile">Видео файл</label>
					<input class="block w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-200 cursor-pointer p-1 focus:outline-none focus:border-transparent" id="videofile" accept=".webm" type="file" name="videofile">
					<div class="mt-1 text-xs text-gray-500">Доступно к загрузке тип файла webm, не более 30 мб</div>
				</div>
	</div>

	</div>
</form><?php }
}
