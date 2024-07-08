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
					<a href="/shop" class="font-bold">Наш продукт</a>
					<span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
				</li>
				<li class="flex items-center ml-2">
					{$category.title}
				</li>
			</ol>
		</div>

		<div class="w-full h-32 bg-[#34445d] rounded-lg my-3 relative block">
			<div class="absolute bottom-7 left-7 *:text-white">
				<div class="text-2xl font-bold underline max-md:text-base">{$category.title}</div>
				<div class="text-sm hidden lg:block">{$category.text}</div>
			</div>
		</div>



		<div class="w-full grid grid-cols-4 gap-4">

			{foreach from=$products key=key item=item}
				<div class="w-full">
					<div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
						<div class="relative h-44 overflow-hidden rounded-lg m-2">
							<img class="absolute inset-0 h-full w-full object-cover" src="{$item.picture}" alt="{$item.title}">
							<div class="absolute top-0 right-0 bg-[#34445C] text-white px-3 py-0.5 m-2 rounded-md text-xs">{if $item.price eq 0}Бесплатно{else}Доступно к продаже{/if}</div>

							<div class="absolute top-0 left-0 bg-[#df4159] text-white p-2 m-2 rounded-md text-xs">
								{if $item.type_id eq 'video'}
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
									</svg>
								{elseif $item.type_id eq 'audio'}
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
									</svg>
								{elseif $item.type_id eq 'product'}
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
									<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
								</svg>
								{/if}
							</div>


						</div>
						<div class="pb-3 px-4 border-b text-center *:text-[#34445C]">
							<h2 class="mb-2 text-sm font-bold">{$item.title}</h2>
							<p class="text-xs">{$item.annotation|truncate:30}</p>
						</div>
{*						<div class="p-4 flex flex-row justify-between items-center text-gray-600">*}
{*							<div class="w-1/2 mx-1">*}
{*								<button href="#" class="w-full grow text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Цена: <span class="font-bold text-sm">500</span> р</button>*}
{*							</div>*}
{*							<div class="w-1/2 mx-1">*}
{*								<a href="/videos/123" class="block w-full px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0 font-bold text-sm text-center">Демо</a>*}
{*							</div>*}
{*						</div>*}
						<div class="p-4 mx-1">
							<a href="/shop/view/{$item.id_item}" class="block w-full px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0 text-center text-xs">Подробнее</a>

							{*							<button href="#" class="w-full text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Добавить в корзину</button>*}
						</div>
					</div>
				</div>
			{/foreach}

		</div>



		{include file="default/pagination.tpl"}



		<!-- This is an example component -->






		{include file="default/feedback/feedback_form.tpl"}

	</div>
</div>



