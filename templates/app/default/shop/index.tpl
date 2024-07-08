<div class="sm:px-16 px-6 flex justify-center items-center">
    <div class="xl:max-w-[1280px] w-full">


        <div class="w-full my-3 py-2 px-4 bg-[#F3F3F3] ">
            <ol class="flex items-center text-[#34445C] *:text-xs">
                <li class="flex items-center">
                    <a href="./" class="font-bold">Главная</a>
                    <span class="ml-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</span>
                </li>

                <li class="flex items-center ml-2">
                    Наш продукт
                </li>
            </ol>
        </div>

        <div class="w-full h-32 bg-[#34445d] rounded-lg my-3 relative block">
            <div class="absolute bottom-7 left-7 *:text-white">
                <div class="text-2xl font-bold underline max-md:text-base">Наш продукт</div>
                <div class="text-sm hidden lg:block">Видеопрокат, медиа и мерч</div>
            </div>
        </div>

        <div class="w-full grid grid-cols-3 gap-4 *:rounded-lg *:block mt-8">
            <a href="/shop/video" class="h-[350px] bg-[#34445d] bg-[url('/templates/app/default/images/service_lite.jpg')] bg-no-repeat bg-[right_top_2rem] drop-shadow grayscale hover:grayscale-0 delay-75 duration-75">
                <div class="absolute bottom-7 left-7 *:text-white">
                    <div class="text-2xl font-bold underline max-md:text-base">Видеопрокат</div>
                    <div class="text-sm hidden lg:block">Просмотр реализованных проектов</div>
                </div>
            </a>
            <a href="/shop/audio" class="h-[350px] bg-[#34445d] bg-[url('/templates/app/default/images/service_lite.jpg')] bg-no-repeat bg-[right_top_2rem] drop-shadow grayscale hover:grayscale-0 delay-75 duration-75">
                <div class="absolute bottom-7 left-7 *:text-white">
                    <div class="text-2xl font-bold underline max-md:text-base">Медиа</div>
                    <div class="text-sm hidden lg:block">Послушать музыку</div>
                </div>
            </a>
            <a href="/shop/merch" class="h-[350px] bg-[#34445d] bg-[url('/templates/app/default/images/service_lite.jpg')] bg-no-repeat bg-[right_top_2rem] drop-shadow grayscale hover:grayscale-0 delay-75 duration-75">
                <div class="absolute bottom-7 left-7 *:text-white">
                    <div class="text-2xl font-bold underline max-md:text-base">Мерч</div>
                    <div class="text-sm hidden lg:block">Забери сувенир на память</div>
                </div>
            </a>
        </div>

       {include file="default/feedback/feedback_form.tpl"}

    </div>
</div>