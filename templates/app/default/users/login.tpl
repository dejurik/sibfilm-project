<div class="sm:px-16 px-6 flex justify-center items-center bg-gradient-to-b from-[#cccccc]/5">
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
                    Авторизация
                </li>
            </ol>
        </div>


        <div class="grid grid-cols-1 lg:grid-cols-6 gap-4 mb-4">

            <div class="col-span-3 h-64 bg-[#34445d] rounded-lg my-3 block">
                <div class="*:text-white m-7">
                    <div class="text-2xl font-bold no-underline max-md:text-base">Новый пользователь</div>
                    <div class="text-sm hidden lg:block pt-2">Регистрация
                        <p class="text-sm text-gray-400 pt-2">Создание учетной записи поможет делать следующие покупки быстрее (не надо будет снова вводить адрес и контактную информацию), видеть состояние заказа, а также видеть заказы, сделанные ранее.</p>
                    </div>
                     <a href="/users/register/" class="disabled:opacity-30 inline-block text-sm border rounded-full text-white border-white px-4 py-2 hover:border-transparent hover:text-[#34445C] hover:bg-white">
                        Регистрация
                    </a>
                </div>
            </div>

            <div class="col-span-3 h-120 bg-[#F3F3F3] rounded-lg my-3 block">
                {if isset($smarty.session.user_id)}
                    <div class="*:text-[#34445d] m-7">
                        <div id="login_result" class="flex p-4 mb-4 border-t-4 hidden *:text-white" role="alert">
                            <div class="ml-3 text-sm font-medium"></div>
                        </div>
                        <div class="text-2xl font-bold no-underline max-md:text-base">Вы зарегистрированы:</div>
                        <div class="text-sm hidden lg:block pt-2">
                            <a href="/users/logout/" class="disabled:opacity-30 inline-block text-sm border rounded-full text-[#34445C] border-[#34445C] px-4 py-2 hover:border-transparent hover:text-white hover:bg-[#34445C]">
                                Выйти
                            </a>
                            <a href="/users/" class="disabled:opacity-30 inline-block text-sm border rounded-full text-[#34445C] border-[#34445C] px-4 py-2 hover:border-transparent hover:text-white hover:bg-[#34445C]">
                                Перейти в личный кабинет
                            </a>
                        </div>
                    </div>
                {else}
                    <div class="*:text-[#34445d] m-7">
                        <div id="login_result" class="flex p-4 mb-4 border-t-4 hidden *:text-white" role="alert">
                            <div class="ml-3 text-sm font-medium"></div>
                        </div>
                        <div class="text-2xl font-bold no-underline max-md:text-base">Зарегистрированный пользователь:</div>
                        <div class="text-sm hidden lg:block pt-2">Войти в Личный Кабинет:</div>
                    </div>

                    <div class="*:text-[#34445d] m-7">
                        <form action="/users/login/" method="post" id="form_login" onsubmit="event.preventDefault()">
                            <input name="session_id" type="hidden" value="{$session_id}">
                            <div class="flex flex-wrap mb-3">
                                <div class="w-full mb-3 md:pr-1">
                                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="email">Email</label>
                                    <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="email" name="email" type="text" placeholder="Укажите email" required>
                                </div>
                                <div class="w-full mb-3 md:pr-1">
                                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Пароль</label>
                                    <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="password" type="password" placeholder="Пароль" name="password" required>
                                </div>
                                <div class="w-full md:w-3/12 mb-3 md:pr-1">
                                    <label class="block text-[#34445d] text-xs font-bold mb-2">&nbsp;</label>
                                    <img id="captcha" src="/image.php" onclick="document.getElementById('captcha').src = '/image.php?' + Math.random()" class="rounded float-left">
                                </div>
                                <div class="w-full md:w-3/12 mb-3 md:pr-1">
                                    <label class="block text-[#34445d] text-xs font-bold mb-2" for="captcha">Защитный код</label>
                                    <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="captcha" name="captcha" type="text" placeholder="Защитный код" required>
                                </div>
                                <div class="w-full md:w-3/12 mb-3 md:pr-1">
                                    <label class="block text-[#34445d] text-xs font-bold mb-2">&nbsp;</label>
                                    <button id="login_submit" class="float-right disabled:opacity-30 block text-sm border rounded-full text-[#34445C] border-[#34445C] px-4 py-2 hover:border-transparent hover:text-white hover:bg-[#34445C]" type="submit">
                                        Авторизация
                                    </button>
                                </div>
                                <div class="w-full md:w-3/12 mb-3 md:pr-1">
                                    <label class="block text-[#34445d] text-xs font-bold mb-2">&nbsp;</label>
                                    <a href="#" class="float-right disabled:opacity-30 block text-sm border rounded-full text-[#34445C] border-[#34445C] px-4 py-2 hover:border-transparent hover:text-white hover:bg-[#34445C]">
                                        Забыл пароль
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                {/if}
            </div>

        </div>

    </div>
</div>




