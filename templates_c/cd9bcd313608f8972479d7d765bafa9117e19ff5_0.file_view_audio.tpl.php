<?php
/* Smarty version 5.0.2, created on 2024-07-08 17:16:57
  from 'file:[main]/default/shop/view_audio.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668bf4d95612b0_45781049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd9bcd313608f8972479d7d765bafa9117e19ff5' => 
    array (
      0 => '[main]/default/shop/view_audio.tpl',
      1 => 1720448138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668bf4d95612b0_45781049 (\Smarty\Template $_smarty_tpl) {
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

        <div class="w-full h-52 rounded-lg shadow-lg mb-8 bg-[#98a0ad]"></div>
        <div class="grid grid-cols-4 gap-4 -mt-60 p-8">
            <div class="col-span-1 overflow-hidden">
                <img class="w-full rounded-lg shadow-lg" src="<?php echo $_smarty_tpl->getValue('product')['picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['title'];?>
">
            </div>
            <div class="col-span-3 h-full">
                <div class="text-white pt-12">
                    <h3 class="text-3xl text-white"><?php echo $_smarty_tpl->getValue('product')['title'];?>
</h3>
                    <div class="text-base opacity-80 mt-5 mb-16" id="play-list-artist">jef agaev</div>
                    <div class="text-gray-400 mb-8">
                        <div class="flex items-center space-x-2 text-xs">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
                            <span id="play-list-title">12 этажей вниз</span>
                        </div>
                    </div>
                </div>

                <div id="player_container" class="mb-8">
                    <audio id="player"></audio>
                </div>

                <ul class="text-xs divide-y cursor-default rounded-lg shadow-md overflow-hidden bg-[#34445d]/5" id="play-list" data-track-count="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variants'));?>
">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variants'), 'variant', false, 'key');
$_smarty_tpl->getVariable('variant')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('variant')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('variant')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('variant');
?>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('file')->value) {
$foreach1DoElse = false;
?>
                            <?php $_smarty_tpl->assign('variant_files_id', $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('variant')['files']), true, NULL);?>
                            <?php if (is_array($_smarty_tpl->getValue('variant_files_id'))) {?>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('file')['id_item'],$_smarty_tpl->getValue('variant_files_id'))) {?>
                                    <li class="flex items-center space-x-3 h-14 hover:bg-[#34445d]/20" data-file="<?php echo $_smarty_tpl->getValue('file')['filename'];?>
" data-index="<?php echo $_smarty_tpl->getVariable('variant')->iteration;?>
" data-title="<?php echo $_smarty_tpl->getValue('variant')['name'];?>
" data-author="<?php echo $_smarty_tpl->getValue('variant')['author'];?>
">
                                        <button class="p-5 hover:bg-[#34445d] group focus:outline-none h-full">
                                            <svg class="w-4 h-4 group-hover:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                        </button>
                                        <div class="flex-1 text-[#34445d]">
                                            <?php echo $_smarty_tpl->getValue('variant')['name'];?>

                                        </div>
                                        <div class="text-xs text-[#34445d] pr-4">
                                            <?php echo $_smarty_tpl->getValue('variant')['duration'];?>

                                        </div>
                                    </li>
                                <?php } else { ?>
                                <?php }?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php
$_smarty_tpl->setVariable('variant', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                </ul>


            </div>
        </div>






    </div>

</div><?php }
}
