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

        {assign var="picture" value="{$smarty.const.A_PATH}{$product.picture}"}
        <div class="w-full h-auto rounded-lg block bg-[#98a0ad]">

            <div class="grid grid-cols-8 gap-4 py-8 px-8">
                <div class="col-span-4 h-auto">
                    <div class="text-6xl text-white font-bold uppercase mb-12">{$product.title}</div>
                    {foreach from=$options key=key item=item}
                        <span class="bg-gray-200/20 text-white text-xs uppercase mr-5 px-4 py-0.5 rounded font-bold">{$item.value}</span>
                    {/foreach}
                    <p class="mt-12 text-sm text-white">{$product.annotation}</p>

                    <button class="mt-12 relative inline-flex items-center text-white overflow-hidden bg-gradient-to-br from-[#34445C] from-10% via-[#7688a5] via-30% to-[#34445C] to-90%
                       shadow-md focus:outline-none rounded uppercase px-10 py-5 text-center text-lg tracking-wide
                       transition-all before:absolute
                       before:bottom-0 before:left-0 before:top-0
                       before:z-0 before:h-full before:w-0
                       before:bg-[#34445C] before:transition-all
                       before:duration-500 hover:before:left-0
                       hover:before:w-full">
                        <span class="relative z-10">Смотреть</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-6 w-6 h-6 z-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                    </button>



                </div>

                <div class="col-span-4 relative">
                    <img class="w-full h-[500px] object-cover rounded" src="{$product.picture}" alt="">
                    <div class="bg-gradient-to-r from-[#98a0ad] to-transparent absolute top-0 left-0 w-2/3 h-full"></div>
                </div>

            </div>

        </div>

        <div class="w-full my-3 flex items-start justify-center">
            <div class="xl:max-w-[1000px] w-full *:text-[#34445d]">

                {foreach from=$variants key=key item=variant}
                    {foreach from=$files key=key item=file}
                        {$variant_files_id=$variant.files|json_decode nocache}
                        {if is_array($variant_files_id)}
                            {if in_array($file.id_item, $variant_files_id)}
                                <video controls crossorigin playsinline data-poster="{$product.picture}" id="video_player" class="rounded player">
                                    <source src="{$file.filename}" type="video/mp4" size="1080" />
                                </video>
                            {else}
                            {/if}
                        {/if}
                    {/foreach}
                {/foreach}


                {$product.text}
            </div>



        </div>



        {if $product.comments eq 1}
            {include file="default/feedback/comments_form.tpl"}
        {else}
            {include file="default/feedback/feedback_form.tpl"}
        {/if}




    </div>

</div>