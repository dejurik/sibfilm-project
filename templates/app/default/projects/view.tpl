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
					<a href="/projects" class="font-bold">Проекты</a>
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





		<div class="w-full h-120 rounded-lg block mb-8 bg-gradient-to-br from-[#34445C] from-10% via-[#7688a5] via-30% to-[#34445C] to-90%">

			<div class="flex flex-wrap *:text-white py-4 px-4">

				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-2/6 p-4">
					<div class="relative h-[500px] overflow-hidden rounded-lg">
						<img class="absolute inset-0 h-full w-full object-cover" src="{$content.picture}" alt="">
						<div class="absolute top-0 right-0 bg-[#34445C] text-white px-3 py-0.5 m-2 rounded-md text-xs">В РАБОТЕ</div>
					</div>
				</div>

				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-3/6 py-4 pl-4 pr-8">
					<div class="text-2xl mb-2">{$content.title}</div>

					{$content.description}

					{if count($project_staffs) > 0}
						<div class="grid xl:grid-cols-6 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-3 mt-20">
							{foreach from=$project_staffs key=key item=item}
								<div class="space-y-1.5">
									<img src="{$item.avatar}"  class="mx-auto w-20 rounded-full">
									<p class="text-xs text-center">{$item.title}</p>
									<p class="text-[0.6em] text-center text-gray-300 leading-3">{$item.post}</p>
								</div>
							{/foreach}
						</div>
					{/if}

				</div>

				{if count($project_options) > 0}
				<div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/6 my-4 pl-4 xl:border-l">
					<dl>
						{foreach from=$project_options key=key item=item}
							<dt class="text-xs text-gray-300">{$item.title}:</dt>
							<dd class="text-sm mb-8">{$item.value}</dd>
						{/foreach}
					</dl>
				</div>
				{/if}

			</div>



		</div>

		<div class="w-full my-10 flex items-start justify-center">
			<div class="xl:max-w-[1000px] w-full *:text-[#34445d]">
				<div class="">
					{$content.text}
				</div>

				{if $content.comments eq 1}
					<hr class="mt-12 my-2 border-gray-200">
					<div class="w-full mt-6 mx-auto">
					{foreach from=$comments key=key item=itemc}
						<div class="flex-col w-full py-4 px-4 mx-auto {cycle values="bg-[#F3F3F3],bg-white"} border-b-2 border-r-2 border-gray-200 rounded-lg shadow-sm mb-4">
							<div class="flex flex-row md-10">
								<div class="flex-col mt-1">
									<div class="flex items-center flex-1 px-4 font-bold leading-tight">
										{$itemc.name}
										<span class="ml-2 text-xs font-normal text-gray-500">{$itemc.created}</span>
									</div>
									<div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
										{$itemc.message}
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					</div>
				{/if}

			</div>
		</div>






		{if $content.comments eq 1}
			{include file="default/feedback/comments_form.tpl"}
		{else}
			{include file="default/feedback/feedback_form.tpl"}
		{/if}


	</div>

</div>





