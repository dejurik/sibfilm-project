<?php
/* Smarty version 5.0.2, created on 2024-05-02 16:47:41
  from 'file:templates/admin/projects/edit_staff.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6633997d428396_62395528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6ff65b3a1f83bb0ce4c8aab7deb2741db696ef8' => 
    array (
      0 => 'templates/admin/projects/edit_staff.tpl',
      1 => 1714657506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6633997d428396_62395528 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\projects';
?><form method="post" action="/admin/?mod=projects&act=view_all">
		<div class="">
				<input type="hidden" class="form-control" value="<?php if ((null !== ($_smarty_tpl->getValue('staff')['id_item'] ?? null))) {
echo $_smarty_tpl->getValue('staff')['id_item'];
}?>" name="id"/>
				<input type="hidden" class="form-control" value="<?php if ((null !== ($_smarty_tpl->getValue('staff')['id_item'] ?? null))) {?>edit_staff<?php } else { ?>add_staff<?php }?>" name="action"/>
				<label class="block text-sm text-gray-900">Заголовок</label>
				<div class="mt-2">
					<input value="<?php if ((null !== ($_smarty_tpl->getValue('staff')['title'] ?? null))) {
echo $_smarty_tpl->getValue('staff')['title'];
}?>" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
				</div>
		</div>
		<div class="mt-5">
				<label class="block text-sm text-gray-900">Должность</label>
				<div class="mt-2">
					<input value="<?php if ((null !== ($_smarty_tpl->getValue('staff')['post'] ?? null))) {
echo $_smarty_tpl->getValue('staff')['post'];
}?>" name="post" type="text" placeholder="Введите должность" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required>
				</div>
		</div>

		<div class="mt-5">
			<label class="block text-sm text-gray-900">Аватар</label>
			<div class="flex items-center py-4 w-full">

				<div class="w-2/12 block rounded-full" id="staff_avatar">
					<?php if ((null !== ($_smarty_tpl->getValue('staff')['avatar'] ?? null))) {?>
						<div class="cropme" style="width: 100px; height: 100px;">
							<img src="<?php echo $_smarty_tpl->getValue('staff')['avatar'];?>
">
							<input name="old_picture"  value="<?php if ((null !== ($_smarty_tpl->getValue('staff')['avatar'] ?? null))) {
echo $_smarty_tpl->getValue('staff')['avatar'];
}?>" type="hidden"/>
						</div>
					<?php } else { ?>
						<div class="cropme" style="width: 100px; height: 100px;"></div>
					<?php }?>
				</div>

			</div>

			
				<?php echo '<script'; ?>
>
					$('.cropme').simpleCropper();
				<?php echo '</script'; ?>
>
			
		</div>

		<div class="mt-5 flex items- justify-end">
			<a href="#" rel="modal:close" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Отмена</a>
			<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
		</div>


</form>
<?php }
}
