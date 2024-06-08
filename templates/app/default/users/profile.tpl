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
                    Профиль пользователя
                </li>
            </ol>
        </div>




        <div class="grid grid-cols-1 lg:grid-cols-6 gap-4 mb-4">

            <div class="col-span-2 h-80 bg-[#f3f3f1] rounded-lg my-3 block">
                <div class="*:text-[#34445d] m-7 relative">
                    <img src="{$view.avatar}" alt="" class="absolute top-0 right-0 w-24 h-24
                    rounded-tl rounded-tr-[20%] rounded-bl-[20%] rounded-br mx-auto block">
                    <div class="text-xl font-bold no-underline max-md:text-base">{$view.name}</div>

                    <div class="flex items-center mt-8 space-x-2 text-dark-600 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                        </svg>
                        <a href="mailto:{$view.email}" class="text-sm">{$view.email}</a>
                    </div>

                    <div class="flex items-center mt-2 space-x-2 text-dark-600 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        <a href="tel:{$view.phone}" class="text-sm">{$view.phone}</a>
                    </div>

                    <div class="flex items-center mt-2 space-x-2 text-dark-600 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                        <a href="{$view.site}" class="text-sm">{$view.site}</a>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 text-dark-600 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <span class="text-sm">{$view.role_id}</span>
                    </div>
                    <div class="hidden lg:block pt-2">
                        <div class="text-sm">{$view.about}</div>
                    </div>


                    {*                    <div class="text-sm hidden lg:block pt-2 text-gray-400">*}
                    {*                        {$view|debug_print_var}  </div>*}


                </div>
            </div>

            <div class="col-span-4 h-120 bg-[#F3F3F3] rounded-lg my-3 block">

                <div class="*:text-[#34445d] m-7">
                    {if $error}
                        <div class="flex p-4 mb-4 border-t-4 border-red-700 text-red-700 bg-red-100" role="alert">
                            <div class="ml-3 text-sm font-medium">{if $error == 'confirm_password_error'}Пароль не обнолен, нет подтверждения
                                {elseif $error == 'email_error'}Этот Email использовать нельзя
                                {else}{$error}{/if}
                            </div>
                        </div>
                    {/if}
                    {if $success}
                        <div class="flex p-4 mb-4 border-t-4 border-green-700 text-green-700 bg-green-100" role="alert">
                            <div class="ml-3 text-sm font-medium">{$success}</div>
                        </div>
                    {/if}
                    <div class="text-2xl font-bold no-underline max-md:text-base">Профиль:</div>
                    <div class="text-sm hidden lg:block pt-2">Редактирование:</div>
                </div>

                <div class="*:text-[#34445d] m-7">
                    <form action="/users/profile/" method="post" id="edit_profile" enctype="multipart/form-data">
                        <input name="session_id" type="hidden" value="{$session_id}">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-2">
                            <div class="col-span-5">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="email">Ваше имя</label>
                                <input value="{$view.name}" class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="name" name="name" type="text" placeholder="Укажите имя" required>
                            </div>
                            <div class="col-span-5">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="email">Email</label>
                                <input value="{$view.email}" class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="email" name="email" type="text" placeholder="Укажите email" required>
                            </div>
                            <div class="col-span-2 row-span-3">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="email">Аватар</label>

                                <div class="group relative pr-2.5">
                                    <img class="rounded-tl rounded-tr-[20%] rounded-bl-[20%] rounded-br w-24 h-24" src="{$view.avatar}" />
                                    <input name="old_avatar" type="hidden" value="{$view.avatar}">
                                    <div class="transition-opacity duration-500 ease-in-out absolute top-0 left-0 bg-[#34445D] w-24 h-0 opacity-0 group-hover:h-24 group-hover:opacity-100 rounded-tl rounded-tr-[20%] rounded-bl-[20%] rounded-br">
                                        <label for="avatar" class="cursor-pointer w-full h-full flex flex-col justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-auto text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                                            </svg>
                                            <span id="avatar_file_name" class="text-[9px] text-white"></span>
                                            <input type="file" id="avatar" name="avatar" accept="png, jpg" hidden/>
                                        </label>
                                    </div>
                                </div>

{*                                <div class="absolute top-0 left-0 w-full h-0 bg-[#34445D] opacity-0 group-hover:h-full group-hover:opacity-100 duration-500">*}

                            </div>


                            <div class="col-span-5">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Телефон</label>
                                <input value="{$view.phone}" class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" name="phone" type="text" placeholder="Телефон">
                            </div>
                            <div class="col-span-5">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Сайт</label>
                                <input value="{$view.site}" class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" name="site"  type="text" placeholder="Сайт">
                            </div>
                            <div class="col-span-12">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Обо мне</label>
                                <textarea class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" placeholder="Обо мне" name="about">{$view.about}</textarea>
                            </div>

                            <div class="col-span-6">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Пароль</label>
                                <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="password" type="password" placeholder="Пароль" name="password">
                            </div>
                            <div class="col-span-6">
                                <label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Повторите пароль</label>
                                <input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d] text-xs" id="confirm_password" type="password" placeholder="Повторите пароль" name="confirm_password">
                            </div>

                            <div class="col-span-12">
                                <button id="login_submit" class="float-right disabled:opacity-30 block text-sm border rounded-full text-[#34445C] border-[#34445C] px-4 py-2 hover:border-transparent hover:text-white hover:bg-[#34445C]" type="submit">
                                    Обновить профиль
                                </button>
                            </div>

                        </div>

                    </form>
                </div>


            </div>

        </div>

    </div>
</div>




