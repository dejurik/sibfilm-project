<div class="bg-[#F3F3F3] w-full h-120 rounded-lg block my-20">

    <div class="*:text-[#34445d] py-8 mx-12 border-b border-[#34445C]">

        <div id="feedback_result" class="flex p-4 mb-4 border-t-4 hidden *:text-white" role="alert">
            <div class="ml-3 text-sm font-medium"></div>
        </div>

        <div class="text-2xl font-bold no-underline max-md:text-base">Заказать услугу:</div>
        <div class="text-sm hidden lg:block pt-2">Звоните по телефону:<span class="text-base font-bold">+7 987 654-33-21</span></div>
    </div>
    <div class="*:text-[#34445d] py-2 mx-12">
        <div class="text-sm hidden lg:block pt-2">Или отправьте нам сообщение</div>
    </div>
    <div class="*:text-[#34445d] py-2 mx-12">

        <form action="" method="post" id="form_feedback" onsubmit="event.preventDefault()">
            <input type="hidden" name="module" value="feedback">
            <input type="hidden" name="page_id" value="{if isset($content.id_item)}{$content.id_item}{/if}">
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
                {* {$smarty.session|debug_print_var} *}

            </div>


        </form>

    </div>

</div>