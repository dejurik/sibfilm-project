<?php
/* Smarty version 5.0.2, created on 2024-04-06 18:22:25
  from 'file:templates/admin/menu/menu_group_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_661168b13cc6d4_03672218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fd426443986cb9165922e27882303bf13cde472' => 
    array (
      0 => 'templates/admin/menu/menu_group_edit.tpl',
      1 => 1712416938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_661168b13cc6d4_03672218 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\menu';
?><form method="post" action="/admin/?mod=menu&act=view_all">
		<div class="">
				<input type="hidden" class="form-control" value="<?php if (!empty($_smarty_tpl->getValue('groupId'))) {
echo $_smarty_tpl->getValue('groupId')['id_item'];
}?>" name="group_id"/>
				<input type="hidden" class="form-control" value="edit_group_menu" name="action"/>
				<label class="block text-sm text-gray-900">Заголовок</label>

				<div class="mt-2">
						<input value="<?php if ((null !== ($_smarty_tpl->getValue('groupId')['title'] ?? null))) {
echo $_smarty_tpl->getValue('groupId')['title'];
}?>" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
				</div>
		</div>

		<div class="mt-5 flex items- justify-end">
			<a href="#" rel="modal:close" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Отмена</a>
			<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
		</div>

</form><?php }
}
