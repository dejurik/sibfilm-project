<?php
/* Smarty version 5.0.2, created on 2024-07-08 17:12:06
  from 'file:templates/admin/shop/edit_product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668bf3b61750f1_87476673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e44030a5c0f6624bb1f14573a95c9d9aa9a41593' => 
    array (
      0 => 'templates/admin/shop/edit_product.tpl',
      1 => 1720447911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin/ckeditor.tpl' => 1,
  ),
))) {
function content_668bf3b61750f1_87476673 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\shop';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => 'D:\\OpenServer\\domains\\sibfilm.local\\templates_c\\e44030a5c0f6624bb1f14573a95c9d9aa9a41593_0.file_edit_product.tpl.php',
    'uid' => 'e44030a5c0f6624bb1f14573a95c9d9aa9a41593',
    'call_name' => 'smarty_template_function_category_select_1196519450668bf3b6114229_85439031',
  ),
));
$_smarty_tpl->renderSubTemplate("file:templates/admin/ckeditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<form method="post" enctype="multipart/form-data" id="product_form">

    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-1 block">Магазин</h1>
                            <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5"><?php if ((null !== ($_smarty_tpl->getValue('view')['id_item'] ?? null))) {?>Редактировать <?php } else { ?>Добавить <?php }?>товар</span>
                        </div>
                        <div class="flex items-center">
                            <a href="/admin/?mod=shop&act=products" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
                            <button type="submit "
                                    class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ((null !== ($_smarty_tpl->getValue('status') ?? null))) {?>
    <div class="flex p-4 mb-4 <?php if ($_smarty_tpl->getValue('status')['error'] == true) {?>bg-red-100 border-red-700<?php } else { ?>bg-green-100 border-green-700<?php }?> border-t-4" role="alert">
        <div class="ml-3 text-sm font-medium text-green-700">
            <?php echo $_smarty_tpl->getValue('status')['msg'];?>

        </div>
    </div>
    <?php }?>

    <div class="flex justify-between items-stretch mb-12">
        <div class="w-3/12 bg-white shadow rounded p-4 mr-2">


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
                    <label class="block text-sm text-gray-900">Заголовок</label>
                    <div class="mt-2 relative">
                        <select name="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            
                            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('categories')), true);?>

                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Тип товара</label>
                    <div class="mt-2 relative">
                        <select name="type_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option <?php if ((null !== ($_smarty_tpl->getValue('view')['type_id'] ?? null)) && $_smarty_tpl->getValue('view')['type_id'] == 'product') {?>selected="selected"<?php }?> value='product'>Товар</option>
                            <option <?php if ((null !== ($_smarty_tpl->getValue('view')['type_id'] ?? null)) && $_smarty_tpl->getValue('view')['type_id'] == 'video') {?>selected="selected"<?php }?> value='video'>Видеофильм</option>
                            <option <?php if ((null !== ($_smarty_tpl->getValue('view')['type_id'] ?? null)) && $_smarty_tpl->getValue('view')['type_id'] == 'audio') {?>selected="selected"<?php }?> value='audio'>Аудиоальбом</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <div class="mt-5 grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div class="col-span-2">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Цена</label>
                            <div class="mt-2">
                                <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['price'] ?? null))) {
echo $_smarty_tpl->getValue('view')['price'];
}?>" name="price" type="text" placeholder="Цена" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Старая цена</label>
                            <div class="mt-2">
                                <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['old_price'] ?? null))) {
echo $_smarty_tpl->getValue('view')['old_price'];
}?>" name="old_price" type="text" placeholder="Старая цена" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
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

                <div class="flex border mt-5 py-2 pl-6">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" name="visible" value="1" <?php if ((null !== ($_smarty_tpl->getValue('view')['visible'] ?? null)) && $_smarty_tpl->getValue('view')['visible'] == "1") {?>checked="checked"<?php }?>>
                        <div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
                        </div>
                        <span class="ms-3 text-sm font-medium">Видимость</span>
                    </label>
                </div>
                <div class="flex border mt-5 py-2 pl-6">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" name="comments" value="1" <?php if ((null !== ($_smarty_tpl->getValue('view')['comments'] ?? null)) && $_smarty_tpl->getValue('view')['comments'] == "1") {?>checked="checked"<?php }?>>
                        <div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
                        </div>
                        <span class="ms-3 text-sm font-medium">Комментарии</span>
                    </label>
                </div>

            </div>


        </div>

        <div class="w-6/12 bg-white shadow rounded p-4 mr-2">
            <div class="w-full mb-5">
                <label class="block text-sm text-gray-900 mb-2">Варианты товара</label>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variants'), 'variant', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('variant')->value) {
$foreach1DoElse = false;
?>
                    <input name="current_variants[<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
]" type="hidden" value="<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
" />
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                <div class="dd" id="sort_variant">
                    <ol class="dd-list" id="variants_list">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variants'), 'variant', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('variant')->value) {
$foreach2DoElse = false;
?>
                        <li class="dd-item dd3-item mb-1" data-id="<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="flex flex-wrap content-start bg-slate-100 pl-16 pr-2.5 py-2.5 min-h-[54px] rounded border bg-slate-100">
                                <div class="flex items-center h-8 w-2/6">
                                    <input name="variants[id_item][]" type="hidden" value="<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
" />
                                    <input name="variants[name][]" value="<?php echo $_smarty_tpl->getValue('variant')['name'];?>
" type="text" placeholder="Название варианта"
                                           class="text-xs py-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded px-2 focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
                                <div class="ml-2 flex items-center h-8 w-1/6">
                                    <input name="variants[duration][]" value="<?php echo $_smarty_tpl->getValue('variant')['duration'];?>
" type="text" placeholder="Длительность"
                                           class="text-xs py-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded px-2 focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>

                                <div class="ml-2 flex items-center h-8 w-1/6">
                                    <input name="variants[author][]" value="<?php echo $_smarty_tpl->getValue('variant')['author'];?>
" type="text" placeholder="Автор"
                                           class="text-xs py-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded px-2 focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
                                <div class="ml-auto self-center h-8">
                                    <button class="attach_images bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-8 h-8 self-center rounded" type="button" data-variant="<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-1.5 my-1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                        </svg>
                                    </button>
                                    <button class="attach_files bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-8 h-8 self-center rounded" type="button" data-variant="<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-1.5 my-1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                    </button>
                                    <button class="delete_variant bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-8 h-8 self-center rounded" type="button" data-variant="<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-1.5 my-1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="grid gap-2 mt-2 grid-cols-7 w-full hidden" id="images-container-<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                                   <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, 'key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('image')->value) {
$foreach3DoElse = false;
?>
                                   <?php $_smarty_tpl->assign('variant_images_id', $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('variant')['images']), true, NULL);?>
                                    <div class="flex flex-col items-center p-2 rounded border <?php if (is_array($_smarty_tpl->getValue('variant_images_id'))) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('image')['id_item'],$_smarty_tpl->getValue('variant_images_id'))) {?>border-blue-400 bg-blue-100<?php } else { ?>bg-slate-100<?php }
}?>">
                                        <input type="checkbox" id="image-list-<?php echo $_smarty_tpl->getValue('image')['id_item'];?>
-<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
" name="variants[images][<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
][]" value="<?php echo $_smarty_tpl->getValue('image')['id_item'];?>
" <?php if (is_array($_smarty_tpl->getValue('variant_images_id'))) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('image')['id_item'],$_smarty_tpl->getValue('variant_images_id'))) {?>checked="checked"<?php }
}?> class="hidden"/>
                                        <label for="image-list-<?php echo $_smarty_tpl->getValue('image')['id_item'];?>
-<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                                            <img class="object-cover w-full rounded aspect-square" src="<?php echo $_smarty_tpl->getValue('image')['filename'];?>
" alt="">
                                        </label>
                                    </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="grid gap-2 mt-2 grid-cols-1 w-full hidden" id="files-container-<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file', false, 'key');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('file')->value) {
$foreach4DoElse = false;
?>
                                        <?php $_smarty_tpl->assign('variant_files_id', $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('variant')['files']), true, NULL);?>
                                        <div class="flex flex-col items-center p-2 rounded border <?php if (is_array($_smarty_tpl->getValue('variant_files_id'))) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('file')['id_item'],$_smarty_tpl->getValue('variant_files_id'))) {?>border-blue-400 bg-blue-100<?php } else { ?>bg-slate-100<?php }
}?>">
                                            <input type="checkbox" id="file-list-<?php echo $_smarty_tpl->getValue('file')['id_item'];?>
-<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
" name="variants[files][<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
][]" value="<?php echo $_smarty_tpl->getValue('file')['id_item'];?>
" <?php if (is_array($_smarty_tpl->getValue('variant_files_id'))) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('file')['id_item'],$_smarty_tpl->getValue('variant_files_id'))) {?>checked="checked"<?php }
}?> class="hidden"/>
                                            <label for="file-list-<?php echo $_smarty_tpl->getValue('file')['id_item'];?>
-<?php echo $_smarty_tpl->getValue('variant')['id_item'];?>
">
                                                <div class="flex items-center h-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1.5 text-slate-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13"></path>
                                                    </svg>
                                                    <span class="font-medium text-slate-500 text-xs"><?php if (empty($_smarty_tpl->getValue('file')['description'])) {
echo substr((string) $_smarty_tpl->getValue('file')['filename'], (int) 20);
} else {
echo $_smarty_tpl->getValue('file')['description'];
}?></span>
                                                </div>
                                            </label>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>

                            </div>
                        </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <li class="dd-item dd3-item mb-1" id="new_variant">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="flex flex-wrap content-start bg-slate-100 pl-16 pr-2.5 py-2.5 min-h-[54px] rounded border bg-slate-100">
                                <div class="flex items-center h-8 w-2/6">
                                    <input value="" name="new_variants[name][]" type="text" placeholder="Название варианта"
                                           class="name text-xs py-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded px-2 focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
                                <div class="ml-2 flex items-center h-8 w-1/6">
                                    <input value="" name="new_variants[duration][]" type="text" placeholder="Длительность"
                                           class="duration text-xs py-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded px-2 focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
                                <div class="ml-2 flex items-center h-8 w-1/6">
                                    <input value="" name="new_variants[author][]"  type="text" placeholder="Автор"
                                           class="author text-xs py-2 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded px-2 focus:outline-none focus:bg-white focus:border-gray-500">
                                </div>
                                <div class="ml-auto self-center h-8">
                                    <button class="attach_images bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-8 h-8 self-center rounded" type="button" data-variant="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-1.5 my-1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                        </svg>
                                    </button>
                                    <button class="attach_files bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-8 h-8 self-center rounded" type="button" data-variant="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-1.5 my-1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>
                                    </button>
                                    <button class="delete_variant bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-8 h-8 self-center rounded" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-1.5 my-1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="grid gap-2 mt-2 grid-cols-7 w-full hidden" id="images-container-1">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, 'key');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('image')->value) {
$foreach5DoElse = false;
?>
                                        <div class="flex flex-col items-center p-2 rounded border bg-slate-100">
                                            <input type="checkbox" id="image-list-<?php echo $_smarty_tpl->getValue('image')['id_item'];?>
" name="new_variants[images][]" value="<?php echo $_smarty_tpl->getValue('image')['id_item'];?>
" class="hidden"/>
                                            <label for="image-list-<?php echo $_smarty_tpl->getValue('image')['id_item'];?>
">
                                                <img class="object-cover w-full rounded aspect-square" src="<?php echo $_smarty_tpl->getValue('image')['filename'];?>
" alt="">
                                            </label>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="grid gap-2 mt-2 grid-cols-1 w-full hidden" id="files-container-1">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file', false, 'key');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('file')->value) {
$foreach6DoElse = false;
?>
                                        <div class="flex flex-col items-center p-2 rounded border bg-slate-100">
                                            <input type="checkbox" id="file-list-<?php echo $_smarty_tpl->getValue('file')['id_item'];?>
" name="new_variants[files][]" value="<?php echo $_smarty_tpl->getValue('file')['id_item'];?>
" class="hidden"/>
                                            <label for="file-list-<?php echo $_smarty_tpl->getValue('file')['id_item'];?>
">
                                                <div class="flex items-center h-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1.5 text-slate-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13"></path>
                                                    </svg>
                                                    <span class="font-medium text-slate-500 text-xs"><?php if (empty($_smarty_tpl->getValue('file')['description'])) {
echo substr((string) $_smarty_tpl->getValue('file')['filename'], (int) 20);
} else {
echo $_smarty_tpl->getValue('file')['description'];
}?></span>
                                                </div>
                                            </label>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>



                            </div>
                        </li>
                    </ol>
                </div>
                <button type="button" id="addVariant" data-variants-count="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variants'))+1;?>
" class="px-6 py-2 text-xs text-center text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:ring-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>



            </div>
            <div class="w-full">
                <label class="block text-sm text-gray-900 mb-2">Краткое описание</label>
                <textarea name="annotation" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Краткое описание"><?php if ((null !== ($_smarty_tpl->getValue('view')['annotation'] ?? null))) {
echo $_smarty_tpl->getValue('view')['annotation'];
}?></textarea>
            </div>
            <div class="w-full mt-5">
                <label class="block text-sm text-gray-900 mb-2">Подробное описание</label>
                <textarea name="text" id="text" class="editor"><?php if ((null !== ($_smarty_tpl->getValue('view')['text'] ?? null))) {
echo $_smarty_tpl->getValue('view')['text'];
}?></textarea>
            </div>
        </div>


        <div class="w-3/12 bg-white shadow rounded p-4">

            <div class="w-full mb-5">
                <label class="block text-sm text-gray-900">Основная картинка</label>
                <input class="mt-2 block w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-200 cursor-pointer p-1 focus:outline-none focus:border-transparent" id="image" accept=".jpg, .webp" type="file" name="picture">
                <div class="mt-1 text-xs text-gray-500">Доступно к загрузке тип файла webp, jpg, не более 5 мб</div>
                <?php if ((null !== ($_smarty_tpl->getValue('view')['picture'] ?? null))) {?><img src="<?php echo $_smarty_tpl->getValue('view')['picture'];?>
" alt="" class="mt-2 h-64 mx-auto block rounded"><?php }?>
                <input name="old_picture"  value="<?php if ((null !== ($_smarty_tpl->getValue('view')['picture'] ?? null))) {
echo $_smarty_tpl->getValue('view')['picture'];
}?>" type="hidden"/>
            </div>


            <?php if ((null !== ($_smarty_tpl->getValue('view')['id_item'] ?? null))) {?>
            <div class="flex-wrap p-4 bg-slate-50 rounded border border-dashed border-gray-300 flex mb-2 *:text-xs hidden" id="list" data-page-id="<?php echo $_smarty_tpl->getValue('view')['id_item'];?>
" data-module-id="shop">
                <span class="text-xs font-normal text-gray-400 order-last mb-0">Статус</span>
                <div class="text-sm font-normal text-gray-500 w-full">
                    <span class="text-slate-500 text-xs">Название файла</span>
                </div>
            </div>

            <div class="inline-flex rounded shadow-sm w-full mb-5" role="group">
                <button id="multi-uploads-files" type="button" class="w-1/2 py-2 px-3 text-xs font-medium text-center text-white bg-blue-500 border-r border-white rounded-l-lg hover:bg-blue-600 focus:outline-none">
                    Прикрепить файлы
                </button>
                <button id="uploadfiles" type="button" class="w-1/2 py-2 px-3 text-xs font-medium text-center text-white bg-blue-500 rounded-r-md hover:bg-blue-600 focus:outline-none">
                    Начать загрузку
                </button>
            </div>

            <?php }?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('files')) > 0) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'item', false, 'key');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach7DoElse = false;
?>
                    <input type='hidden' name='current_files[]' value='<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
'>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <div class="w-full mb-5">
                <label class="block text-sm text-gray-900">Прикрепленные файлы</label>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'item', false, 'key');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach8DoElse = false;
?>
                    <div class="li-file p-3 mt-2 bg-slate-100 rounded-md flex flex-wrap content-center">
                        <div class="flex items-center h-6 w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mx-1.5 text-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>
                            <span class="editSpan font-medium text-slate-500 text-xs"><?php if (empty($_smarty_tpl->getValue('item')['description'])) {
echo substr((string) $_smarty_tpl->getValue('item')['filename'], (int) 20);
} else {
echo $_smarty_tpl->getValue('item')['description'];
}?></span>
                            <input class="editInput hidden w-full appearance-none bg-white text-gray-700 border border-gray-400 rounded py-1 px-1
					focus:outline-none focus:border-gray-500 text-xs" type='text' name='file_name[<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
]' value='<?php if (empty($_smarty_tpl->getValue('item')['description'])) {
echo substr((string) $_smarty_tpl->getValue('item')['filename'], (int) 20);
} else {
echo $_smarty_tpl->getValue('item')['description'];
}?>'>
                        </div>
                        <div class="ml-auto self-center h-6">
                            <input type='hidden' name='files[]' value='<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
'>
                            <button type="button" class="rename_file bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-6 h-6 self-center rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mx-1.5 my-1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                            </button>
                            <button type="button" class="save_name_file hidden bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-6 h-6 self-center rounded" data-id-file="<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mx-1.5 my-1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                            <button type="button" class="cancel hidden bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-6 h-6 self-center rounded" data-id-file="<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mx-1.5 my-1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <button type="button" class="delete_file_product bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-6 h-6 self-center rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mx-1.5 my-1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>

                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('images')) > 0) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'item', false, 'key');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach9DoElse = false;
?>
                    <input type='hidden' name='current_images[]' value='<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
'>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <div class="w-full mb-5">
                <label class="block text-sm text-gray-900">Прикрепленные картинки</label>
                <div class="grid grid-cols-1 gap-2 mt-2 grid-cols-4">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'item', false, 'key');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach10DoElse = false;
?>
                    <div class="li-image flex flex-col items-center p-2 border rounded bg-slate-100">
                        <img class="object-cover w-full rounded aspect-square" src="<?php echo $_smarty_tpl->getValue('item')['filename'];?>
" alt="">
                        <div class="flex mt-2">
                            <input type='hidden' name='images[]' value='<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
'>
                            <button type="button" class="delete_image_product bg-slate-200 hover:bg-slate-700 text-slate-500 hover:text-white w-6 h-6 self-center rounded mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 mx-1.5 my-1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <?php }?>

            <div class="w-full mb-3">
                <label class="block text-sm text-gray-900">Характеристики проекта</label>
                <div class="mt-2">

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'item', false, 'key');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach11DoElse = false;
?>
                        <div class="flex flex-wrap content-between mb-2 bg-gray-100" feature_id=<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
>
                            <div class="flex items-center text-xs px-2">
                                <?php echo $_smarty_tpl->getValue('item')['title'];?>

                            </div>
                            <div class="ml-auto self-center text-xs">
                                <input name=options[<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
] value="<?php if ((null !== ($_smarty_tpl->getValue('options')[$_smarty_tpl->getValue('item')['id_item']] ?? null))) {
echo $_smarty_tpl->getValue('options')[$_smarty_tpl->getValue('item')['id_item']]['value'];
}?>" type="text" placeholder="<?php echo $_smarty_tpl->getValue('item')['title'];?>
" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-2 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    <div class="new_features">
                        <div class="flex flex-wrap content-between mb-2" id="new_feature">
                            <div class="flex items-center text-xs">
                                <input name="new_options[names][]" value="" type="text" placeholder="Название свойства" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-2 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                            <div class="ml-auto self-center text-xs">
                                <input name="new_options[value][]" value="" type="text" placeholder="Значение свойства" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-2 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                    </div>

                    <button type="button" id="addFeature"
                            class="px-6 py-2 text-xs text-center text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>


                </div>
            </div>


        </div>

    </div>





</form>




<?php }
/* smarty_template_function_category_select_1196519450668bf3b6114229_85439031 */
if (!function_exists('smarty_template_function_category_select_1196519450668bf3b6114229_85439031')) {
function smarty_template_function_category_select_1196519450668bf3b6114229_85439031(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\shop';
$params = array_merge(array('name'=>'category_select','level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                                    <option value='<?php echo $_smarty_tpl->getValue('item')->id_item;?>
'
                                            <?php if ((null !== ($_smarty_tpl->getValue('view')['category_id'] ?? null)) && $_smarty_tpl->getValue('view')['category_id'] == $_smarty_tpl->getValue('item')->id_item) {?>selected="selected"<?php }?>
                                    ><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('level')) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new \Smarty\Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;&nbsp;&nbsp;<?php
}
}
echo $_smarty_tpl->getValue('item')->title;?>
</option>
                                    <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->getValue('item')->subcategories,'level'=>$_smarty_tpl->getValue('level')+1), true);?>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php
}}
/*/ smarty_template_function_category_select_1196519450668bf3b6114229_85439031 */
}
