<?php
/* Smarty version 5.0.2, created on 2024-04-21 18:38:58
  from 'file:templates/admin/pages/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_662533127d93f0_69389834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ac36485a2a4f02239e7115b321abd167f29b372' => 
    array (
      0 => 'templates/admin/pages/edit.tpl',
      1 => 1713710059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin/ckeditor.tpl' => 1,
  ),
))) {
function content_662533127d93f0_69389834 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\pages';
$_smarty_tpl->renderSubTemplate("file:templates/admin/ckeditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<form method="post" enctype="multipart/form-data">

	<div class="flex flex-wrap">
		<div class="flex items-center py-4 w-full">
			<div class="w-full">
				<div class="">
					<div class="flex flex-wrap justify-between">
						<div class="items-center ">
							<h1 class="font-semibold text-xl mb-1 block">Страницы</h1>
							<span class="text-gray-500 text-xs font-semibold mr-2 py-0.5"><?php if ((null !== ($_smarty_tpl->getValue('view')['id_item'] ?? null))) {?>Редактировать <?php } else { ?>Добавить <?php }?>страницу</span>
						</div>
						<div class="flex items-center">
							<a href="/admin/?mod=pages&act=view_all" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
							<button type="submit "
									class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить страницу</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="flex justify-between items-stretch mb-12">
		<div class="w-1/4 bg-white shadow rounded p-4 mr-2">


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
						<label class="block text-sm text-gray-900">Meta-title</label>
						<div class="mt-2">
							<input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['meta_title'] ?? null))) {
echo $_smarty_tpl->getValue('view')['meta_title'];
}?>" name="meta_title" type="text" placeholder="Meta-title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
						</div>
					</div>

					<div class="mt-5">
						<label class="block text-sm text-gray-900">Meta-keywords</label>
						<div class="mt-2">
							<input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['meta_keywords'] ?? null))) {
echo $_smarty_tpl->getValue('view')['meta_keywords'];
}?>" name="meta_keywords" type="text" placeholder="Meta-keywords"
								   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
						</div>
					</div>

					<div class="mt-5">
						<label class="block text-sm text-gray-900">Meta-descriptions</label>
						<div class="mt-2">
								<textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" rows="3" name="meta_description" placeholder="Meta-descriptions"><?php if ((null !== ($_smarty_tpl->getValue('view')['meta_description'] ?? null))) {
echo $_smarty_tpl->getValue('view')['meta_description'];
}?></textarea>
						</div>
					</div>


					<div class="flex flex-wrap items-end mb-2 mt-5">
						<div class="w-5/6 pr-3 mb-0">
							<label class="block text-sm text-gray-900">Ссылка</label>
							<input class="mt-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="Ссылка" type="text" name="url" value="<?php if ((null !== ($_smarty_tpl->getValue('view')['url'] ?? null))) {
echo $_smarty_tpl->getValue('view')['url'];
}?>" id="url">
						</div>

						<div class="w-1/6 pr-3 mb-0">
							<button type="button" id="generation"
									class="inline-flex items-center px-4 py-[13px] bg-blue-500 hover:bg-blue-600 text-white rounded-md">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
								</svg>
							</button>
						</div>
					</div>

					<div class="flex justify-evenly border mt-5 p-2">
						<label class="inline-flex items-center cursor-pointer">
							<input type="checkbox" class="sr-only peer" name="visible" value="1" <?php if ((null !== ($_smarty_tpl->getValue('view')['visible'] ?? null)) && $_smarty_tpl->getValue('view')['visible'] == "1") {?>checked="checked"<?php }?>>
							<div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
							</div>
							<span class="ms-3 text-sm font-medium">Видимость страницы</span>
						</label>
					</div>

				</div>


		</div>

		<div class="w-3/4 bg-white shadow rounded p-4 overflow-hidden ml-2">
			<div class="w-12/12">
				<textarea name="text" id="edit"><?php if ((null !== ($_smarty_tpl->getValue('view')['text'] ?? null))) {
echo $_smarty_tpl->getValue('view')['text'];
}?></textarea>
			</div>
		</div>
	</div>





</form>




<?php }
}
