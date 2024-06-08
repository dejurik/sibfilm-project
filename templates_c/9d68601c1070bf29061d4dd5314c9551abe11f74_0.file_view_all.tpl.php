<?php
/* Smarty version 5.0.2, created on 2024-06-01 14:56:14
  from 'file:templates/admin/config/view_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_665b0c5e4d50e4_13407129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d68601c1070bf29061d4dd5314c9551abe11f74' => 
    array (
      0 => 'templates/admin/config/view_all.tpl',
      1 => 1717242876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin/ckeditor.tpl' => 1,
  ),
))) {
function content_665b0c5e4d50e4_13407129 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\config';
$_smarty_tpl->renderSubTemplate("file:templates/admin/ckeditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<form method="post" enctype="multipart/form-data">
<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">
        <div class="w-full">
            <div class="">
                <div class="flex flex-wrap justify-between">
                    <div class="items-center ">
                        <h1 class="font-semibold text-xl mb-1 block">Общие настройки</h1>
                        <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">Параметры сайта</span>
                    </div>
                    <div class="flex items-center">

                        <button type="submit "
                                class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-wrap">
    <div class="flex py-4 w-full items-start">

        <div class="bg-white shadow rounded-md h-full w-3/4 p-4 relative overflow-hidden">


            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Название компании</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['company_name'] ?? null))) {
echo $_smarty_tpl->getValue('view')['company_name'];
}?>" name="company_name" type="text" placeholder="Введите название" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Адрес сайта</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['site_url'] ?? null))) {
echo $_smarty_tpl->getValue('view')['site_url'];
}?>" name="site_url" type="text" placeholder="Введите адрес сайта" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Copyright</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['copyright'] ?? null))) {
echo $_smarty_tpl->getValue('view')['copyright'];
}?>" name="copyright" type="text" placeholder="Введите copyright" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Шаблон сайта</label>
                        <div class="mt-2 relative">
                            <select name="template" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('view_templates'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('item')['file'];?>
" <?php if ($_smarty_tpl->getValue('view')['template'] == $_smarty_tpl->getValue('item')['file']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('item')['file'];?>
</option>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Основной Email</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['email'] ?? null))) {
echo $_smarty_tpl->getValue('view')['email'];
}?>" name="email" type="text" placeholder="Введите email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Email для уведомлений</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['notify_from_email'] ?? null))) {
echo $_smarty_tpl->getValue('view')['notify_from_email'];
}?>" name="notify_from_email" type="text" placeholder="Введите email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Meta - Заголовок</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['meta_title'] ?? null))) {
echo $_smarty_tpl->getValue('view')['meta_title'];
}?>" name="meta_title" type="text" placeholder="Введите заголовок сайта" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>

                <div class="row-span-2 col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Meta - Описание</label>
                        <div class="mt-2">
                        <textarea name="meta_description" class="h-[120px] appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
                                  focus:outline-none focus:bg-white focus:border-gray-500"><?php if ((null !== ($_smarty_tpl->getValue('view')['meta_description'] ?? null))) {
echo $_smarty_tpl->getValue('view')['meta_description'];
}?></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Meta - Ключевые слова</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['meta_keywords'] ?? null))) {
echo $_smarty_tpl->getValue('view')['meta_keywords'];
}?>" name="meta_keywords" type="text" placeholder="Введите ключевые слова" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>

                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Instagram</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['instagram'] ?? null))) {
echo $_smarty_tpl->getValue('view')['instagram'];
}?>" name="instagram" type="text" placeholder="Instagram" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Youtube</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['youtube'] ?? null))) {
echo $_smarty_tpl->getValue('view')['youtube'];
}?>" name="youtube" type="text" placeholder="Youtube" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">VK</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['vk'] ?? null))) {
echo $_smarty_tpl->getValue('view')['vk'];
}?>" name="vk" type="text" placeholder="vk" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Facebook</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['facebook'] ?? null))) {
echo $_smarty_tpl->getValue('view')['facebook'];
}?>" name="facebook" type="text" placeholder="facebook" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Контактная информация</label>
                        <div class="mt-2">
                            <textarea name="contacts" id="contacts" class="editor"><?php if ((null !== ($_smarty_tpl->getValue('view')['contacts'] ?? null))) {
echo $_smarty_tpl->getValue('view')['contacts'];
}?></textarea>
                        </div>
                    </div>
                </div>



            </div>









        </div>
        <div class="ml-4 bg-white shadow rounded-md w-1/4 relative overflow-hidden ">

            <div class="border-b border-gray-700 border-dashed p-4">
                <h4 class="">Другие разделы</h4>
            </div>

            <div class="p-4">
                <a href="#" class="mb-4 font-medium text-black bg-gray-100 rounded text-sm px-3 py-3 mr-2 w-full block cursor-default" disabled>
                    Общие настройки
                </a>
                <a href="/admin/?mod=config&act=users" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
                    Пользователи
                </a>
                <a href="#" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
                    Пользователи
                </a>
                <a href="#" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
                    Пользователи
                </a>


            </div>




        </div>


    </div>
</div>
</form>
<?php }
}
