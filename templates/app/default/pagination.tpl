{* Постраничный вывод *}
{if isset($total_pages_num) && $total_pages_num>1}
    <div class="w-full block mt-8">
        <div class="flex flex-row mx-auto justify-end *:text-sm">
                    {* Количество выводимых ссылок на страницы *}
                    {$visible_pages = 10}

                    {* По умолчанию начинаем вывод со страницы 1 *}
                    {$page_from = 1}

                    {* Если выбранная пользователем страница дальше середины "окна" - начинаем вывод уже не с первой *}
                    {math equation="floor(x/2)" x=$visible_pages assign="floor_visible_pages"}
                    {if $current_page_num > $floor_visible_pages}
                        {math equation="max(1, x-y-1)" x=$current_page_num y=$floor_visible_pages assign="page_from"}

{*                        {$page_from = max(1, $current_page_num-$floor_visible_pages-1)}*}

                    {/if}

                    {* Если выбранная пользователем страница близка к концу навигации - начинаем с "конца-окно" *}
                    {math equation="ceil(x/2)" x=$visible_pages assign="ceil_visible_pages"}
                    {if $current_page_num > $total_pages_num-$ceil_visible_pages}
                        {math equation="max(1, x-y-1)" x=$total_pages_num y=$visible_pages assign="page_from"}
{*                        {$page_from = max(1, $total_pages_num-$visible_pages-1)}*}
                    {/if}

                    {* До какой страницы выводить - выводим всё окно, но не более ощего количества страниц *}
{*                    {$page_to = min($page_from+$visible_pages, $total_pages_num-1)}*}
                    {math equation="min(x, y)" x=$page_from+$visible_pages y=$total_pages_num-1 assign="page_to"}

                    {if $current_page_num==2}
                        <a href="{url page=null}" class="bg-[#34445d] h-fit text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-[#666c77] px-3">
                            <div class="flex flex-row align-middle">
                                <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-2">Начало</span>
                            </div>
                        </a>
                    {/if}
                    {if $current_page_num>2}
                        <a href="{url page=$current_page_num-1}" class="bg-[#34445d] h-fit text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-[#666c77] px-3">
                            <div class="flex flex-row align-middle">
                                <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-2">Раньше</span>
                            </div>
                        </a>
                    {/if}
                    {* Ссылка на 1 страницу отображается всегда *}




                    <a href="{url page=all}" class="bg-[#34445d] h-fit text-white py-2 border-l border-gray-200 hover:bg-[#666c77] px-3">
                        <div class="flex flex-row align-middle">
                            <span class="">Все</span>
                        </div>
                    </a>


                    {if $current_page_num<$total_pages_num}
                        <a href="{url page=$current_page_num+1}" class="bg-[#34445d] h-fit text-white rounded-r-md py-2 border-l border-gray-200 hover:bg-[#666c77] px-3">
                            <div class="flex flex-row align-middle">
                                <span class="mr-2">Дальше</span>
                                <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                    {/if}

        </div>
    </div>
{/if}

