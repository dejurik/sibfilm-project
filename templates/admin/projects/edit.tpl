{include file="templates/admin/ckeditor.tpl"}
<form method="post" enctype="multipart/form-data">

	<div class="flex flex-wrap">
		<div class="flex items-center py-4 w-full">
			<div class="w-full">
				<div class="">
					<div class="flex flex-wrap justify-between">
						<div class="items-center ">
							<h1 class="font-semibold text-xl mb-1 block">Проекты</h1>
							<span class="text-gray-500 text-xs font-semibold mr-2 py-0.5">{if isset($view.id_item)}Редактировать {else}Добавить {/if}проект</span>
						</div>
						<div class="flex items-center">
							<a href="/admin/?mod=projects&act=view_all" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Назад</a>
							<button type="submit "
									class="ml-3 px-3 py-2 lg:px-4 bg-green-500 text-white text-sm font-semibold rounded hover:bg-green-600">Сохранить проект</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="flex justify-between items-stretch mb-12">

		<div class="w-3/12 bg-white shadow rounded p-4 mr-2">

			<input name="id_item"  value="{if isset($view.id_item)}{$view.id_item}{/if}" type="hidden"/>
			<div class="">
				<label class="block text-sm text-gray-900">Заголовок</label>
				<div class="mt-2">
					<input value="{if isset($view.title)}{$view.title}{/if}" name="title" type="text" placeholder="Введите заголовок" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required id="title">
				</div>
			</div>
			<div class="mt-5">
				<label class="block text-sm text-gray-900">Meta-title</label>
				<div class="mt-2">
					<input value="{if isset($view.meta_title)}{$view.meta_title}{/if}" name="meta_title" type="text" placeholder="Meta-title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
				</div>
			</div>

			<div class="mt-5">
				<label class="block text-sm text-gray-900">Meta-keywords</label>
				<div class="mt-2">
					<input value="{if isset($view.meta_keywords)}{$view.meta_keywords}{/if}" name="meta_keywords" type="text" placeholder="Meta-keywords"
						   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" required>
				</div>
			</div>

			<div class="mt-5">
				<label class="block text-sm text-gray-900">Meta-descriptions</label>
				<div class="mt-2">
								<textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500" rows="3" name="meta_description" placeholder="Meta-descriptions">{if isset($view.meta_description)}{$view.meta_description}{/if}</textarea>
				</div>
			</div>




			<div class="flex flex-wrap items-end mb-2 mt-5">
				<div class="w-5/6 pr-3 mb-0">
					<label class="block text-sm text-gray-900">Ссылка</label>
					<input class="mt-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="Ссылка" type="text" name="url" value="{if isset($view.url)}{$view.url}{/if}" id="url">
				</div>

				<div class="w-1/6 pr-3 mb-0">
					<button type="button" id="generation"
							class="inline-flex items-center px-4 py-[11px] bg-blue-500 hover:bg-blue-600 text-white rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
						</svg>
					</button>
				</div>
			</div>

			<div class="flex border mt-5 py-2 pl-6">
				<label class="inline-flex items-center cursor-pointer">
					<input type="checkbox" class="sr-only peer" name="visible" value="1" {if isset($view.visible) AND $view.visible eq "1"}checked="checked"{/if}>
					<div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
					</div>
					<span class="ms-3 text-sm font-medium">Видимость проекта</span>
				</label>
			</div>

			<div class="flex border mt-5 py-2 pl-6">
				<label class="inline-flex items-center cursor-pointer">
					<input type="checkbox" class="sr-only peer" name="comments" value="1" {if isset($view.comments) AND $view.comments eq "1"}checked="checked"{/if}>
					<div class="relative w-12 h-6 bg-blue-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                            	peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px]
                            	after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
					</div>
					<span class="ms-3 text-sm font-medium">Комментарии</span>
				</label>
			</div>




		</div>



		<div class="w-6/12 bg-white shadow rounded p-4 mr-2">
			<div class="w-12/12">
				<label class="block text-sm text-gray-900 mb-2">Краткое описание</label>
				<textarea name="description" id="edit" class="editor">{if isset($view.description)}{$view.description}{/if}</textarea>
			</div>
			<div class="w-12/12 mt-5">
				<label class="block text-sm text-gray-900 mb-2">Описание</label>
				<textarea name="text" id="edit2" class="editor">{if isset($view.text)}{$view.text}{/if}</textarea>
			</div>
		</div>

		<div class="w-3/12 bg-white shadow rounded p-4">

			<div class="w-full">
				<label class="block text-sm text-gray-900">Картинка</label>
				<input class="mt-2 block w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-200 cursor-pointer p-1 focus:outline-none focus:border-transparent" id="image" accept=".jpg, .webp" type="file" name="picture">
				<div class="mt-1 text-xs text-gray-500">Доступно к загрузке тип файла webp, jpg, не более 5 мб</div>
				{if isset($view.picture)}<img src="{$view.picture}" alt="" class="mt-2 h-64 mx-auto block rounded">{/if}
				<input name="old_picture"  value="{if isset($view.picture)}{$view.picture}{/if}" type="hidden"/>
			</div>

			<div class="w-full mt-5">
				<label class="block text-sm text-gray-900">Над проектом работали:</label>
				<div class="mt-2">

					<select multiple class="text-xs text-gray-900 block w-full rounded py-1 px-2 leading-tight border border-gray-300" name="project_staffs[]">
						<option value="0" {if is_array($project_staffs) && count($project_staffs) == 0}selected="selected"{/if}>Не выбрано</option>
						{foreach from=$staffs key=key item=item}
							<option value="{$item.id_item}"
									{foreach from=$project_staffs key=key item=items}{if $item.id_item eq $items.staff_id}selected="selected"{/if}{/foreach}
							>{$item.title}</option>
						{/foreach}

					</select>

				</div>
			</div>

			<div class="w-full mt-5">
				<label class="block text-sm text-gray-900">Характеристики проекта</label>
				<div class="mt-2">

					{foreach from=$features key=key item=item}
						<div class="flex flex-wrap content-between mb-2 bg-gray-100" feature_id={$item.id_item}>
							<div class="flex items-center text-xs px-2">
								{$item.title}
							</div>
							<div class="ml-auto self-center text-xs">
								<input name=options[{$item.id_item}] value="{if isset($options[$item.id_item])}{$options[$item.id_item]['value']}{/if}" type="text" placeholder="{$item.title}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-2 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
							</div>
						</div>
					{/foreach}

					<div class="new_features">
						<div class="flex flex-wrap content-between mb-2" id="new_feature">
							<div class="flex items-center text-xs">
								<input name="new_options[names][]" value="" type="text" placeholder="Название свойства" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-2 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
							</div>
							<div class="ml-auto self-center text-xs">
								<input name="new_options[value][]" value="" type="text" placeholder="Значение свойства" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-2 leading-tight
					focus:outline-none focus:bg-white focus:border-gray-500">
							</div>
						</div>
					</div>


					<button type="button" id="addFeature"
							class="px-6 py-2 text-xs text-center text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:ring-blue-300">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
						</svg>
					</button>


				</div>
			</div>


		</div>


	</div>





</form>




