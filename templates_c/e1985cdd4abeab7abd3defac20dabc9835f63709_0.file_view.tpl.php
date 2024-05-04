<?php
/* Smarty version 5.0.2, created on 2024-05-04 21:27:39
  from 'file:[main]/default/projects/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66367e1bba2361_53027476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1985cdd4abeab7abd3defac20dabc9835f63709' => 
    array (
      0 => '[main]/default/projects/view.tpl',
      1 => 1714847256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/feedback/comments_form.tpl' => 1,
    'file:default/feedback/feedback_form.tpl' => 1,
  ),
))) {
function content_66367e1bba2361_53027476 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\\\default\\projects';
?><div class="sm:px-16 px-6 flex justify-center items-center bg-gradient-to-b from-[#cccccc]/5">
	<div class="xl:max-w-[1280px] w-full">


		<div class="w-full my-3 py-2 px-4 bg-[#F3F3F3] ">
			<ol class="flex items-center text-[#34445C] *:text-xs">
				<li class="flex items-center">
					<a href="/" class="font-bold">Главная</a>
					<span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
				</li>
				<li class="flex items-center ml-2">
					<a href="/projects" class="font-bold">Проекты</a>
					<span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
				</li>
				<li class="flex items-center ml-2">
					<?php echo $_smarty_tpl->getValue('content')['title'];?>

				</li>
			</ol>
		</div>





		<div class="w-full h-120 rounded-lg block mb-8 bg-gradient-to-br from-[#34445C] from-10% via-[#7688a5] via-30% to-[#34445C] to-90%">

			<div class="flex flex-wrap *:text-white py-4 px-4">

				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-2/6 p-4">
					<div class="relative h-[500px] overflow-hidden rounded-lg">
						<img class="absolute inset-0 h-full w-full object-cover" src="<?php echo $_smarty_tpl->getValue('content')['picture'];?>
" alt="">
						<div class="absolute top-0 right-0 bg-[#34445C] text-white px-3 py-0.5 m-2 rounded-md text-xs">В РАБОТЕ</div>
					</div>
				</div>

				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-3/6 py-4 pl-4 pr-8">
					<div class="text-2xl mb-2"><?php echo $_smarty_tpl->getValue('content')['title'];?>
</div>

					<?php echo $_smarty_tpl->getValue('content')['description'];?>


					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('project_staffs')) > 0) {?>
						<div class="grid xl:grid-cols-6 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-3 mt-20">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('project_staffs'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
								<div class="space-y-1.5">
									<img src="<?php echo $_smarty_tpl->getValue('item')['avatar'];?>
"  class="mx-auto w-20 rounded-full">
									<p class="text-xs text-center"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</p>
									<p class="text-[0.6em] text-center text-gray-300 leading-3"><?php echo $_smarty_tpl->getValue('item')['post'];?>
</p>
								</div>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</div>
					<?php }?>

				</div>

				<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('project_options')) > 0) {?>
				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/6 my-4 pl-4 xl:border-l">
					<dl>
						<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('project_options'), 'item', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
							<dt class="text-xs text-gray-300"><?php echo $_smarty_tpl->getValue('item')['title'];?>
:</dt>
							<dd class="text-sm mb-8"><?php echo $_smarty_tpl->getValue('item')['value'];?>
</dd>
						<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</dl>
				</div>
				<?php }?>

			</div>



		</div>

		<div class="w-full my-10 flex items-start justify-center">
			<div class="xl:max-w-[1000px] w-full *:text-[#34445d]">
				<div class="">
					<?php echo $_smarty_tpl->getValue('content')['text'];?>

				</div>

				<?php if ($_smarty_tpl->getValue('content')['comments'] == 1) {?>
					<hr class="mt-12 my-2 border-gray-200">
					<div class="w-full mt-6 mx-auto">
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('comments'), 'itemc', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('itemc')->value) {
$foreach2DoElse = false;
?>
						<div class="flex-col w-full py-4 px-4 mx-auto <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>"bg-[#F3F3F3],bg-white"), $_smarty_tpl);?>
 border-b-2 border-r-2 border-gray-200 rounded-lg shadow-sm mb-4">
							<div class="flex flex-row md-10">
								<div class="flex-col mt-1">
									<div class="flex items-center flex-1 px-4 font-bold leading-tight">
										<?php echo $_smarty_tpl->getValue('itemc')['name'];?>

										<span class="ml-2 text-xs font-normal text-gray-500"><?php echo $_smarty_tpl->getValue('itemc')['created'];?>
</span>
									</div>
									<div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
										<?php echo $_smarty_tpl->getValue('itemc')['message'];?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>

			</div>
		</div>






		<?php if ($_smarty_tpl->getValue('content')['comments'] == 1) {?>
			<?php $_smarty_tpl->renderSubTemplate("file:default/feedback/comments_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->renderSubTemplate("file:default/feedback/feedback_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
		<?php }?>


	</div>

</div>





<?php }
}
