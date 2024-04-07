<form method="post" action="/admin/?mod=menu&act=view_all">
		<div class="">
				<input type="hidden" class="form-control" value="{if !empty($groupId)}{$groupId.id_item}{/if}" name="group_id"/>
				<input type="hidden" class="form-control" value="edit_group_menu" name="action"/>
				<label class="block text-sm text-gray-900">Заголовок</label>

				<div class="mt-2">
						<input value="{if isset($groupId.title)}{$groupId.title}{/if}" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
				</div>
		</div>

		<div class="mt-5 flex items- justify-end">
			<a href="#" rel="modal:close" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Отмена</a>
			<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
		</div>

</form>