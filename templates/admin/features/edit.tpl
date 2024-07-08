<form method="post" enctype="multipart/form-data">
	<div class="flex flex-wrap">
		<div class="flex items-center py-4 w-full">
			<div class="w-full">
				<div class="">
					<div class="flex flex-wrap justify-between">
						<div class="items-center ">
							<h1 class="font-semibold text-xl mb-1 block">Характеристики</h1>
							<span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">{if isset($view.id_item)}Редактировать {else}Добавить {/if} свойство</span>
						</div>
						<div class="flex items-center">
							<a href="/admin/?mod=features&act=view_all" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
							<button type="submit"
									class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="flex justify-between items-stretch mb-12">


		<div class="w-full bg-white shadow rounded p-4 overflow-hidden ml-2">
			<div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-start">
				<input name="id_item"  value="{if isset($view.id_item)}{$view.id_item}{/if}" type="hidden"/>
				<div class="">
					<label class="block text-sm text-gray-900">Название</label>
					<div class="mt-2">
						<input value="{if isset($view.title)}{$view.title}{/if}" name="title" type="text" placeholder="Введите фио" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
					</div>
				</div>
				<div class="mt-5">
					<label class="block text-sm text-gray-900">Связь</label>

						<div class="mt-2 relative">
							<select name="module_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
								<option value="projects" {if isset($view) and $view.module_id eq 'projects'}selected="selected"{/if}>Проекты</option>
								<option value="shop" {if isset($view) and $view.module_id eq 'shop'}selected="selected"{/if}>Магазин</option>
							</select>
							<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
							</div>
						</div>

				</div>
			</div>
		</div>
	</div>
</form>

