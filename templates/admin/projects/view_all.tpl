<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">
        <div class="w-full">
            <div class="">
                <div class="flex flex-wrap justify-between">
                    <div class="items-center ">
                        <h1 class="font-semibold text-xl mb-1 block">Проекты</h1>
                        <span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">Создание/редактиование проектов</span>
                    </div>
                    <div class="flex items-center">
                        <a href="/admin/?mod=projects&act=project" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Создать проект</a>
                        <a rel="modal:open" href="/admin/?mod=projects&act=staff" class="ml-4 px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Добавить участника</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-wrap">
    <div class="flex items-center py-4 w-full">

            <div class="bg-white shadow rounded-md h-full w-3/4 p-4 relative overflow-hidden">

                <table class="min-w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-2/5">
                            Заголовок
                        </th>
                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/5">
                            Ссылка
                        </th>
                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/5">
                            Статус
                        </th>
                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/5"></th>
                    </tr>
                    </thead>
                    <tbody>

                    {foreach from=$view_all key=key item=item}
                        <tr class="bg-white border-b border-dashed">
                            <td class="p-3 text-sm font-medium whitespace-nowrap">
                                <a href="/admin/?mod=projects&act=project&id={$item.id_item}" class="text-blue-500">{$item.title}</a>
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap">
                                /proects/{$item.url}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap inline-flex items-center mt-2">

                                {if $item.visible eq 1}
                                    <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                    </span>
                                {else}
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                    </span>
                                {/if}
                                <span class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 mt-0 rounded">
								ID ({$item.id_item})
							</span>
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap text-right">

                                <a href="/projects/{$item.url}" class="inline-flex items-center px-2 py-2 bg-green-500 hover:bg-green-500 text-white rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>

                                <a href="/admin/?mod=projects&act=project&id={$item.id_item}" class="inline-flex items-center px-2 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>

                                <a href="#" class="delete inline-flex items-center px-2 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md" data-id="{$item.id_item}"  data-action="delete" data-url="/admin/?mod=projects&act=view_all" data-title="{$item.title}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </a>


                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>

            <div class="ml-4 bg-white shadow rounded-md h-full w-1/4 p-4 relative overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-2/5">
                                ФИО/должность
                            </th>
                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase w-1/5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$staff_all key=key item=item}
                        <tr class="bg-white border-b border-dashed">
                            <td class="p-3 text-sm font-medium whitespace-nowrap">
                                <a rel="modal:open" href="/admin/?mod=projects&act=staff&id={$item.id_item}" class="text-blue-500">{$item.title}</a>
                            </td>

                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap text-right">

                                <a rel="modal:open" href="/admin/?mod=projects&act=staff&id={$item.id_item}" class="inline-flex items-center px-2 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>

                                <a href="#" class="delete inline-flex items-center px-2 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md" data-id="{$item.id_item}"  data-action="delete_staff" data-url="/admin/?mod=projects&act=view_all" data-title="{$item.title}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </a>


                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>


    </div>
</div>