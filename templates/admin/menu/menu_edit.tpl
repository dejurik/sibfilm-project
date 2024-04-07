<form method="post" action="/admin/?mod=menu&act=view_all">
		<div class="">
				<input type="hidden" class="form-control" value="{if isset($view_m)}{$view_m.id_item}{/if}" name="id_item"/>
				<input type="hidden" class="form-control" value="{if isset($view_m)}edit_menu{else}add_menu{/if}" name="action"/>
				<input type="hidden" class="form-control" value="{$group_id}" name="group_id"/>
				<label class="block text-sm text-gray-900">Заголовок</label>
				<div class="mt-2">
						<input value="{if isset($view_m.title)}{$view_m.title}{/if}" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
				</div>
		</div>
		<div class="mt-5">
				<label class="block text-sm text-gray-900">Ссылка</label>
				<div class="mt-2">
						<input value="{if isset($view_m.url)}{$view_m.url}{/if}" name="url" type="text" placeholder="Введите ссылку" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight
							focus:outline-none focus:bg-white focus:border-gray-500" required>
				</div>
		</div>

		<div class="mt-5">
				<label class="block text-sm text-gray-900">Открытие пункта меню</label>
				<div class="mt-2 relative">
						<select name="link_target" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
							<option value="1" {if isset($view_m) and $view_m.target eq 1}selected="selected"{/if}>Новое окно</option>
							<option value="2" {if isset($view_m) and $view_m.target eq 2 or !isset($view_m)}selected="selected"{/if}>Текущее окно</option>
						</select>
						<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
						</div>
				</div>
		</div>

		<div class="mt-5">
				<label class="block text-sm text-gray-900">Стиль пункта меню</label>
				<div class="mt-2 relative">
						<select name="link_class" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
								<option value="2" {if isset($view_m) and $view_m.class eq 2}selected="selected"{/if}>Выделенный</option>
								<option value="3" {if isset($view_m) and $view_m.class eq 3}selected="selected"{/if}>Особый</option>
								<option value="1" {if isset($view_m) and $view_m.class eq 1 or !isset($view_m)}selected="selected"{/if}>По умолчанию</option>
						</select>
						<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
						</div>
				</div>
		</div>

		<div class="mt-5 flex items- justify-end">
			<a href="#" rel="modal:close" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Отмена</a>
			<button type="submit " class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить</button>
		</div>

</form>