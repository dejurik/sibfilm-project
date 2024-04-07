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
					{$content.title}
				</li>
			</ol>
		</div>


		{if $content.url neq 'services'}
			<div class="w-full h-40 bg-[#34445d] rounded-lg my-3 relative block">
				<div class="absolute bottom-7 left-7 *:text-white">
					<div class="text-2xl font-bold no-underline max-md:text-base">{$content.title}</div>
					<div class="text-sm hidden lg:block">{$content.meta_description}</div>
				</div>
			</div>
			<div class="w-full my-10 flex items-start justify-center">
				<div class="xl:max-w-[1000px] w-full *:text-[#34445d]">
					<div class="">
						{$content.text}
					</div>
				</div>
			</div>
		{else}
			<div class="flex flex-row w-full block w-auto bg-[#F3F3F3]/20 mb-8 max-sm:py-4">
				<div class="w-full sm:grid sm:grid-rows-2 sm:grid-flow-col sm:gap-4 max-sm:flex max-sm:flex-col">
					{$content.text}

				</div>
			</div>
		{/if}



		<div class="bg-[#F3F3F3] w-full h-120 rounded-lg block my-20">

			<div class="*:text-[#34445d] py-8 mx-12 border-b border-[#34445C]">
				<div class="text-2xl font-bold no-underline max-md:text-base">Заказать услугу:</div>
				<div class="text-sm hidden lg:block pt-2">Звоните по телефону:<span class="text-base font-bold">+7 987 654-33-21</span></div>
			</div>
			<div class="*:text-[#34445d] py-2 mx-12">
				<div class="text-sm hidden lg:block pt-2">Или отправьте нам сообщение</div>
			</div>
			<div class="*:text-[#34445d] py-2 mx-12">

				<form action="" method="post" class="">

					<div class="flex flex-wrap mb-6">
						<div class="w-full md:w-1/2 mb-6 md:mb-0 md:pr-1">
							<label class="block text-[#34445d] text-xs font-bold mb-2" for="name">Ваше имя</label>
							<input class="appearance-none block w-full bg-white text-[#34445d] border border-red-500 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white" id="name" type="text" placeholder="Ваше имя">
							<p class="text-red-500 text-xs italic">Пожалуйста, введите ваше имя</p>
						</div>
						<div class="w-full md:w-1/2 md:pl-1">
							<label class="block text-[#34445d] text-xs font-bold mb-2" for="phone">Телефон</label>
							<input class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-[#34445d]" id="phone" type="text" placeholder="Укажите телефон">
						</div>
					</div>
					<div class="flex flex-wrap mb-6">
						<div class="w-full">
							<label class="block text-[#34445d] text-xs font-bold mb-2" for="message">Сообщение</label>
							<textarea rows="10" class="appearance-none block w-full bg-white text-[#34445d] border border-[#34445D]/20 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white focus:border-[#34445D]"></textarea>
						</div>
						<div class="flex justify-between w-full flex-wrap">
							<div class="flex items-center mb-2">
								<input id="privacy" class="mr-2 w-5 h-5" type="checkbox">
								<label for="privacy" class="block text-[#34445d] text-xs">Я даю согласие на обработку моих персональных данных</label>
							</div>
							<button class="block text-sm border rounded-full text-[#34445C] border-[#34445C] px-4 py-2 hover:border-transparent hover:text-white hover:bg-[#34445C]" type="submit">
								Отправить сообщение
							</button>

						</div>


					</div>


				</form>

			</div>







		</div>


	</div>
</div>



