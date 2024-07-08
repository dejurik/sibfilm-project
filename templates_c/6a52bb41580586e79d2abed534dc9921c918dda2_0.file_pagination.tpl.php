<?php
/* Smarty version 5.0.2, created on 2024-07-03 18:30:43
  from 'file:default/pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66856ea30916a7_43514024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a52bb41580586e79d2abed534dc9921c918dda2' => 
    array (
      0 => 'default/pagination.tpl',
      1 => 1719952457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66856ea30916a7_43514024 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default';
if ((null !== ($_smarty_tpl->getValue('total_pages_num') ?? null)) && $_smarty_tpl->getValue('total_pages_num') > 1) {?>
    <div class="w-full block mt-8">
        <div class="flex flex-row mx-auto justify-end *:text-sm">
                                        <?php $_smarty_tpl->assign('visible_pages', 10, false, NULL);?>

                                        <?php $_smarty_tpl->assign('page_from', 1, false, NULL);?>

                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"floor(x/2)",'x'=>$_smarty_tpl->getValue('visible_pages'),'assign'=>"floor_visible_pages"), $_smarty_tpl);?>

                    <?php if ($_smarty_tpl->getValue('current_page_num') > $_smarty_tpl->getValue('floor_visible_pages')) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"max(1, x-y-1)",'x'=>$_smarty_tpl->getValue('current_page_num'),'y'=>$_smarty_tpl->getValue('floor_visible_pages'),'assign'=>"page_from"), $_smarty_tpl);?>



                    <?php }?>

                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"ceil(x/2)",'x'=>$_smarty_tpl->getValue('visible_pages'),'assign'=>"ceil_visible_pages"), $_smarty_tpl);?>

                    <?php if ($_smarty_tpl->getValue('current_page_num') > $_smarty_tpl->getValue('total_pages_num')-$_smarty_tpl->getValue('ceil_visible_pages')) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"max(1, x-y-1)",'x'=>$_smarty_tpl->getValue('total_pages_num'),'y'=>$_smarty_tpl->getValue('visible_pages'),'assign'=>"page_from"), $_smarty_tpl);?>

                    <?php }?>

                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('equation'=>"min(x, y)",'x'=>$_smarty_tpl->getValue('page_from')+$_smarty_tpl->getValue('visible_pages'),'y'=>$_smarty_tpl->getValue('total_pages_num')-1,'assign'=>"page_to"), $_smarty_tpl);?>


                    <?php if ($_smarty_tpl->getValue('current_page_num') == 2) {?>
                        <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>null), $_smarty_tpl);?>
" class="bg-[#34445d] h-fit text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-[#666c77] px-3">
                            <div class="flex flex-row align-middle">
                                <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-2">Начало</span>
                            </div>
                        </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('current_page_num') > 2) {?>
                        <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('current_page_num')-1), $_smarty_tpl);?>
" class="bg-[#34445d] h-fit text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-[#666c77] px-3">
                            <div class="flex flex-row align-middle">
                                <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-2">Раньше</span>
                            </div>
                        </a>
                    <?php }?>
                    



                    <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>'all'), $_smarty_tpl);?>
" class="bg-[#34445d] h-fit text-white py-2 border-l border-gray-200 hover:bg-[#666c77] px-3">
                        <div class="flex flex-row align-middle">
                            <span class="">Все</span>
                        </div>
                    </a>


                    <?php if ($_smarty_tpl->getValue('current_page_num') < $_smarty_tpl->getValue('total_pages_num')) {?>
                        <a href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('page'=>$_smarty_tpl->getValue('current_page_num')+1), $_smarty_tpl);?>
" class="bg-[#34445d] h-fit text-white rounded-r-md py-2 border-l border-gray-200 hover:bg-[#666c77] px-3">
                            <div class="flex flex-row align-middle">
                                <span class="mr-2">Дальше</span>
                                <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                    <?php }?>

        </div>
    </div>
<?php }?>

<?php }
}
