<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">
        <div class="w-full">
            <div class="">
                <div class="flex flex-wrap justify-between">
                    <div class="items-center ">
                        <h1 class="font-semibold text-xl mb-1 block">Категории</h1>
                        <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">Создание/редактиование категорий магазина</span>
                    </div>
                    <div class="flex items-center">
                        <a href="/admin/?mod=shop&act=category" class="ml-2 px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Добавить категорию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">
        <div class="w-full">

            <div class="bg-white shadow rounded-md h-full w-full p-4 relative overflow-hidden ">
                <div>
                    <div class="p-4 rounded-lg">

                        {if $success}
                        <div class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-700" role="alert">
                            <div class="ml-3 text-sm font-medium text-green-700">
                                {$success}
                            </div>
                        </div>
                        {/if}

                        <div class="dd" id="sort_menu">
                            {function name=category_list}
                                {if $categories}
                                    <ol class="dd-list">
                                    {foreach $categories as $category}
                                        <li data-id="{$category->id_item}" class="dd-item dd3-item">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">{$category->title}
                                                <span style="font-size:13px;color:#7E7E7E;">{$category->url}</span>
                                                <div class="float-right">
                                                    <a href="/admin/?mod=shop&act=category&id={$category->id_item}" class="inline-flex items-center p-2 bg-blue-500 hover:bg-blue-600 text-white rounded">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="#" class="delete ml-2 inline-flex items-center p-2 bg-red-600 hover:bg-red-700 text-white rounded-md" data-id="{$category->id_item}" data-url="/admin/?mod=shop&act=categories" data-action="delete" data-title="{$category->title}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            {if isset($category->subcategories)}
                                                {category_list categories=$category->subcategories}
                                            {/if}
                                        </li>
                                    {/foreach}
                                    </ol>
                                {/if}
                            {/function}
                            {category_list categories=$categories}
                        </div>


                        <form method="post" action="/admin/?mod=shop&act=categories">
                            <input type="hidden" class="form-control" value="save_positions" name="action"/>
                            <textarea id="nestable-output" rows="3" name="v" class="hidden"></textarea>
                            <div class="mt-5 flex items- justify-end">
                                <button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>