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
                    Личный кабинет
                </li>
            </ol>
        </div>




        <div class="grid grid-cols-1 lg:grid-cols-6 gap-4 mb-4">

            <div class="col-span-2 h-80 bg-[#f3f3f1] rounded-lg my-3 block">
                <div class="*:text-[#34445d] m-7 relative">
                    <img src="{$view.avatar}" alt="" class="absolute top-12 right-0 w-24 h-24
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

            <div class="col-span-4 h-120 rounded-lg my-3 block">

                <div class="flex flex-row w-full block w-auto bg-[#F3F3F3]/20 mb-8">

                    <div class="basis-3/5 mr-4">
                        <a href="./projects.html" class="">
                            <div class="bg-[#34445d] h-56 rounded-lg mb-4 relative block">
                                <div class="absolute bottom-7 left-7 *:text-white">
                                    <div class="text-2xl font-bold underline max-md:text-base">Мои заказы</div>
                                    <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                                </div>
                            </div>
                        </a>

                        <a href="/users/profile/" class="">
                            <div class="bg-[#f3f3f1] h-44 rounded-lg relative block">
                                <div class="absolute bottom-7 left-7 *:text-[#34445d]">
                                    <div class="text-2xl font-bold underline max-md:text-base">Мой профиль</div>
                                    <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="basis-2/5">
                        <a href="./services.html" class="">
                            <div class="bg-[#f3f3f1] h-44 rounded-lg mb-4 relative block">
                                <div class="absolute bottom-7 left-7 *:text-[#34445d]">
                                    <div class="text-2xl font-bold underline max-md:text-base">Мои проекты</div>
                                    <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                                </div>
                            </div>
                        </a>

                        <a href="/users/logout/" class="">
                            <div class="bg-[#34445d] h-56 rounded-lg relative block">
                                <div class="absolute bottom-7 left-7 *:text-white">
                                    <div class="text-2xl font-bold underline max-md:text-base">Выход</div>
                                    <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>




