<div class="header section">

		<!-- Header Top Start -->
		<div class="header-top bg-light">
			<div class="container">
				<div class="row row-cols-xl-2 align-items-center">
					<div class="col d-none d-lg-block">
						<div class="header-top-lan-curr-link">
							<div class="header-top-links">
								<span>Позвоните нам: </span><a href="#"> +7 987 654-33-21</a>
							</div>
						</div>
					</div>
					<div class="col">
						<p class="header-top-message">Дополнительный текст который можно вывести тут <a href="#">Ссылка</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Top End -->


		<!-- Header Bottom Start -->
		<div class="header-bottom">
			<div class="header-sticky">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-xl-3 col-6">
							<div class="header-logo">
								<a href="/"><img src="/templates/{$template}/img/logo.png" alt="Капланопись" /></a>
							</div>
						</div>

						<div class="col-xl-7 d-none d-xl-block">
							<div class="main-menu position-relative">
								<ul>
									{foreach from=$main_menu key=key item=item}
										{if $item.parent_id eq 0}
											{if !empty($item.id_item)}
												<li {if isset($item.children) && is_array($item.children)}class="has-children"{/if}>
													<a href="{$item.url}" target="{if $item.target eq 1}_blank{else}_self{/if}" class="{$item.class}"><span>{$item.title}</span>{if isset($item.children) && is_array($item.children)} <i class="fa fa-angle-down"></i>{/if}</a>
													{if isset($item.children) && is_array($item.children)}
														<ul class="sub-menu">
															{foreach from=$item.children key=key item=items}
																{if !empty($items.id_item)}
																	<li><a href="{$items.url}" class="{$items.class}" target="{if $items.target eq 1}_blank{else}_self{/if}">{$items.title}</a></li>
																{/if}
															{/foreach}
														</ul>
													{/if}
												</li>
											{/if}
										{/if}
									{/foreach}
									<li class="has-children">
										<a href="#"><span>Ссылка</span> <i class="fa fa-angle-down"></i></a>
										<ul class="sub-menu">
											<li><a href="#">Коллекция 1</a></li>
											<li><a href="#">Коллекция 2</a></li>
											<li><a href="#">Коллекция 3</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>


						<div class="col-xl-2 col-6">
							<div class="header-actions">
								<a href="#" class="header-action-btn header-action-btn-search"><i class="fa fa-search" aria-hidden="true"></i></a>
								<a href="#" class="header-action-btn d-none d-md-block"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
								<a href="javascript:void(0)" id="cart" class="header-action-btn header-action-btn-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
									<span class="header-action-num">{$cart.total_products}</span>
								</a>
								<a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block"><i class="fa fa-bars"></i></a>
							</div>
						</div>
						

					</div>
				</div>
			</div>
		</div>
		<!-- Header Bottom End -->


		<!-- Mobile Menu Start -->
		<div class="mobile-menu-wrapper">
			<div class="offcanvas-overlay"></div>
			<div class="mobile-menu-inner">
				<div class="offcanvas-btn-close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
				<div class="mobile-navigation">
					<nav>
						<ul class="mobile-menu">
							{foreach from=$main_menu key=key item=item}
								{if $item.parent_id eq 0}
									{if !empty($item.id_item)}
										<li {if isset($item.children) && is_array($item.children)}class="has-children"{/if}>
											<a href="{$item.url}" target="{if $item.target eq 1}_blank{else}_self{/if}" class="{$item.class}"><span>{$item.title}</span>{if isset($item.children) && is_array($item.children)} <i class="fa fa-angle-down" aria-hidden="true"></i>{/if}</a>
											{if isset($item.children) && is_array($item.children)}
												<ul class="dropdown">
													{foreach from=$item.children key=key item=items}
														{if !empty($items.id_item)}
															<li><a href="{$items.url}" class="{$items.class}" target="{if $items.target eq 1}_blank{else}_self{/if}">{$items.title}</a></li>
														{/if}
													{/foreach}
												</ul>
											{/if}
										</li>
									{/if}
								{/if}
							{/foreach}
							<li class="has-children">
								<a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown">
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
									<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
									<li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				<div class="mt-auto">
					<ul class="contact-links">
						<li><i class="fa fa-phone"></i><a href="#"> +7 987 654-33-21</a></li>
						<li><i class="fa fa-envelope-o"></i><a href="#"> почта@сайт.ру</a></li>
					</ul>
					<div class="widget-social">
						<a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
						<a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu End -->


		<!-- Search Start -->
		<div class="offcanvas-search">
			<div class="offcanvas-search-inner">
				<div class="offcanvas-btn-close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
				<form class="offcanvas-search-form" action="/shop/search" method="GET">
					<input name="keyword" type="text" placeholder="Поиск по каталогу..." class="offcanvas-search-input">
				</form>
			</div>
		</div>
		<!-- Search End -->


		<!-- Cart Offcanvas Start -->
		<div class="cart-offcanvas-wrapper">
			<div class="offcanvas-overlay"></div>
			<div class="cart-offcanvas-inner">
				<div class="offcanvas-btn-close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>

				<div class="offcanvas-cart-content">
					213
				</div>
			</div>
		</div>
		<!-- Cart Offcanvas End -->

	</div>