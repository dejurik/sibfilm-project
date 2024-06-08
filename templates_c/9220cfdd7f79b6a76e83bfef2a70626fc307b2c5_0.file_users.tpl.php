<?php
/* Smarty version 5.0.2, created on 2024-06-08 22:16:58
  from 'file:templates/admin/config/users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6664ae2a5006c3_34014542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9220cfdd7f79b6a76e83bfef2a70626fc307b2c5' => 
    array (
      0 => 'templates/admin/config/users.tpl',
      1 => 1717874213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin/ckeditor.tpl' => 1,
  ),
))) {
function content_6664ae2a5006c3_34014542 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\config';
$_smarty_tpl->renderSubTemplate("file:templates/admin/ckeditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">
        <div class="w-full">
            <div class="">
                <div class="flex flex-wrap justify-between">
                    <div class="items-center ">
                        <h1 class="font-semibold text-xl mb-1 block">Настройки пользователей</h1>
                        <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">Создание/редактирование пользователей</span>
                    </div>
                    <div class="flex items-center">

                        <a href="/admin/?mod=config&act=user"
                                class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Добавить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-wrap">
    <div class="flex py-4 w-full items-start">

        <div class="bg-white shadow rounded-md h-full w-3/4 p-4 relative overflow-hidden">


            <form method="GET" action="">
            <div class="inline-flex rounded shadow-sm mb-4 float-right" role="group">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_roles'), 'item', true, 'key');
$_smarty_tpl->getVariable('item')->iteration = 0;
$_smarty_tpl->getVariable('item')->index = -1;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('item')->iteration++;
$_smarty_tpl->getVariable('item')->index++;
$_smarty_tpl->getVariable('item')->first = !$_smarty_tpl->getVariable('item')->index;
$_smarty_tpl->getVariable('item')->last = $_smarty_tpl->getVariable('item')->iteration === $_smarty_tpl->getVariable('item')->total;
$foreach0Backup = clone $_smarty_tpl->getVariable('item');
?>
                    <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('params'=>array('role_id'=>$_smarty_tpl->getValue('item')['id_item'],'keyword'=>null)), $_smarty_tpl);?>
" class="<?php if ($_smarty_tpl->getVariable('item')->first) {?>rounded-l-lg border<?php }
if ($_smarty_tpl->getVariable('item')->last) {?>border<?php }
if (!$_smarty_tpl->getVariable('item')->last && !$_smarty_tpl->getVariable('item')->first) {?>border-b border-t<?php }?>  py-2 px-4 text-sm font-medium text-gray-900 bg-transparent border-gray-300 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-300 focus:text-gray-900">
                        <?php echo $_smarty_tpl->getValue('item')['name'];?>

                    </a>
                <?php
$_smarty_tpl->setVariable('item', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                <input value="config" name="mod" type="hidden">
                <input value="users" name="act" type="hidden">
                <?php if ((null !== ($_smarty_tpl->getValue('role_id') ?? null))) {?><input value="<?php echo $_smarty_tpl->getValue('role_id');?>
" name="role_id" type="hidden"><?php }?>
                <input value="" name="keyword" type="text" placeholder="Поиск пользователя" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-300 py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                <button type="submit" class="whitespace-nowrap py-2 px-4 text-sm font-medium text-gray-900 bg-transparent border-b border-t border-l border-gray-300 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-300 focus:text-gray-900">
                    Поиск
                </button>
                <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('params'=>array('role_id'=>null,'keyword'=>null)), $_smarty_tpl);?>
" class="border rounded-r-md py-2 px-4 text-sm font-medium text-gray-900 bg-transparent border-gray-300 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-300 focus:text-gray-900">
                    Сбросить
                </a>
            </div>
            </form>

            <table class="min-w-full">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-2/6">
                        Заголовок
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/6">
                        Ссылка
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/6">
                        Статус
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/6">
                        Роль
                    </th>
                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/6"></th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'item', true, 'key');
$_smarty_tpl->getVariable('item')->iteration = 0;
$_smarty_tpl->getVariable('item')->index = -1;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('item')->iteration++;
$_smarty_tpl->getVariable('item')->index++;
$_smarty_tpl->getVariable('item')->first = !$_smarty_tpl->getVariable('item')->index;
$_smarty_tpl->getVariable('item')->last = $_smarty_tpl->getVariable('item')->iteration === $_smarty_tpl->getVariable('item')->total;
$foreach1Backup = clone $_smarty_tpl->getVariable('item');
?>
                    <tr class="bg-white border-b border-dashed">
                        <td class="p-3 text-sm font-medium whitespace-nowrap">
                            <a href="/admin/?mod=pages&act=page&id=<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
" class="text-blue-500"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</a>
                        </td>
                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                            <?php echo $_smarty_tpl->getValue('item')['email'];?>

                        </td>
                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap inline-flex items-center mt-2">

                            <?php if ($_smarty_tpl->getValue('item')['enabled'] == 1) {?>
                                <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                    </span>
                            <?php } else { ?>
                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                    </span>
                            <?php }?>
                            <span class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 mt-0 rounded">
								ID (<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
)
							</span>
                        </td>
                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                            <?php echo $_smarty_tpl->getValue('item')['role_name'];?>

                        </td>
                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap text-right">


                            <a href="/admin/?mod=config&act=user&id=<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
" class="inline-flex items-center px-2 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>

                            <a href="#" class="delete inline-flex items-center px-2 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md" data-id="<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
" data-action="delete" data-url="/admin/?mod=config&act=users" data-title="<?php echo $_smarty_tpl->getValue('item')['name'];?>
">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->setVariable('item', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>




        </div>
        <div class="ml-4 bg-white shadow rounded-md w-1/4 relative overflow-hidden ">

            <div class="border-b border-gray-300 border-dashed p-4">
                <h4 class="">Другие разделы</h4>
            </div>

            <div class="p-4">
                <a href="/admin/?mod=config&act=view_all" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
                    Общие настройки
                </a>
                <a href="#" class="mb-4 font-medium text-black bg-gray-100 rounded text-sm px-3 py-3 mr-2 w-full block cursor-default" disabled>
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

<?php }
}
