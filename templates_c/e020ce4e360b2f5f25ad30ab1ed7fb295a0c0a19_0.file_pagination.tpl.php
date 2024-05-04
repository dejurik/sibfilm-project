<?php
/* Smarty version 5.0.2, created on 2024-05-02 16:48:06
  from 'file:templates/admin/pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6633999659e5e7_83408578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e020ce4e360b2f5f25ad30ab1ed7fb295a0c0a19' => 
    array (
      0 => 'templates/admin/pagination.tpl',
      1 => 1712755164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6633999659e5e7_83408578 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin';
if ($_smarty_tpl->getValue('pages_count') > 1) {?>

<div class="text-center mt-3">
	<ul class="inline-flex -space-x-px list-inside my-2">
		<?php $_smarty_tpl->assign('visible_pages', 11, false, NULL);?>
		
		<?php $_smarty_tpl->assign('page_from', 1, false, NULL);?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"floor(x/y)",'x'=>$_smarty_tpl->getValue('visible_pages'),'y'=>2,'assign'=>"floor_visible_pages"), $_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"max(1,x-y-z)",'x'=>$_smarty_tpl->getValue('current_page'),'y'=>$_smarty_tpl->getValue('floor_visible_pages'),'z'=>1,'assign'=>"max_page_from"), $_smarty_tpl);?>


		<?php if ($_smarty_tpl->getValue('current_page') > $_smarty_tpl->getValue('floor_visible_pages')) {?>
		<?php ob_start();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"max(1,x-y-z)",'x'=>$_smarty_tpl->getValue('current_page'),'y'=>$_smarty_tpl->getValue('floor_visible_pages'),'z'=>1), $_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->assign('page_from', $_prefixVariable1, false, NULL);?>
	<?php }?>

		<?php ob_start();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"ceil(x/y)",'x'=>$_smarty_tpl->getValue('visible_pages'),'y'=>2), $_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->getValue('current_page') > $_smarty_tpl->getValue('pages_count')-$_prefixVariable2) {?>
		<?php ob_start();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"max(1,x-y-z)",'x'=>$_smarty_tpl->getValue('pages_count'),'y'=>$_smarty_tpl->getValue('visible_pages'),'z'=>1), $_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->assign('page_from', $_prefixVariable3, false, NULL);?>
	<?php }?>
		
		<?php ob_start();
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"min(x+y, z-1)",'x'=>$_smarty_tpl->getValue('page_from'),'y'=>$_smarty_tpl->getValue('visible_pages'),'z'=>$_smarty_tpl->getValue('pages_count')), $_smarty_tpl);
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->assign('page_to', $_prefixVariable4, false, NULL);?>

		<?php if ($_smarty_tpl->getValue('current_page') > 1) {?><li><a href="" class="py-2 px-3 ml-0  text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Назад</a></li><?php }?>

	<li <?php if ($_smarty_tpl->getValue('current_page') == '1') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>1), $_smarty_tpl);?>
" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a></li>

										
		
	<?php
$__section_pages_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('page_to')) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_0_start = (int)@$_smarty_tpl->getValue('page_from') < 0 ? max(0, (int)@$_smarty_tpl->getValue('page_from') + $__section_pages_0_loop) : min((int)@$_smarty_tpl->getValue('page_from'), $__section_pages_0_loop);
$__section_pages_0_total = min(($__section_pages_0_loop - $__section_pages_0_start), $__section_pages_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new \Smarty\Variable(array());
if ($__section_pages_0_total !== 0) {
for ($__section_pages_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_0_start; $__section_pages_0_iteration <= $__section_pages_0_total; $__section_pages_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']++){
?>
		
	<?php $_smarty_tpl->assign('p', ($_smarty_tpl->getValue('__smarty_section_pages')['index'] ?? null)+1, false, NULL);?>	
		
	<?php if (($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('page_from')+1 && $_smarty_tpl->getValue('p') != 2) || ($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('page_to') && $_smarty_tpl->getValue('p') != $_smarty_tpl->getValue('pages_count')-1)) {?>	
		<li><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('p')), $_smarty_tpl);?>
" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a></li>
		<?php } else { ?>
		<li><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('p')), $_smarty_tpl);?>
" class="py-2 px-3 border border-gray-300 <?php if ($_smarty_tpl->getValue('current_page') == $_smarty_tpl->getValue('p')) {?>text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700<?php } else { ?>text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700<?php }?>"><?php echo $_smarty_tpl->getValue('p');?>
</a></li>
		<?php }?>
	<?php
}
}
?>

		<li <?php if ($_smarty_tpl->getValue('current_page') == $_smarty_tpl->getValue('pages_count')) {?>class="active"<?php }?> ><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('pages_count')), $_smarty_tpl);?>
" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"><?php echo $_smarty_tpl->getValue('pages_count');?>
</a></li>
	
	<?php if ($_smarty_tpl->getValue('current_page') < $_smarty_tpl->getValue('pages_count')) {?><li><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('current_page')+1), $_smarty_tpl);?>
" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Вперед</a></li><?php }?>
									
	<li><a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>'all'), $_smarty_tpl);?>
" class="py-2 px-3 text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Все сразу</a></li>

	</ul>							
</div>						
<?php }
}
}
