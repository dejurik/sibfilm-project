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
                    <a href="/shop/{$category.url}" class="font-bold">{$category.title}</a>
                    <span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
                </li>
                <li class="flex items-center ml-2">
                    {$product.title}
                </li>
            </ol>
        </div>

        <div class="w-full h-52 rounded-lg shadow-lg mb-8 bg-[#98a0ad]"></div>
        <div class="grid grid-cols-4 gap-4 -mt-60 p-8">
            <div class="col-span-1 overflow-hidden">
                <img class="w-full rounded-lg shadow-lg" src="{$product.picture}" alt="{$product.title}">
            </div>
            <div class="col-span-3 h-full">
                <div class="text-white pt-12">
                    <h3 class="text-3xl text-white">{$product.title}</h3>
                    <div class="text-base opacity-80 mt-5 mb-16" id="play-list-artist">jef agaev</div>
                    <div class="text-gray-400 mb-8">
                        <div class="flex items-center space-x-2 text-xs">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
                            <span id="play-list-title">12 этажей вниз</span>
                        </div>
                    </div>
                </div>

                <div id="player_container" class="mb-8">
                    <audio id="player"></audio>
                </div>

                <ul class="text-xs divide-y cursor-default rounded-lg shadow-md overflow-hidden bg-[#34445d]/5" id="play-list" data-track-count="{$variants|count}">
                    {foreach from=$variants key=key item=variant}
                        {foreach from=$files key=key item=file}
                            {$variant_files_id=$variant.files|json_decode nocache}
                            {if is_array($variant_files_id)}
                                {if in_array($file.id_item, $variant_files_id)}
                                    <li class="flex items-center space-x-3 h-14 hover:bg-[#34445d]/20" data-file="{$file.filename}" data-index="{$variant@iteration}" data-title="{$variant.name}" data-author="{$variant.author}">
                                        <button class="p-5 hover:bg-[#34445d] group focus:outline-none h-full">
                                            <svg class="w-4 h-4 group-hover:text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                        </button>
                                        <div class="flex-1 text-[#34445d]">
                                            {$variant.name}
                                        </div>
                                        <div class="text-xs text-[#34445d] pr-4">
                                            {$variant.duration}
                                        </div>
                                    </li>
                                {else}
                                {/if}
                            {/if}
                        {/foreach}
                    {/foreach}


                </ul>


            </div>
        </div>






    </div>

</div>