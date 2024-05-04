<form method="post" enctype="multipart/form-data">

    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-1 block">Обратная связь</h1>
                            <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">{if isset($view.id_item)}Редактировать {else}Добавить {/if}сообщение</span>
                        </div>
                        <div class="flex items-center">
                            <a href="/admin/?mod=feedback&act=view_all" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
                            <button type="submit "
                                    class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить сообщение</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-between items-stretch mb-12">
        <div class="w-1/4 bg-white shadow rounded p-4 mr-2">


            <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-start">
                <input name="id_item"  value="{if isset($view.id_item)}{$view.id_item}{/if}" type="hidden"/>
                <div class="">
                    <label class="block text-sm text-gray-900">Имя</label>
                    <div class="mt-2">
                        <input value="{if isset($view.name)}{$view.name}{/if}" name="name" type="text" placeholder="Введите имя" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                </div>
                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Email</label>
                    <div class="mt-2">
                        <input value="{if isset($view.email)}{$view.email}{/if}" name="email" type="text" placeholder="Введите email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Телефон</label>
                    <div class="mt-2">
                        <input value="{if isset($view.phone)}{$view.phone}{/if}" name="phone" type="text" placeholder="Телефон"
                               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                </div>

                <div class="mt-5 flex">
                    <div class="w-2/3">
                        <label class="block text-sm text-gray-900">Раздел</label>
                        <div class="mt-2">
                            <input value="{if isset($view.module)}{$view.module}{else}feedback{/if}" name="module" type="text" placeholder="Раздел"
                                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                        </div>
                    </div>
                    <div class="ml-2 w-1/3">
                        <label class="block text-sm text-gray-900">Страница</label>
                        <div class="mt-2">
                            <input value="{if isset($view.page_id)}{$view.page_id}{/if}" name="page_id" type="text" placeholder="Страница"
                                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>


                </div>

                <div class="flex justify-evenly border mt-5 p-2">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" name="visible" value="1" {if isset($view.visible) AND $view.visible eq "1"}checked="checked"{/if}>
                        <div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
                        </div>
                        <span class="ms-3 text-sm font-medium">Видимость сообщения</span>
                    </label>
                </div>

            </div>


        </div>

        <div class="w-3/4 bg-white shadow rounded p-4 overflow-hidden ml-2">
            <div class="w-12/12">
                <label class="block text-sm text-gray-900">Текст сообщения</label>
                <textarea class="mt-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" rows="3" name="message" placeholder="Сообщение">{if isset($view.message)}{$view.message}{/if}</textarea>
            </div>
        </div>
    </div>





</form>

{*{include file="templates/admin/floara/floara.tpl"}*}



