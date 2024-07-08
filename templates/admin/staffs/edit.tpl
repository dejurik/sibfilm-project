<form method="post" enctype="multipart/form-data">
	<div class="flex flex-wrap">
		<div class="flex items-center py-4 w-full">
			<div class="w-full">
				<div class="">
					<div class="flex flex-wrap justify-between">
						<div class="items-center ">
							<h1 class="font-semibold text-xl mb-1 block">Участники</h1>
							<span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">{if isset($view.id_item)}Редактировать {else}Добавить {/if} участника</span>
						</div>
						<div class="flex items-center">
							<a href="/admin/?mod=staffs&act=view_all" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
							<button type="submit "
									class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="flex justify-between items-stretch mb-12">
		<div class="w-1/4 bg-white shadow rounded p-4 mr-2">

			<div class="w-full ">
				<label class="block text-sm text-gray-900">Аватар</label>
				<div class="block rounded-full mt-2" id="staff_avatar">
					{if isset($view.avatar)}
						<div class="cropme" style="width: 300px; height: 300px;">
							<img src="{$view.avatar}" style="width: 300px; height: 300px;">
							<input name="old_picture"  value="{if isset($view.avatar)}{$view.avatar}{/if}" type="hidden"/>
						</div>
					{else}
						<div class="cropme" style="width: 300px; height: 300px;"></div>
					{/if}
				</div>
			</div>

		</div>

		<div class="w-3/4 bg-white shadow rounded p-4 overflow-hidden ml-2">
			<div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-start">
				<input name="id_item"  value="{if isset($view.id_item)}{$view.id_item}{/if}" type="hidden"/>
				<div class="">
					<label class="block text-sm text-gray-900">ФИО</label>
					<div class="mt-2">
						<input value="{if isset($view.title)}{$view.title}{/if}" name="title" type="text" placeholder="Введите фио" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
					</div>
				</div>
				<div class="mt-5">
					<label class="block text-sm text-gray-900">Должность</label>
					<div class="mt-2">
						<input value="{if isset($view.post)}{$view.post}{/if}" name="post" type="text" placeholder="Должность" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

