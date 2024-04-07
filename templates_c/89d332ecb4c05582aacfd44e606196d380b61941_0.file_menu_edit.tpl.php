<?php
/* Smarty version 5.0.2, created on 2024-04-06 16:15:34
  from 'file:templates/admin/menu/menu_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66114af69982a2_75697542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d332ecb4c05582aacfd44e606196d380b61941' => 
    array (
      0 => 'templates/admin/menu/menu_edit.tpl',
      1 => 1712409243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66114af69982a2_75697542 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\menu';
?><form method="post" action="/admin/?mod=menu&act=view_all">
		<div class="">
				<input type="hidden" class="form-control" value="<?php if ((null !== ($_smarty_tpl->getValue('view_m') ?? null))) {
echo $_smarty_tpl->getValue('view_m')['id_item'];
}?>" name="id_item"/>
				<input type="hidden" class="form-control" value="<?php if ((null !== ($_smarty_tpl->getValue('view_m') ?? null))) {?>edit_menu<?php } else { ?>add_menu<?php }?>" name="action"/>
				<input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->getValue('group_id');?>
" name="group_id"/>
				<label class="block text-sm text-gray-900">Заголовок</label>
				<div class="mt-2">
						<input value="<?php if ((null !== ($_smarty_tpl->getValue('view_m')['title'] ?? null))) {
echo $_smarty_tpl->getValue('view_m')['title'];
}?>" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
				</div>
		</div>
		<div class="mt-5">
				<label class="block text-sm text-gray-900">Ссылка</label>
				<div class="mt-2">
						<input value="<?php if ((null !== ($_smarty_tpl->getValue('view_m')['url'] ?? null))) {
echo $_smarty_tpl->getValue('view_m')['url'];
}?>" name="url" type="text" placeholder="Введите ссылку" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required>
				</div>
		</div>

		<div class="mt-5">
				<label class="block text-sm text-gray-900">Открытие пункта меню</label>
				<div class="mt-2 relative">
						<select name="link_target" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
							<option value="1" <?php if ((null !== ($_smarty_tpl->getValue('view_m') ?? null)) && $_smarty_tpl->getValue('view_m')['target'] == 1) {?>selected="selected"<?php }?>>Новое окно</option>
							<option value="2" <?php if ((null !== ($_smarty_tpl->getValue('view_m') ?? null)) && $_smarty_tpl->getValue('view_m')['target'] == 2 || !(null !== ($_smarty_tpl->getValue('view_m') ?? null))) {?>selected="selected"<?php }?>>Текущее окно</option>
						</select>
						<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
						</div>
				</div>
		</div>

		<div class="mt-5">
				<label class="block text-sm text-gray-900">Стиль пункта меню</label>
				<div class="mt-2 relative">
						<select name="link_class" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
								<option value="2" <?php if ((null !== ($_smarty_tpl->getValue('view_m') ?? null)) && $_smarty_tpl->getValue('view_m')['class'] == 2) {?>selected="selected"<?php }?>>Выделенный</option>
								<option value="3" <?php if ((null !== ($_smarty_tpl->getValue('view_m') ?? null)) && $_smarty_tpl->getValue('view_m')['class'] == 3) {?>selected="selected"<?php }?>>Особый</option>
								<option value="1" <?php if ((null !== ($_smarty_tpl->getValue('view_m') ?? null)) && $_smarty_tpl->getValue('view_m')['class'] == 1 || !(null !== ($_smarty_tpl->getValue('view_m') ?? null))) {?>selected="selected"<?php }?>>По умолчанию</option>
						</select>
						<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
						</div>
				</div>
		</div>

		<div class="mt-5 flex items- justify-end">
			<a href="#" rel="modal:close" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Отмена</a>
			<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
		</div>

</form><?php }
}
