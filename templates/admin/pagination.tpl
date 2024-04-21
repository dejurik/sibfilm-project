{if $pages_count>1}

<div class="text-center mt-3">
	<ul class="inline-flex -space-x-px list-inside my-2">
	{* Количество выводимых ссылок на страницы *}
	{$visible_pages = 11}
		
	{* По умолчанию начинаем вывод со страницы 1 *}
	{$page_from = 1}
	{math equation="floor(x/y)" x=$visible_pages y=2 assign="floor_visible_pages"}
	{math equation="max(1,x-y-z)" x=$current_page y=$floor_visible_pages z=1 assign="max_page_from"}

	{* Если выбранная пользователем страница дальше середины "окна" - начинаем вывод уже не с первой *}
	{if $current_page > $floor_visible_pages}
		{$page_from = {math equation="max(1,x-y-z)" x=$current_page y=$floor_visible_pages z=1}}
	{/if}

	{* Если выбранная пользователем страница близка к концу навигации - начинаем с "конца-окна" *}
	{if $current_page > $pages_count-{math equation="ceil(x/y)" x=$visible_pages y=2}}
		{$page_from = {math equation="max(1,x-y-z)" x=$pages_count y=$visible_pages z=1}}
	{/if}
		
	{* До какой страницы выводить - выводим всё окно, но не более ощего количества страниц *}
	{$page_to = {math equation="min(x+y, z-1)" x=$page_from y=$visible_pages z=$pages_count}}

	{* Ссылка на 1 страницу отображается всегда *}
	{if $current_page>1}<li><a href="" class="py-2 px-3 ml-0  text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Назад</a></li>{/if}

	<li {if $current_page eq '1'}class="active"{/if}><a href="{url page=1}" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a></li>

										
	{* Выводим страницы нашего "окна" *}	
	{section name=pages loop=$page_to start=$page_from}
	{* Номер текущей выводимой страницы *}	
	{$p = $smarty.section.pages.index+1}	
	{* Для крайних страниц "окна" выводим троеточие, если окно не возле границы навигации *}	
	{if ($p == $page_from+1 && $p!=2) || ($p == $page_to && $p != $pages_count-1)}	
		<li><a href="{url page=$p}" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">...</a></li>
		{else}
		<li><a href="{url page=$p}" class="py-2 px-3 border border-gray-300 {if $current_page eq $p}text-blue-600 bg-blue-50 hover:bg-blue-100 hover:text-blue-700{else}text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700{/if}">{$p}</a></li>
		{/if}
	{/section}

	{* Ссылка на последнююю страницу отображается всегда *}
	<li {if $current_page eq $pages_count}class="active"{/if} ><a href="{url page=$pages_count}" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">{$pages_count}</a></li>
	
	{if $current_page<$pages_count}<li><a href="{url page=$current_page+1}" class="py-2 px-3 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Вперед</a></li>{/if}
									
	<li><a href="{url page=all}" class="py-2 px-3 text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">Все сразу</a></li>

	</ul>							
</div>						
{/if}