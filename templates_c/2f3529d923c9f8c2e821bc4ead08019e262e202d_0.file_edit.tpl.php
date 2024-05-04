<?php
/* Smarty version 5.0.2, created on 2024-05-04 23:54:51
  from 'file:templates/admin/feedback/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6636a09beb99e2_38515466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3529d923c9f8c2e821bc4ead08019e262e202d' => 
    array (
      0 => 'templates/admin/feedback/edit.tpl',
      1 => 1714856088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6636a09beb99e2_38515466 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\feedback';
?><form method="post" enctype="multipart/form-data">

    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-1 block">Обратная связь</h1>
                            <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5"><?php if ((null !== ($_smarty_tpl->getValue('view')['id_item'] ?? null))) {?>Редактировать <?php } else { ?>Добавить <?php }?>сообщение</span>
                        </div>
                        <div class="flex items-center">
                            <a href="/admin/?mod=feedback&act=view_all" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
                            <button type="submit "
                                    class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить сообщение</button>
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
                    <label class="block text-sm text-gray-900">Имя</label>
                    <div class="mt-2">
                        <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['name'] ?? null))) {
echo $_smarty_tpl->getValue('view')['name'];
}?>" name="name" type="text" placeholder="Введите имя" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                </div>
                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Email</label>
                    <div class="mt-2">
                        <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['email'] ?? null))) {
echo $_smarty_tpl->getValue('view')['email'];
}?>" name="email" type="text" placeholder="Введите email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Телефон</label>
                    <div class="mt-2">
                        <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['phone'] ?? null))) {
echo $_smarty_tpl->getValue('view')['phone'];
}?>" name="phone" type="text" placeholder="Телефон"
                               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                </div>

                <div class="mt-5 flex">
                    <div class="w-2/3">
                        <label class="block text-sm text-gray-900">Раздел</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['module'] ?? null))) {
echo $_smarty_tpl->getValue('view')['module'];
} else { ?>feedback<?php }?>" name="module" type="text" placeholder="Раздел"
                                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                        </div>
                    </div>
                    <div class="ml-2 w-1/3">
                        <label class="block text-sm text-gray-900">Страница</label>
                        <div class="mt-2">
                            <input value="<?php if ((null !== ($_smarty_tpl->getValue('view')['page_id'] ?? null))) {
echo $_smarty_tpl->getValue('view')['page_id'];
}?>" name="page_id" type="text" placeholder="Страница"
                                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>


                </div>

                <div class="flex justify-evenly border mt-5 p-2">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" name="visible" value="1" <?php if ((null !== ($_smarty_tpl->getValue('view')['visible'] ?? null)) && $_smarty_tpl->getValue('view')['visible'] == "1") {?>checked="checked"<?php }?>>
                        <div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
                        </div>
                        <span class="ms-3 text-sm font-medium">Видимость сообщения</span>
                    </label>
                </div>

            </div>


        </div>

        <div class="w-3/4 bg-white shadow rounded p-4 overflow-hidden ml-2">
            <div class="w-12/12">
                <label class="block text-sm text-gray-900">Текст сообщения</label>
                <textarea class="mt-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" rows="3" name="message" placeholder="Сообщение"><?php if ((null !== ($_smarty_tpl->getValue('view')['message'] ?? null))) {
echo $_smarty_tpl->getValue('view')['message'];
}?></textarea>
            </div>
        </div>
    </div>





</form>




<?php }
}
