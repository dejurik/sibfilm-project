{include file="templates/admin/ckeditor.tpl"}
<form method="post" enctype="multipart/form-data">
<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">
        <div class="w-full">
            <div class="">
                <div class="flex flex-wrap justify-between">
                    <div class="items-center ">
                        <h1 class="font-semibold text-xl mb-1 block">Общие настройки</h1>
                        <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">Параметры сайта</span>
                    </div>
                    <div class="flex items-center">

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

        <div class="bg-white shadow rounded-md w-1/4 relative overflow-hidden ">

            <div class="border-b border-gray-700 border-dashed p-4">
                <h4 class="">Другие разделы</h4>
            </div>

            <div class="p-4">
                <a href="#" class="mb-4 font-medium text-black bg-gray-100 rounded text-sm px-3 py-3 mr-2 w-full block cursor-default" disabled>
                    Общие настройки
                </a>
                <a href="/admin/?mod=config&act=users" class="block mb-4 font-medium text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm px-3 py-3 mr-2 w-full">
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


        <div class="ml-4 bg-white shadow rounded-md h-full w-3/4 p-4 relative overflow-hidden">


            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Название компании</label>
                        <div class="mt-2">
                            <input value="{if isset($view.company_name)}{$view.company_name}{/if}" name="company_name" type="text" placeholder="Введите название" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Адрес сайта</label>
                        <div class="mt-2">
                            <input value="{if isset($view.site_url)}{$view.site_url}{/if}" name="site_url" type="text" placeholder="Введите адрес сайта" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Copyright</label>
                        <div class="mt-2">
                            <input value="{if isset($view.copyright)}{$view.copyright}{/if}" name="copyright" type="text" placeholder="Введите copyright" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Шаблон сайта</label>
                        <div class="mt-2 relative">
                            <select name="template" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                {foreach from=$view_templates key=key item=item}
                                    <option value="{$item.file}" {if $view.template eq $item.file}selected{/if}>{$item.file}</option>
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
                        <label class="block text-sm text-gray-900">Основной Email</label>
                        <div class="mt-2">
                            <input value="{if isset($view.email)}{$view.email}{/if}" name="email" type="text" placeholder="Введите email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Email для уведомлений</label>
                        <div class="mt-2">
                            <input value="{if isset($view.notify_from_email)}{$view.notify_from_email}{/if}" name="notify_from_email" type="text" placeholder="Введите email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Meta - Заголовок</label>
                        <div class="mt-2">
                            <input value="{if isset($view.meta_title)}{$view.meta_title}{/if}" name="meta_title" type="text" placeholder="Введите заголовок сайта" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>

                <div class="row-span-2 col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Meta - Описание</label>
                        <div class="mt-2">
                        <textarea name="meta_description" class="h-[120px] appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
                                  focus:outline-none focus:bg-white focus:border-gray-500">{if isset($view.meta_description)}{$view.meta_description}{/if}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Meta - Ключевые слова</label>
                        <div class="mt-2">
                            <input value="{if isset($view.meta_keywords)}{$view.meta_keywords}{/if}" name="meta_keywords" type="text" placeholder="Введите ключевые слова" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>

                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Instagram</label>
                        <div class="mt-2">
                            <input value="{if isset($view.instagram)}{$view.instagram}{/if}" name="instagram" type="text" placeholder="Instagram" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Youtube</label>
                        <div class="mt-2">
                            <input value="{if isset($view.youtube)}{$view.youtube}{/if}" name="youtube" type="text" placeholder="Youtube" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">VK</label>
                        <div class="mt-2">
                            <input value="{if isset($view.vk)}{$view.vk}{/if}" name="vk" type="text" placeholder="vk" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Facebook</label>
                        <div class="mt-2">
                            <input value="{if isset($view.facebook)}{$view.facebook}{/if}" name="facebook" type="text" placeholder="facebook" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="mb-0">
                        <label class="block text-sm text-gray-900">Контактная информация</label>
                        <div class="mt-2">
                            <textarea name="contacts" id="contacts" class="editor">{if isset($view.contacts)}{$view.contacts}{/if}</textarea>
                        </div>
                    </div>
                </div>



            </div>









        </div>



    </div>
</div>
</form>
