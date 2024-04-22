<?php
/* Smarty version 5.0.2, created on 2024-04-22 20:59:45
  from 'file:[main]/default/pages/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6626a5911a4cd2_08778478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f849695ed5609921c767dc29dfdce1c5d27257bf' => 
    array (
      0 => '[main]/default/pages/view.tpl',
      1 => 1713808576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/feedback/feedback_form.tpl' => 1,
  ),
))) {
function content_6626a5911a4cd2_08778478 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\\\default\\pages';
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
					<?php echo $_smarty_tpl->getValue('content')['title'];?>

				</li>
			</ol>
		</div>


		<?php if ($_smarty_tpl->getValue('content')['url'] != 'services') {?>
			<div class="w-full h-40 bg-[#34445d] rounded-lg my-3 relative block">
				<div class="absolute bottom-7 left-7 *:text-white">
					<div class="text-2xl font-bold no-underline max-md:text-base"><?php echo $_smarty_tpl->getValue('content')['title'];?>
</div>
					<div class="text-sm hidden lg:block"><?php echo $_smarty_tpl->getValue('content')['meta_description'];?>
</div>
				</div>
			</div>
			<div class="w-full my-10 flex items-start justify-center">
				<div class="xl:max-w-[1000px] w-full *:text-[#34445d]">
					<div class="">
						<?php echo $_smarty_tpl->getValue('content')['text'];?>

					</div>
				</div>
			</div>
		<?php } else { ?>
			<div class="flex flex-row w-full block w-auto bg-[#F3F3F3]/20 mb-8 max-sm:py-4">
				<?php echo $_smarty_tpl->getValue('content')['text'];?>

			</div>
		<?php }?>


		<?php $_smarty_tpl->renderSubTemplate("file:default/feedback/feedback_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

	</div>
</div>



<?php }
}
