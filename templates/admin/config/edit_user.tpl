{include file="templates/admin/ckeditor.tpl"}
<form method="post" enctype="multipart/form-data">
<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">
        <div class="w-full">
            <div class="">
                <div class="flex flex-wrap justify-between">
                    <div class="items-center ">
                        <h1 class="font-semibold text-xl mb-1 block">Настройки пользователей</h1>
                        <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">{if isset($view.id_item)}Редактировать {else}Добавить {/if}пользователя</span>
                    </div>
                    <div class="flex items-center">
                        <a href="/admin/?mod=config&act=users" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
                        <button type="submit "
                                class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-wrap">
    <div class="flex py-4 w-full items-start">

        <div class="bg-white shadow rounded-md h-full w-3/4 p-4 relative overflow-hidden">
            {if isset($error_email)}
                <div class="flex p-4 mb-4 bg-yellow-100 border-t-4 border-yellow-500" role="alert">
                    <div class="ml-3 text-sm font-medium text-yellow-700">
                        <span class="font-semibold">Ошибка</span> Такой e-mail уже есть в базе.
                    </div>
                </div>
            {/if}


                <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-4">

                    <input name="id_item"  value="{if isset($view.id_item)}{$view.id_item}{/if}" type="hidden"/>

                    <div class="col-span-3">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">ФИО</label>
                            <div class="mt-2">
                                <input value="{if isset($view.name)}{$view.name}{/if}" name="name" type="text" placeholder="Введите ФИО" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Email</label>
                            <div class="mt-2">
                                <input value="{if isset($view.email)}{$view.email}{/if}" name="email" type="text" placeholder="Введите email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 row-span-2">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Аватар</label>
                            <div class="mt-2">
                                <div class="w-2/12 block rounded-full" id="staff_avatar">
                                    {if isset($view.avatar)}
                                        <div class="cropme" style="width: 100px; height: 100px;">
                                            <img src="{$view.avatar}" style="width: 100px; height: 100px;">
                                        </div>
                                        <input name="old_avatar"  value="{if isset($view.avatar)}{$view.avatar}{/if}" type="hidden"/>
                                    {else}
                                        <div class="cropme" style="width: 125px; height: 125px;"></div>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-3">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Телефон</label>
                            <div class="mt-2">
                                <input value="{if isset($view.phone)}{$view.phone}{/if}" name="phone" type="text" placeholder="Введите телефон" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Сайт</label>
                            <div class="mt-2">
                                <input value="{if isset($view.site)}{$view.site}{/if}" name="site" type="text" placeholder="Введите сайт" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-3">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Роль</label>
                            <div class="mt-2 relative">
                                <select name="role_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    {foreach from=$user_roles key=key item=item}
                                        <option value="{$item.id_item}" {if isset($view.role_id) && $view.role_id eq $item.id_item}selected{/if} {if !isset($view.role_id) && $item.id_item eq 3}selected{/if}>{$item.name}</option>
                                    {/foreach}
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Пароль</label>
                            <div class="mt-2 inline-flex w-full" role="group"">

                                <input value="" name="password" id="password" type="text" placeholder="Пароль" class="appearance-none block w-5/6 bg-gray-200 text-gray-700 border border-gray-300 py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500 rounded-l">
                                <button type="button" id="gen_password" class="rounded-r w-1/6 whitespace-nowrap py-2 px-4 text-sm font-medium text-gray-900 bg-transparent border-b border-t border-r border-gray-300 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-300 focus:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Статус</label>
                            <div class="mt-3.5">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" name="enabled" value="1" {if isset($view.enabled) AND $view.enabled eq "1"}checked="checked"{/if}>
                                    <div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="col-span-6">
                        <div class="mb-0">
                            <label class="block text-sm text-gray-900">Подробная информация</label>
                            <div class="mt-2">
                                <textarea name="about" id="about" class="editor">{if isset($view.about)}{$view.about}{/if}</textarea>
                            </div>
                        </div>
                    </div>

                </div>

        </div>

        <div class="ml-4 bg-white shadow rounded-md w-1/4 relative overflow-hidden ">

            <div class="border-b border-gray-300 border-dashed p-4">
                <h4 class="">Другие разделы</h4>
            </div>

            <div class="p-4">
                <a href="/admin/?mod=config&act=view_all" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
                    Общие настройки
                </a>
                <a href="#" class="mb-4 font-medium text-black bg-gray-100 rounded text-sm px-3 py-3 mr-2 w-full block cursor-default" disabled>
                    Пользователи
                </a>
                <a href="#" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
                    Пользователи
                </a>
                <a href="#" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
                    Пользователи
                </a>


            </div>




        </div>


    </div>
</div>
</form>

