{include file="templates/admin/ckeditor.tpl"}
<form method="post" enctype="multipart/form-data">

    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-1 block">Категории</h1>
                            <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">{if isset($view.id_item)}Редактировать {else}Добавить {/if}страницу</span>
                        </div>
                        <div class="flex items-center">
                            <a href="/admin/?mod=shop&act=categories" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
                            <button type="submit "
                                    class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить категорию</button>
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
                    <label class="block text-sm text-gray-900">Заголовок</label>
                    <div class="mt-2">
                        <input value="{if isset($view.title)}{$view.title}{/if}" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
                    </div>
                </div>

                <div class="flex flex-wrap items-end mb-2 mt-5">
                    <div class="w-5/6 pr-3 mb-0">
                        <label class="block text-sm text-gray-900">Ссылка</label>
                        <input class="mt-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="Ссылка" type="text" name="url" value="{if isset($view.url)}{$view.url}{/if}" id="url">
                    </div>

                    <div class="w-1/6 pr-3 mb-0">
                        <button type="button" id="generation"
                                class="inline-flex items-center px-4 py-[13px] bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Родительская категория</label>

                    <div class="mt-2 relative">
                        <select name="parent_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="0">-- Корневая категория</option>

                            {function name=category_select level=0}
                                {foreach $categories as $item}
                                    <option value='{$item->id_item}'
                                            {if isset($view.parent_id) && $view.parent_id eq $item->id_item}selected="selected"{/if}
                                            {if isset($view.id_item) && $view.id_item eq $item->id_item}disabled{/if}
                                    >{section sp $level}&nbsp;&nbsp;&nbsp;{/section}{$item->title}</option>
                                    {category_select categories=$item->subcategories level=$level+1}
                                {/foreach}
                            {/function}
                            {category_select categories=$categories}
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>

                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Meta-title</label>
                    <div class="mt-2">
                        <input value="{if isset($view.meta_title)}{$view.meta_title}{/if}" name="meta_title" type="text" placeholder="Meta-title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Meta-keywords</label>
                    <div class="mt-2">
                        <input value="{if isset($view.meta_keywords)}{$view.meta_keywords}{/if}" name="meta_keywords" type="text" placeholder="Meta-keywords"
                               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-900">Meta-descriptions</label>
                    <div class="mt-2">
								<textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" rows="3" name="meta_description" placeholder="Meta-descriptions">{if isset($view.meta_description)}{$view.meta_description}{/if}</textarea>
                    </div>
                </div>




                <div class="flex justify-evenly border mt-5 p-2">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" name="visible" value="1" {if isset($view.visible) AND $view.visible eq "1"}checked="checked"{/if}>
                        <div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
                        </div>
                        <span class="ms-3 text-sm font-medium">Видимость страницы</span>
                    </label>
                </div>

            </div>


        </div>

        <div class="w-3/4 bg-white shadow rounded p-4 overflow-hidden ml-2">
            <div class="w-12/12">
                <textarea name="text" id="edit" class="editor">{if isset($view.text)}{$view.text}{/if}</textarea>
            </div>
        </div>
    </div>





</form>