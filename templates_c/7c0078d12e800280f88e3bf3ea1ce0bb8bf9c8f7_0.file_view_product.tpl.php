<?php
/* Smarty version 5.0.2, created on 2024-07-07 21:56:49
  from 'file:[main]/default/shop/view_product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668ae4f1c2cee0_62149107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c0078d12e800280f88e3bf3ea1ce0bb8bf9c8f7' => 
    array (
      0 => '[main]/default/shop/view_product.tpl',
      1 => 1720378604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668ae4f1c2cee0_62149107 (\Smarty\Template $_smarty_tpl) {
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
					<a href="/shop/<?php echo $_smarty_tpl->getValue('category')['url'];?>
" class="font-bold"><?php echo $_smarty_tpl->getValue('category')['title'];?>
</a>
					<span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
				</li>
				<li class="flex items-center ml-2">
					<?php echo $_smarty_tpl->getValue('product')['title'];?>

				</li>
			</ol>
		</div>



		<div class="grid auto-rows-min grid-cols-12 gap-4 mb-4">
			<div class="col-span-4">
				<h2 class="sr-only">3 картинки</h2>
				<div class="grid grid-cols-6 gap-2">
					<img src="<?php echo $_smarty_tpl->getValue('product')['picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['title'];?>
" class="rounded-lg col-span-6">
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('images')) == 1) {?>
						<?php $_smarty_tpl->assign('colspan', "col-span-6", false, NULL);?>
					<?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('images')) == 2) {?>
						<?php $_smarty_tpl->assign('colspan', "col-span-3", false, NULL);?>
					<?php } else { ?>
						<?php $_smarty_tpl->assign('colspan', "col-span-2", false, NULL);?>
					<?php }?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('image')->value) {
$foreach0DoElse = false;
?>
						<img src="<?php echo $_smarty_tpl->getValue('image')['filename'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['title'];?>
" class="rounded-lg <?php echo $_smarty_tpl->getValue('colspan');?>
">
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="col-span-8">

				<div class="px-4 grid grid-cols-3 gap-4">
					<div class="col-span-2">
						<h1 class="text-2xl font-bold text-[#34445C]"><?php echo $_smarty_tpl->getValue('product')['title'];?>
</h1>

						<div class="border-r border-gray-200 pb-16 pr-8 pt-6">
							<!-- Description and details -->
							<div>
								<h3 class="sr-only">Description</h3>
								<div class="space-y-6">
									<p class="text-sm text-gray-900"><?php echo $_smarty_tpl->getValue('product')['annotation'];?>
</p>
								</div>
							</div>

							<div class="mt-6">
								<h3 class="text-sm font-medium text-gray-900">Характеристики</h3>
								<div class="mt-2">
									<ul role="list" class="list-disc space-y-1 pl-4 text-sm">
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('options'), 'item', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
											<li class="text-gray-400"><?php echo $_smarty_tpl->getValue('item')['title'];?>
: <span class="text-gray-600"><?php echo $_smarty_tpl->getValue('item')['value'];?>
</span></li>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</ul>
								</div>
							</div>

							<div class="mt-6">
								<?php echo $_smarty_tpl->getValue('product')['text'];?>

							</div>

						</div>

					</div>
					<div class="col-span-1">

						<div class="mt-4">
							<h2 class="sr-only">Product information</h2>
							<p class="text-3xl tracking-tight text-gray-900"><?php echo $_smarty_tpl->getValue('product')['price'];?>
 руб.</p>

							<!-- Reviews -->
							<div class="mt-6">
								<h3 class="sr-only">Reviews</h3>
								<div class="flex items-center">
									<div class="flex items-center">
										<!-- Active: "text-gray-900", Default: "text-gray-200" -->
										<svg class="text-[#34445C] h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
										</svg>
										<svg class="text-[#34445C] h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
										</svg>
										<svg class="text-[#34445C] h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
										</svg>
										<svg class="text-[#34445C] h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
										</svg>
										<svg class="text-[#34445C]/20 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
										</svg>
									</div>
									<p class="sr-only">4 out of 5 stars</p>
									<a href="#" class="ml-3 text-sm font-medium text-[#34445C] hover:text-indigo-500">117 отзывов</a>
								</div>
							</div>

							<form class="mt-10">
								<!-- Sizes -->
								<div class="mt-10">
									<div class="flex items-center justify-between">
										<h3 class="text-sm font-medium text-gray-900">Варианты:</h3>
									</div>

									<fieldset class="mt-4">
										<div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variants'), 'variant', false, 'key');
$_smarty_tpl->getVariable('variant')->iteration = 0;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('variant')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('variant')->iteration++;
$foreach2Backup = clone $_smarty_tpl->getVariable('variant');
?>
												<label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none cursor-pointer bg-white text-gray-900 shadow-sm <?php if (!($_smarty_tpl->getVariable('variant')->iteration % 4)) {?>border-indigo-500<?php }?>">
													<input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
													<span id="size-choice-2-label border"><?php echo $_smarty_tpl->getValue('variant')['name'];?>
</span>
													<!--
                                                      Active: "border", Not Active: "border-2"
                                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
													<span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
												</label>
											<?php
$_smarty_tpl->setVariable('variant', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</div>
									</fieldset>
								</div>

								<button class="mt-4 relative w-full inline-flex items-center justify-center text-white overflow-hidden bg-gradient-to-br from-[#34445C] from-10% via-[#7688a5] via-30% to-[#34445C] to-90%
                       shadow-md focus:outline-none rounded uppercase py-3 text-center text-base tracking-wide
                       transition-all before:absolute
                       before:bottom-0 before:left-0 before:top-0
                       before:z-0 before:h-full before:w-0
                       before:bg-[#34445C] before:transition-all
                       before:duration-500 hover:before:left-0
                       hover:before:w-full">
									<span class="relative z-10">В корзину</span>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-6 w-4 h-4 z-10">
										<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
									</svg>
								</button>
							</form>
						</div>


					</div>

				</div>









			</div>





















		</div>


	</div>

</div><?php }
}
