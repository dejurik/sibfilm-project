<?php
/* Smarty version 5.0.2, created on 2024-03-31 22:57:55
  from 'file:[admin]/default/menu/view_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6609c04320a113_91960016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3845a4289acbbb9249668f0e4c7acfd8a77d071f' => 
    array (
      0 => '[admin]/default/menu/view_all.tpl',
      1 => 1711915068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6609c04320a113_91960016 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\admin\\templates\\\\default\\menu';
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
						<a href="/admin/?mod=pages&act=page" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Создать пункт меню</a>
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


				<div class="mb-4 border-b border-gray-200 dark:border-slate-700">
					<ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
						<li class="mr-2" role="presentation">
							<button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
						</li>
						<li class="mr-2" role="presentation">
							<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
						</li>
						<li class="mr-2" role="presentation">
							<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
						</li>
						<li role="presentation">
							<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
						</li>
					</ul>
				</div>
				<div id="myTabContent">
					<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<p class="text-sm text-gray-500 dark:text-gray-400">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					</div>
					<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
						<p class="text-sm text-gray-500 dark:text-gray-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
					<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
						<p class="text-sm text-gray-500 dark:text-gray-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
					</div>
					<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
						<p class="text-sm text-gray-500 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
					</div>
				</div>


			</div>

		</div>
	</div>
</div>


<div class="dd" id="sort_menu">
	<ol class="dd-list">
		<li class="dd-item" data-id="1">
			<div class="dd-handle">Item 1</div>
		</li>
		<li class="dd-item" data-id="2">
			<div class="dd-handle">Item 2</div>
		</li>
		<li class="dd-item" data-id="3">
			<div class="dd-handle">Item 3</div>
			<ol class="dd-list">
				<li class="dd-item" data-id="4">
					<div class="dd-handle">Item 4</div>
				</li>
				<li class="dd-item" data-id="5" data-foo="bar">
					<div class="dd-nodrag">Item 5</div>
				</li>
			</ol>
		</li>
	</ol>
</div>
<textarea id="nestable-output" rows="3" name="v"></textarea>

<style>
	.dd{position:relative;display:block;margin:0;padding:0;max-width:600px;list-style:none;font-size:13px;line-height:20px}.dd-list{display:block;position:relative;margin:0;padding:0;list-style:none}.dd-list .dd-list{padding-left:30px}.dd-empty,.dd-item,.dd-placeholder{display:block;position:relative;margin:0;padding:0;min-height:20px;font-size:13px;line-height:20px}.dd-handle{display:block;height:30px;margin:5px 0;padding:5px 10px;color:#333;text-decoration:none;font-weight:700;border:1px solid #ccc;background:#fafafa;border-radius:3px;box-sizing:border-box}.dd-handle:hover{color:#2ea8e5;background:#fff}.dd-item>button{position:relative;cursor:pointer;float:left;width:25px;height:20px;margin:5px 0;padding:0;text-indent:100%;white-space:nowrap;overflow:hidden;border:0;background:0 0;font-size:12px;line-height:1;text-align:center;font-weight:700}.dd-item>button:before{display:block;position:absolute;width:100%;text-align:center;text-indent:0}.dd-item>button.dd-expand:before{content:'+'}.dd-item>button.dd-collapse:before{content:'-'}.dd-expand{display:none}.dd-collapsed .dd-collapse,.dd-collapsed .dd-list{display:none}.dd-collapsed .dd-expand{display:block}.dd-empty,.dd-placeholder{margin:5px 0;padding:0;min-height:30px;background:#f2fbff;border:1px dashed #b6bcbf;box-sizing:border-box;-moz-box-sizing:border-box}.dd-empty{border:1px dashed #bbb;min-height:100px;background-color:#e5e5e5;background-size:60px 60px;background-position:0 0,30px 30px}.dd-dragel{position:absolute;pointer-events:none;z-index:9999}.dd-dragel>.dd-item .dd-handle{margin-top:0}.dd-dragel .dd-handle{box-shadow:2px 4px 6px 0 rgba(0,0,0,.1)}.dd-nochildren .dd-placeholder{display:none}
</style>





<?php }
}
