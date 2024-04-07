<?php
/* Smarty version 5.0.2, created on 2024-04-07 11:47:21
  from 'file:templates/admin/menu/view_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66125d99664dc4_21016462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c52635b9d88f0b1f8e98aaf3a417d4fa00e332ed' => 
    array (
      0 => 'templates/admin/menu/view_all.tpl',
      1 => 1712416369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66125d99664dc4_21016462 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\menu';
?><div class="flex flex-wrap">
	<div class="flex items-center py-4 w-full">
		<div class="w-full">
			<div class="">
				<div class="flex flex-wrap justify-between">
					<div class="items-center ">
						<h1 class="font-semibold text-xl mb-1 block">Навигация</h1>
						<span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">Создание/редактиование навигационных разделов сайта</span>
					</div>
					<div class="flex items-center">
						<a rel="modal:open" href="/admin/?mod=menu&act=view_edit_group" class="px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Добавить группу</a>
						<a rel="modal:open" href="/admin/?mod=menu&act=view_edit_group&group_id=<?php echo $_smarty_tpl->getValue('currentGroup')['id_item'];?>
" class="ml-2 px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Редактировать группу</a>
						<?php if ($_smarty_tpl->getValue('currentGroup')['id_item'] != 1) {?>
							<a href="#" data-id="<?php echo $_smarty_tpl->getValue('currentGroup')['id_item'];?>
" data-url="/admin/?mod=menu&act=view_all" data-action="delete_group" data-title="<?php echo $_smarty_tpl->getValue('currentGroup')['title'];?>
" class="delete ml-2 px-3 py-2 lg:px-4 bg-red-600 text-white text-sm font-semibold rounded hover:bg-red-700">Удалить группу</a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="flex flex-wrap">
	<div class="flex items-center py-4 w-full">
		<div class="w-full">

			<div class="bg-white shadow rounded-md h-full w-full p-4 relative overflow-hidden ">


				<div class="mb-4 border-b border-gray-200">
					<ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allGroup'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
							<li class="mr-2" <?php if ($_smarty_tpl->getValue('currentGroup')['id_item'] == $_smarty_tpl->getValue('item')['id_item']) {?>class="active"<?php }?>>
								<a href="/admin/?mod=menu&act=view_all&group_id=<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
" class="inline-block p-4 rounded-t-lg border-b-2 <?php if ($_smarty_tpl->getValue('currentGroup')['id_item'] != $_smarty_tpl->getValue('item')['id_item']) {?>border-transparent hover:text-gray-600 hover:border-gray-300<?php }?>"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</a>
							</li>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</ul>
				</div>


				<div>
					<div class="p-4 rounded-lg">
						
						<div class="dd" id="sort_menu">
							<?php echo $_smarty_tpl->getValue('menu')['menu_ul'];?>

						</div>


						<form method="post" action="/admin/?mod=menu&act=view_all">
							<input type="hidden" class="form-control" value="save_positions" name="action"/>
							<input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->getValue('group_id');?>
" name="group_id"/>
							<textarea id="nestable-output" rows="3" name="v" class="hidden"></textarea>
							<div class="mt-5 flex items- justify-end">
								<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
								<a rel="modal:open" href="/admin/?mod=menu&act=add_menu&group_id=<?php echo $_smarty_tpl->getValue('currentGroup')['id_item'];?>
" class="ml-2 px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Создать пункт меню</a>
							</div>
							
						</form>	

					</div>
				</div>

			</div>

		</div>
	</div>
</div><?php }
}
