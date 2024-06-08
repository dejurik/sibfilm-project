<?php
/* Smarty version 5.0.2, created on 2024-06-03 22:21:03
  from 'file:default/header-menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_665e179f3f2543_64940196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a73d689099a2a94912323312ee4fc8ffa48c90' => 
    array (
      0 => 'default/header-menu.tpl',
      1 => 1717442459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665e179f3f2543_64940196 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default';
?><div class="sm:px-16 px-6 relative flex items-start justify-center overflow-hidden bg-[#cccccc]/5">
	<div class="xl:max-w-[1280px] w-full z-30">

		<div class="w-full block flex flex-row justify-between w-auto bg-[#34445D] py-1.5 px-3 z-10">
			<div class="*:text-xs *:text-white *:italic max-[435px]:hidden">
				<span class="block">Дополнительная информация</span>
			</div>
			<div class="*:text-xs *:text-white *:italic flex justify-start items-center">
				<span>Мы в соцсетях: </span>
				<div class="*:text-xs *:text-white *:italic *:ml-1.5 flex justify-start">
					<a href="<?php echo $_smarty_tpl->getValue('config')['youtube'];?>
" ><img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/youtube.svg" class="w-3.5"/></a>
					<a href="<?php echo $_smarty_tpl->getValue('config')['facebook'];?>
" ><img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/facebook.svg" class="w-3.5"/></a>
					<a href="<?php echo $_smarty_tpl->getValue('config')['instagram'];?>
" ><img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/instagram.svg" class="w-3.5"/></a>
					<a href="<?php echo $_smarty_tpl->getValue('config')['vk'];?>
" ><img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/vk.svg" class="w-3.5"/></a>
				</div>
			</div>
		</div>


		<nav class="flex items-center justify-between flex-wrap py-4 border-b border-[#34445C] z-10">
			<div class="w-full flex justify-start flex-wrap">
				<div class="grow-0 max-sm:w-4/12">
					<a href="/" ><img src="/templates/app/<?php echo $_smarty_tpl->getValue('template');?>
/images/logo_243c5a.svg"/></a>
				</div>

				<ul id="menu" class="hidden fixed top-0 right-0 px-10 py-16 bg-gray-800 z-50 w-full h-screen *:my-2">
					<li class="md:hidden z-90 fixed top-4 right-6">
						<a href="javascript:void(0)" class="text-right text-white text-4xl" onclick="toggleMenu()">&times;</a>
					</li>

					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('main_menu'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
						<?php if ($_smarty_tpl->getValue('item')['parent_id'] == 0) {?>
							<?php if (!empty($_smarty_tpl->getValue('item')['id_item'])) {?>
								<li>
									<a href="<?php echo $_smarty_tpl->getValue('item')['url'];?>
" target="<?php if ($_smarty_tpl->getValue('item')['target'] == 1) {?>_blank<?php } else { ?>_self<?php }?>" class="block text-lg px-4 py-2 rounded-full text-white hover:text-[#34445C] hover:bg-white lg:mt-0 mr-5 <?php echo $_smarty_tpl->getValue('item')['class'];?>
">
										<?php echo $_smarty_tpl->getValue('item')['title'];?>

									</a>
								</li>
							<?php }?>
						<?php }?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

					<li>
						<a href="/users/" class="block text-lg px-4 py-2 border rounded-full text-white border-white hover:border-transparent hover:text-[#34445C] hover:bg-white lg:mt-0 mr-5">Личный кабинет</a>
					</li>

				</ul>

				<div class="grow max-sm:w-8/12 flex justify-end items-center">
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('main_menu'), 'item', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
						<?php if ($_smarty_tpl->getValue('item')['parent_id'] == 0) {?>
							<?php if (!empty($_smarty_tpl->getValue('item')['id_item'])) {?>
								<a href="<?php echo $_smarty_tpl->getValue('item')['url'];?>
" target="<?php if ($_smarty_tpl->getValue('item')['target'] == 1) {?>_blank<?php } else { ?>_self<?php }?>" class="max-sm:hidden max-[958px]:hidden block text-sm px-4 py-2 leading-none rounded-full text-[#34445C] hover:text-white hover:bg-[#34445C] lg:mt-0 mr-5 <?php echo $_smarty_tpl->getValue('item')['class'];?>
">
									<?php echo $_smarty_tpl->getValue('item')['title'];?>

								</a>
							<?php }?>
						<?php }?>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

					<a href="/users/" class="max-sm:hidden block text-sm px-4 py-2 leading-none border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] lg:mt-0">Личный кабинет</a>

					<button class="sm:hidden px-3 py-2 border rounded text-[#34445C] border-[#34445C] hover:text-white hover:bg-[#34445C]" onclick="toggleMenu()">
						<svg class="h-3 w-3 bg-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
					</button>

				</div>
			</div>

		</nav>

	</div>

</div><?php }
}
