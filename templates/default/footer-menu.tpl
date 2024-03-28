<div class="col-12 col-sm-6 col-lg-3 col-xl-3 mb-10" data-aos="fade-up" data-aos-delay="200">
	<div class="single-footer-widget">
		<h2 class="widget-title">Контактная информация</h2>
		<p class="desc-content">Описание</p>
		<ul class="widget-address">
			<li><span>Адрес: </span> Россия, г.Саратов, ул.Выдуманная 1</li>
			<li><span>Телефон: </span> <a href="#"> +7 987 654-33-21</a></li>
			<li><span>Почта: </span> <a href="#"> выдуманная@сайт.ру</a></li>
		</ul>
		<div class="widget-social justify-content-start mt-4">
			<a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
			<a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
		</div>
	</div>
</div>

{if $footer_menu}
	{foreach from=$footer_menu key=key item=item}
		<div class="col-12 col-sm-6 col-lg-3 col-xl-3 mb-10" data-aos="fade-up" data-aos-delay="300">
			<div class="single-footer-widget">
				<h2 class="widget-title">{$item.title}</h2>
				{if isset($item.children) && is_array($item.children)}
					<ul class="widget-list">
						{foreach from=$item.children key=key item=items}
							{if !empty($items.id_item)}
								<li><a href="{$items.url}" class="{$items.class}" target="{if $items.target eq 1}_blank{else}_self{/if}">{$items.title}</a></li>
							{/if}
						{/foreach}
					</ul>
				{/if}
				</ul>
			</div>
		</div>
	{/foreach}
{/if}