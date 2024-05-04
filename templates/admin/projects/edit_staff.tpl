<form method="post" action="/admin/?mod=projects&act=view_all">
		<div class="">
				<input type="hidden" class="form-control" value="{if isset($staff.id_item)}{$staff.id_item}{/if}" name="id"/>
				<input type="hidden" class="form-control" value="{if isset($staff.id_item)}edit_staff{else}add_staff{/if}" name="action"/>
				<label class="block text-sm text-gray-900">Заголовок</label>
				<div class="mt-2">
					<input value="{if isset($staff.title)}{$staff.title}{/if}" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
				</div>
		</div>
		<div class="mt-5">
				<label class="block text-sm text-gray-900">Должность</label>
				<div class="mt-2">
					<input value="{if isset($staff.post)}{$staff.post}{/if}" name="post" type="text" placeholder="Введите должность" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required>
				</div>
		</div>

		<div class="mt-5">
			<label class="block text-sm text-gray-900">Аватар</label>
			<div class="flex items-center py-4 w-full">

				<div class="w-2/12 block rounded-full" id="staff_avatar">
					{if isset($staff.avatar)}
						<div class="cropme" style="width: 100px; height: 100px;">
							<img src="{$staff.avatar}">
							<input name="old_picture"  value="{if isset($staff.avatar)}{$staff.avatar}{/if}" type="hidden"/>
						</div>
					{else}
						<div class="cropme" style="width: 100px; height: 100px;"></div>
					{/if}
				</div>

			</div>

			{literal}
				<script>
					$('.cropme').simpleCropper();
				</script>
			{/literal}
		</div>

		<div class="mt-5 flex items- justify-end">
			<a href="#" rel="modal:close" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Отмена</a>
			<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
		</div>


</form>
