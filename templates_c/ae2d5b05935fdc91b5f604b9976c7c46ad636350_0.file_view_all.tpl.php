<?php
/* Smarty version 5.0.2, created on 2024-04-25 19:58:43
  from 'file:[main]/default/projects/view_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_662a8bc37df631_55429908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae2d5b05935fdc91b5f604b9976c7c46ad636350' => 
    array (
      0 => '[main]/default/projects/view_all.tpl',
      1 => 1714064320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/feedback/feedback_form.tpl' => 1,
  ),
))) {
function content_662a8bc37df631_55429908 (\Smarty\Template $_smarty_tpl) {
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
					Проекты
				</li>
			</ol>
		</div>

		<div class="w-full block flex flex-row justify-between items-end mt-4 *:text-[#34445C]">
			<div class="text-3xl">Проекты</div>
		</div>
		<div class="flex flex-wrap -mx-4">


			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('content'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/5 p-4">
					<a href="/projects/<?php echo $_smarty_tpl->getValue('item')['url'];?>
" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
						<div class="relative h-80 overflow-hidden rounded-lg">
							<img class="absolute inset-0 h-full w-full object-cover" src="<?php echo $_smarty_tpl->getValue('item')['picture'];?>
" alt="">
							<div class="absolute top-0 right-0 bg-[#34445C] text-white px-3 py-0.5 m-2 rounded-md text-xs">В РАБОТЕ</div>

						</div>
						<div class="py-2 px-4 border-b *:text-[#34445C] h-24">
							<h2 class="mb-2 text-sm font-bold"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</h2>
							<p class="text-xs"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['meta_description'],30);?>
</p>
						</div>
					</a>
				</div>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

		</div>



		<?php $_smarty_tpl->renderSubTemplate("file:default/feedback/feedback_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

	</div>
</div>



<?php }
}
