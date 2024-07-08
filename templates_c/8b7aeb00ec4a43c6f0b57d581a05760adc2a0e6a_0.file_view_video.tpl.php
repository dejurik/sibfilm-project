<?php
/* Smarty version 5.0.2, created on 2024-07-04 12:01:34
  from 'file:[main]/default/shop/view_video.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668664ee3dad23_42891398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7aeb00ec4a43c6f0b57d581a05760adc2a0e6a' => 
    array (
      0 => '[main]/default/shop/view_video.tpl',
      1 => 1720083691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/feedback/comments_form.tpl' => 1,
    'file:default/feedback/feedback_form.tpl' => 1,
  ),
))) {
function content_668664ee3dad23_42891398 (\Smarty\Template $_smarty_tpl) {
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

        <?php $_smarty_tpl->assign('picture', ((string)(defined('A_PATH') ? constant('A_PATH') : null)).((string)$_smarty_tpl->getValue('product')['picture']), false, NULL);?>
        <div class="w-full h-auto rounded-lg block bg-[#98a0ad]">

            <div class="grid grid-cols-8 gap-4 py-8 px-8">
                <div class="col-span-4 h-auto">
                    <div class="text-6xl text-white font-bold uppercase mb-12"><?php echo $_smarty_tpl->getValue('product')['title'];?>
</div>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('options'), 'item', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                        <span class="bg-gray-200/20 text-white text-xs uppercase mr-5 px-4 py-0.5 rounded font-bold"><?php echo $_smarty_tpl->getValue('item')['value'];?>
</span>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <p class="mt-12 text-sm text-white"><?php echo $_smarty_tpl->getValue('product')['annotation'];?>
</p>

                    <button class="mt-12 relative inline-flex items-center text-white overflow-hidden bg-gradient-to-br from-[#34445C] from-10% via-[#7688a5] via-30% to-[#34445C] to-90%
                       shadow-md focus:outline-none rounded uppercase px-10 py-5 text-center text-lg tracking-wide
                       transition-all before:absolute
                       before:bottom-0 before:left-0 before:top-0
                       before:z-0 before:h-full before:w-0
                       before:bg-[#34445C] before:transition-all
                       before:duration-500 hover:before:left-0
                       hover:before:w-full">
                        <span class="relative z-10">Смотреть</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-6 w-6 h-6 z-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                    </button>



                </div>

                <div class="col-span-4 relative">
                    <img class="w-full h-[500px] object-cover rounded" src="<?php echo $_smarty_tpl->getValue('product')['picture'];?>
" alt="">
                    <div class="bg-gradient-to-r from-[#98a0ad] to-transparent absolute top-0 left-0 w-2/3 h-full"></div>
                </div>

            </div>

        </div>

        <div class="w-full my-3 flex items-start justify-center">
            <div class="xl:max-w-[1000px] w-full *:text-[#34445d]">

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variants'), 'variant', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('variant')->value) {
$foreach1DoElse = false;
?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('file')->value) {
$foreach2DoElse = false;
?>
                        <?php $_smarty_tpl->assign('variant_files_id', $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('variant')['files']), true, NULL);?>
                        <?php if (is_array($_smarty_tpl->getValue('variant_files_id'))) {?>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('file')['id_item'],$_smarty_tpl->getValue('variant_files_id'))) {?>
                                <video controls crossorigin playsinline data-poster="<?php echo $_smarty_tpl->getValue('product')['picture'];?>
" id="video_player" class="rounded player">
                                    <source src="<?php echo $_smarty_tpl->getValue('file')['filename'];?>
" type="video/mp4" size="1080" />
                                </video>
                            <?php } else { ?>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                <?php echo $_smarty_tpl->getValue('product')['text'];?>

            </div>



        </div>



        <?php if ($_smarty_tpl->getValue('product')['comments'] == 1) {?>
            <?php $_smarty_tpl->renderSubTemplate("file:default/feedback/comments_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("file:default/feedback/feedback_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>




    </div>

</div><?php }
}
