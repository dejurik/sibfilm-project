<?php
/* Smarty version 5.0.2, created on 2024-07-03 18:10:14
  from 'file:default/feedback/comments_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668569d63acbc1_70185511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f10ea53ea9485825a571b4316891ec31d9c45960' => 
    array (
      0 => 'default/feedback/comments_form.tpl',
      1 => 1714846746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668569d63acbc1_70185511 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default\\feedback';
?><div class="bg-[#F3F3F3] w-full h-120 rounded-lg block my-20">

    <div class="*:text-[#34445d] py-8 mx-12 border-b border-[#34445C]">

        <div id="feedback_result" class="flex p-4 mb-4 border-t-4 hidden *:text-white" role="alert">
            <div class="ml-3 text-sm font-medium"></div>
        </div>

        <div class="text-2xl font-bold no-underline max-md:text-base">Комментарии:</div>
        <div class="text-sm hidden lg:block pt-2">Пожалуйста, оставьте свой отзыв:</div>
    </div>
    <div class="*:text-[#34445d] py-2 mx-12">
        <div class="text-sm hidden lg:block pt-2">Или отправьте нам сообщение</div>
    </div>
    <div class="*:text-[#34445d] py-2 mx-12">

        <form action="" method="post" id="form_feedback" onsubmit="event.preventDefault()">
            <input type="hidden" name="module" value="<?php if ((null !== ($_smarty_tpl->getValue('mod') ?? null))) {
echo $_smarty_tpl->getValue('mod');
} else { ?>feedback<?php }?>">
            <input type="hidden" name="page_id" value="<?php if ((null !== ($_smarty_tpl->getValue('content')['id_item'] ?? null))) {
echo $_smarty_tpl->getValue('content')['id_item'];
}?>">
            <div class="flex flex-wrap mb-3">
                <div class="w-full md:w-3/12 mb-3 md:pr-1">
                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Ваше имя</label>
                    <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="name" type="text" placeholder="Ваше имя" name="name">
                </div>
                <div class="w-full md:w-3/12 mb-3 md:pr-1">
                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="phone">Телефон</label>
                    <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="phone" name="phone" type="text" placeholder="Укажите телефон">
                </div>
                <div class="w-full md:w-3/12 mb-3 md:pr-1">
                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="email">Email</label>
                    <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="email" name="email" type="text" placeholder="Укажите email">
                </div>
                <div class="w-full md:w-1/12 mb-3 md:pr-1">
                    <label class="block text-[#34445d] text-xs font-bold mb-2">&nbsp;</label>
                    <img id="captcha" src="/image.php" onclick="document.getElementById('captcha').src = '/image.php?' + Math.random()" class="rounded">
                </div>
                <div class="w-full md:w-2/12 mb-3">
                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="captcha">Защитный код</label>
                    <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="captcha" name="captcha" type="text" placeholder="Защитный код" required>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full">
                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="message">Сообщение</label>
                    <textarea rows="10" name="message" class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white focus:border-[#34445D]"></textarea>
                </div>

                <div class="flex justify-between w-full flex-wrap">


                    <div class="flex items-center mb-2 ">
                        <input id="privacy" class="mr-2 w-5 h-5 order-none" type="checkbox" name="privacy" required>
                        <label for="privacy" class="block text-[#34445d] text-xs order-none mr-4">Я даю согласие на обработку моих персональных данных</label>
                    </div>

                    <button id="feedback_submit" class="disabled:opacity-30 block text-sm border rounded-full text-[#34445C] border-[#34445C] px-4 py-2 hover:border-transparent hover:text-white hover:bg-[#34445C]" type="submit">
                        Отправить сообщение
                    </button>

                </div>
               
            </div>


        </form>

    </div>

</div><?php }
}
