{if $sliders}
	<div class="sm:px-16 px-6 flex justify-center items-center bg-gradient-to-b from-[#cccccc]/5">
		<div class="xl:max-w-[1280px] w-full z-50">
			{if $sliders.url}
				<a href="1">
					<video playsinline autoplay muted loop poster="{$sliders.image}"
						   class="block z-10 w-auto my-3">
						<source src="{$sliders.videofile}" type="video/webm">
					</video>
				</a>
			{else}
				<video playsinline autoplay muted loop poster="{$sliders.image}"
					   class="block z-10 w-auto my-3">
					<source src="{$sliders.videofile}" type="video/webm">
				</video>
			{/if}
		</div>
	</div>
{/if}
