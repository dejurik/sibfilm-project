<div class="bg-[#7B8384] sm:px-16 px-6 flex justify-center items-start">
	<div class="xl:max-w-[1280px] w-full">


		<footer class="px-4">

			<div class="flex flex-col lg:flex-row justify-between py-10 mx-auto *:text-white border-b space-y-8 lg:space-y-0">
				<div class="lg:w-2/6 grow flex space-x-3">

					<div class="w-28 h-28">
						<img src="/templates/app/{$template}/images/logo.svg"/>
					</div>
					<div class="w-48 pt-3">
						<h3 class="uppercase">Сибирская сова</h3>
						<p class="space-y-1 text-xs italic">Производственный организм, творческих и технологичестких процессов</p>
					</div>

				</div>
				<div class="lg:w-4/6 grow">

					<div class="grid grid-cols-4 text-sm gap-x-3 gap-y-8 max-sm:grid-cols-none">

						{if $footer_menu}
							{foreach from=$footer_menu key=key item=item}
								<div class="space-y-3 max-sm:hidden">
									<h3 class="uppercase">{$item.title}</h3>
									{if isset($item.children) && is_array($item.children)}
										<ul class="space-y-1">
											{foreach from=$item.children key=key item=items}
												{if !empty($items.id_item)}
													<li><a href="{$items.url}" rel="noopener noreferrer" class="{$items.class}" target="{if $items.target eq 1}_blank{else}_self{/if}">{$items.title}</a></li>
												{/if}
											{/foreach}
										</ul>
									{/if}
								</div>


							{/foreach}
						{/if}



						<div class="space-y-3">
							<div class="uppercase ">Мы в социальных сетях:</div>
							<div class="flex justify-start space-x-2">
								<a rel="noopener noreferrer" href="{$config.youtube}" title="youtube" class="flex items-center">
									<img src="/templates/app/{$template}/images/youtube.svg" class="w-6"/>
								</a>
								<a rel="noopener noreferrer" href="{$config.facebook}" title="facebook" class="flex items-center">
									<img src="/templates/app/{$template}/images/facebook.svg" class="w-6"/>
								</a>
								<a rel="noopener noreferrer" href="{$config.instagram}" title="Instagram" class="flex items-center">
									<img src="/templates/app/{$template}/images/instagram.svg" class="w-6"/>
								</a>
								<a rel="noopener noreferrer" href="{$config.vk}" title="vk" class="flex items-center">
									<img src="/templates/app/{$template}/images/vk.svg" class="w-6"/>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="py-3 text-xs text-center text-white">© 2024 Сибирская сова. All rights reserved.</div>

		</footer>

	</div>
</div>