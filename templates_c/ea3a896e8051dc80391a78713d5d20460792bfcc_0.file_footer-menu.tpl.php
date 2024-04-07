<?php
/* Smarty version 5.0.2, created on 2024-04-07 12:02:56
  from 'file:default/footer-menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_661261403dba90_43298323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea3a896e8051dc80391a78713d5d20460792bfcc' => 
    array (
      0 => 'default/footer-menu.tpl',
      1 => 1712480572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_661261403dba90_43298323 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default';
?><div class="bg-[#7B8384] sm:px-16 px-6 flex justify-center items-start">
	<div class="xl:max-w-[1280px] w-full">


		<footer class="px-4">

			<div class="flex flex-col lg:flex-row justify-between py-10 mx-auto *:text-white border-b space-y-8 lg:space-y-0">
				<div class="lg:w-2/6 grow flex space-x-3">

					<div class="w-28 h-28">
						<img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/logo.svg"/>
					</div>
					<div class="w-48 pt-3">
						<h3 class="uppercase">Сибирская сова</h3>
						<p class="space-y-1 text-xs italic">Производственный организм, творческих и технологичестких процессов</p>
					</div>

				</div>
				<div class="lg:w-4/6 grow">

					<div class="grid grid-cols-4 text-sm gap-x-3 gap-y-8 max-sm:grid-cols-none">

						<?php if ($_smarty_tpl->getValue('footer_menu')) {?>
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('footer_menu'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
								<div class="space-y-3 max-sm:hidden">
									<h3 class="uppercase"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</h3>
									<?php if ((null !== ($_smarty_tpl->getValue('item')['children'] ?? null)) && is_array($_smarty_tpl->getValue('item')['children'])) {?>
										<ul class="space-y-1">
											<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['children'], 'items', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach1DoElse = false;
?>
												<?php if (!empty($_smarty_tpl->getValue('items')['id_item'])) {?>
													<li><a href="<?php echo $_smarty_tpl->getValue('items')['url'];?>
" rel="noopener noreferrer" class="<?php echo $_smarty_tpl->getValue('items')['class'];?>
" target="<?php if ($_smarty_tpl->getValue('items')['target'] == 1) {?>_blank<?php } else { ?>_self<?php }?>"><?php echo $_smarty_tpl->getValue('items')['title'];?>
</a></li>
												<?php }?>
											<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
										</ul>
									<?php }?>
								</div>


							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						<?php }?>



						<div class="space-y-3">
							<div class="uppercase ">Мы в социальных сетях:</div>
							<div class="flex justify-start space-x-2">
								<a rel="noopener noreferrer" href="<?php echo $_smarty_tpl->getValue('config')['youtube'];?>
" title="youtube" class="flex items-center">
									<img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/youtube.svg" class="w-6"/>
								</a>
								<a rel="noopener noreferrer" href="<?php echo $_smarty_tpl->getValue('config')['facebook'];?>
" title="facebook" class="flex items-center">
									<img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/facebook.svg" class="w-6"/>
								</a>
								<a rel="noopener noreferrer" href="<?php echo $_smarty_tpl->getValue('config')['instagram'];?>
" title="Instagram" class="flex items-center">
									<img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/instagram.svg" class="w-6"/>
								</a>
								<a rel="noopener noreferrer" href="<?php echo $_smarty_tpl->getValue('config')['vk'];?>
" title="vk" class="flex items-center">
									<img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/vk.svg" class="w-6"/>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="py-3 text-xs text-center text-white">© 2024 Сибирская сова. All rights reserved.</div>

		</footer>

	</div>
</div><?php }
}
