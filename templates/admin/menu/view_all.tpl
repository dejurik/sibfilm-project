<div class="flex flex-wrap">
	<div class="flex items-center py-4 w-full">
		<div class="w-full">
			<div class="">
				<div class="flex flex-wrap justify-between">
					<div class="items-center ">
						<h1 class="font-semibold text-xl mb-1 block">Навигация</h1>
						<span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">Создание/редактиование навигационных разделов сайта</span>
					</div>
					<div class="flex items-center">
						<a rel="modal:open" href="/admin/?mod=menu&act=view_edit_group" class="px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Добавить группу</a>
						<a rel="modal:open" href="/admin/?mod=menu&act=view_edit_group&group_id={$currentGroup.id_item}" class="ml-2 px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Редактировать группу</a>
						{if $currentGroup.id_item neq 1}
							<a href="#" data-id="{$currentGroup.id_item}" data-url="/admin/?mod=menu&act=view_all" data-action="delete_group" data-title="{$currentGroup.title}" class="delete ml-2 px-3 py-2 lg:px-4 bg-red-600 text-white text-sm font-semibold rounded hover:bg-red-700">Удалить группу</a>
						{/if}
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


				<div class="mb-4 border-b border-gray-200">
					<ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
						{foreach from=$allGroup key=key item=item}
							<li class="mr-2" {if $currentGroup.id_item eq $item.id_item}class="active"{/if}>
								<a href="/admin/?mod=menu&act=view_all&group_id={$item.id_item}" class="inline-block p-4 rounded-t-lg border-b-2 {if $currentGroup.id_item neq $item.id_item}border-transparent hover:text-gray-600 hover:border-gray-300{/if}">{$item.title}</a>
							</li>
						{/foreach}
					</ul>
				</div>


				<div>
					<div class="p-4 rounded-lg">
						
						<div class="dd" id="sort_menu">
							{$menu['menu_ul']}
						</div>


						<form method="post" action="/admin/?mod=menu&act=view_all">
							<input type="hidden" class="form-control" value="save_positions" name="action"/>
							<input type="hidden" class="form-control" value="{$group_id}" name="group_id"/>
							<textarea id="nestable-output" rows="3" name="v" class="hidden"></textarea>
							<div class="mt-5 flex items- justify-end">
								<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
								<a rel="modal:open" href="/admin/?mod=menu&act=add_menu&group_id={$currentGroup.id_item}" class="ml-2 px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Создать пункт меню</a>
							</div>
							
						</form>	

					</div>
				</div>

			</div>

		</div>
	</div>
</div>