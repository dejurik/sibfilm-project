<?php
/* Smarty version 5.0.2, created on 2024-04-07 16:21:26
  from 'file:default/sliders/index_sliders.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66129dd60b4329_24028274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff0b11ac1676eead986bea20fce2da07c15b89a0' => 
    array (
      0 => 'default/sliders/index_sliders.tpl',
      1 => 1712496081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66129dd60b4329_24028274 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default\\sliders';
if ($_smarty_tpl->getValue('sliders')) {?>
	<div class="sm:px-16 px-6 flex justify-center items-center bg-gradient-to-b from-[#cccccc]/5">
		<div class="xl:max-w-[1280px] w-full z-50">
			<?php if ($_smarty_tpl->getValue('sliders')['url']) {?>
				<a href="1">
					<video playsinline autoplay muted loop poster="<?php echo $_smarty_tpl->getValue('sliders')['image'];?>
"
						   class="block z-10 w-auto my-3">
						<source src="<?php echo $_smarty_tpl->getValue('sliders')['videofile'];?>
" type="video/webm">
					</video>
				</a>
			<?php } else { ?>
				<video playsinline autoplay muted loop poster="<?php echo $_smarty_tpl->getValue('sliders')['image'];?>
"
					   class="block z-10 w-auto my-3">
					<source src="<?php echo $_smarty_tpl->getValue('sliders')['videofile'];?>
" type="video/webm">
				</video>
			<?php }?>
		</div>
	</div>
<?php }
}
}
