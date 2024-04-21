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
				{$content.text}
			</div>
		{/if}


		{include file="default/feedback/feedback_form.tpl"}

	</div>
</div>



