<?php
/* Smarty version 5.0.2, created on 2024-07-03 19:01:16
  from 'file:[main]/default/shop/view_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668575ccc76483_97539331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c8ef6e06529411a65b559c6285755b67faa0dec' => 
    array (
      0 => '[main]/default/shop/view_all.tpl',
      1 => 1720022473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/pagination.tpl' => 1,
    'file:default/feedback/feedback_form.tpl' => 1,
  ),
))) {
function content_668575ccc76483_97539331 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\\\default\\shop';
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
					<a href="/shop" class="font-bold">Наш продукт</a>
					<span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
				</li>
				<li class="flex items-center ml-2">
					<?php echo $_smarty_tpl->getValue('category')['title'];?>

				</li>
			</ol>
		</div>

		<div class="w-full h-32 bg-[#34445d] rounded-lg my-3 relative block">
			<div class="absolute bottom-7 left-7 *:text-white">
				<div class="text-2xl font-bold underline max-md:text-base"><?php echo $_smarty_tpl->getValue('category')['title'];?>
</div>
				<div class="text-sm hidden lg:block"><?php echo $_smarty_tpl->getValue('category')['text'];?>
</div>
			</div>
		</div>



		<div class="w-full grid grid-cols-4 gap-4">

			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
				<div class="w-full">
					<div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
						<div class="relative h-44 overflow-hidden rounded-lg m-2">
							<img class="absolute inset-0 h-full w-full object-cover" src="<?php echo $_smarty_tpl->getValue('item')['picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('item')['title'];?>
">
							<div class="absolute top-0 right-0 bg-[#34445C] text-white px-3 py-0.5 m-2 rounded-md text-xs"><?php if ($_smarty_tpl->getValue('item')['price'] == 0) {?>Бесплатно<?php } else { ?>Доступно к продаже<?php }?></div>

							<div class="absolute top-0 left-0 bg-[#df4159] text-white p-2 m-2 rounded-md text-xs">
								<?php if ($_smarty_tpl->getValue('item')['type_id'] == 'video') {?>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
									</svg>
								<?php } elseif ($_smarty_tpl->getValue('item')['type_id'] == 'audio') {?>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
									</svg>
								<?php } elseif ($_smarty_tpl->getValue('item')['type_id'] == 'product') {?>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
									<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
								</svg>
								<?php }?>
							</div>


						</div>
						<div class="pb-3 px-4 border-b text-center *:text-[#34445C]">
							<h2 class="mb-2 text-sm font-bold"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</h2>
							<p class="text-xs"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['annotation'],30);?>
</p>
						</div>
						<div class="p-4 mx-1">
							<a href="/shop/view/<?php echo $_smarty_tpl->getValue('item')['id_item'];?>
" class="block w-full px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0 text-center text-xs">Подробнее</a>

													</div>
					</div>
				</div>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

		</div>



		<?php $_smarty_tpl->renderSubTemplate("file:default/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>



		<!-- This is an example component -->






		<?php $_smarty_tpl->renderSubTemplate("file:default/feedback/feedback_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

	</div>
</div>



<?php }
}
