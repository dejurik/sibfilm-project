<div class="sm:px-16 px-6 flex justify-center items-center bg-gradient-to-b from-[#cccccc]/5">
	<div class="xl:max-w-[1280px] w-full">


		<div class="w-full my-3 py-2 px-4 bg-[#F3F3F3] ">
			<ol class="flex items-center text-[#34445C] *:text-xs">
				<li class="flex items-center">
					<a href="/" class="font-bold">Главная</a>
					<span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
				</li>
				<li class="flex items-center ml-2">
					Проекты
				</li>
			</ol>
		</div>

		<div class="w-full block flex flex-row justify-between items-end mt-4 *:text-[#34445C]">
			<div class="text-3xl">Проекты</div>
		</div>
		<div class="flex flex-wrap -mx-4">


			{foreach from=$content key=key item=item}
				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/5 p-4">
					<a href="/projects/{$item.url}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
						<div class="relative h-80 overflow-hidden rounded-lg">
							<img class="absolute inset-0 h-full w-full object-cover" src="{$item.picture}" alt="">
							<div class="absolute top-0 right-0 {if $item.id_item is odd}bg-blue-500{else}bg-[#34445C]{/if} text-white px-3 py-0.5 m-2 rounded-md text-xs">{if $item.id_item is odd}В РАБОТЕ{else}ЗАВЕРШЕН{/if}</div>

						</div>
						<div class="py-2 px-4 border-b *:text-[#34445C] h-24">
							<h2 class="mb-2 text-sm font-bold">{$item.title}</h2>
							<p class="text-xs">{$item.meta_description|truncate:30}</p>
						</div>
					</a>
				</div>
			{/foreach}

		</div>



		{include file="default/feedback/feedback_form.tpl"}

	</div>
</div>



