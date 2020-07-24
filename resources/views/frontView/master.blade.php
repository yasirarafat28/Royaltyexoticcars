@extends('layouts.front')
@section('content')
	<main class="main">
		<section class="hero">
			<div class="hero__content">
				<div class="card card__hero">
					<div class="hero__label">Rated #1 for Exotic Car Rentals<br />in Las Vegas on <a
							href="https://www.tripadvisor.com/Attraction_Review-g45963-d8765047-Reviews-Royalty_Exotic_Cars-Las_Vegas_Nevada.html"
							id="Hero-TripAdvisor-Link" target="_blank" class="hero__rating--highlight">TripAdvisor</a>
					</div>
					<h1 class="hero__h1">Exotic Car Rentals at the lowest prices!</h1>
					<p class="hero__description">Royalty Exotic Cars has the largest selection of <strong>exotic
							cars</strong>, <strong>suvs</strong>, <strong>autocycles</strong> &amp;
						<strong>motorcycles</strong> for rent</p>
				</div>
				<div class="card card__cta"><a id="Hero-Call-Button" href="tel:+18669841187"
						class="hero__cta hero__cta--top w-inline-block">
						<div class="hero__cta--text">Call to Book!</div><img
							src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5356d_contact-white.svg"
							alt="" class="hero__cta--icon" />
					</a><a href="https://fareharbor.com/embeds/book/royalty-exotic-cars/" id="Hero-Book-Online-Button"
						class="hero__cta hero__cta--bottom w-inline-block">
						<div class="hero__cta--text">Book Online!</div><img
							src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a534d4_calendar.svg"
							alt="" class="hero__cta--icon" />
					</a></div>
				<div class="hero__note">We Beat Competitors&#x27;s Prices!</div>
			</div>
			<div class="banner__collection w-dyn-list">
				<div role="list" class="banner__list w-dyn-items">
					<div style="background-image:url(/frontEnd/5a10aaa4d85f4b0001a5419a_2017-lamborghini-huracan-spyder-orange-exterior-front-angle-royalty-exotic-cars.jpg); width:800px; height:400px;"
						role="listitem" class="banner__item w-dyn-item mySlides">
					</div>
					<div style="background-image:url(/frontEnd/5a10aaa4d85f4b0001a541d8_2015-bentley-continental-gtc-red-car-hero-2-image-royalty-exotic-cars.jpg); width:800px; height:400px;"
						role="listitem" class="banner__item w-dyn-item mySlides"> 
					</div>
					<div style="background-image:url(/frontEnd/5a10aaa4d85f4b0001a5419a_2017-lamborghini-huracan-spyder-orange-exterior-front-angle-royalty-exotic-cars.jpg); width:800px; height:400px;"
						role="listitem" class="banner__item w-dyn-item mySlides">
					</div>
					<div class="div-properties-inside-nav-bar" style="padding: 8px; width: 100%; display: inline-flex; justify-content: center;">
						<span class="dot" style="text-align:center;
												 cursor: pointer; 
						                         height: 15px;
												 width: 15px;
												 margin: 0 2px;
												 background-color: #bbb;
												 border-radius: 50%;
												 display: inline-block;
												 transition: background-color 0.6s ease;
												 float:left;" 
  												onclick="currentSlide(1)"></span>
						<span class="dot" style="text-align:center;
												 cursor: pointer; 
						                         height: 15px;
												 width: 15px;
												 margin: 0 2px;
												 background-color: #bbb;
												 border-radius: 50%;
												 display: inline-block;
												 transition: background-color 0.6s ease;
												 float:left;" 
												  onclick="currentSlide(2)"></span>
						<span class="dot" style="text-align:center;
												 cursor: pointer; 
						                         height: 15px;
												 width: 15px;
												 margin: 0 2px;
												 background-color: #bbb;
												 border-radius: 50%;
												 display: inline-block;
												 transition: background-color 0.6s ease;
												 float:left;" 
												  onclick="currentSlide(3)"></span> 
					</div>
				</div>
			</div>
		</section>
		<div class="reviews">
			<div class="reviews__item"><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5b2542c4a3234f310ba98fdb_logo-youtube-red.svg"
					alt="TripAdvisor Top Rated Company" class="reviews__logo" /><a
					href="https://www.youtube.com/channel/UC9uIfxBZsokLzeqqgMv_qYw" target="_blank"
					class="reviews__youtube w-inline-block"><img
						src="/frontEnd/5e1258524b55b0f3303c2605_youtube-subscribe.png"
						srcset="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e1258524b55b0f3303c2605_youtube-subscribe-p-500.png 500w, https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e1258524b55b0f3303c2605_youtube-subscribe.png 1660w"
						sizes="(max-width: 479px) 20vw, 8vw" alt="" class="reviews__youtube--img" /></a>
				<div class="reviews__text">269 videos, 400K subs, 40M views &amp; counting!</div><a
					href="https://www.youtube.com/channel/UC9uIfxBZsokLzeqqgMv_qYw" target="_blank"
					id="Watch-Our-Vlog-Link" class="reviews__link">Watch our Vlog!</a>
			</div>
			<div class="reviews__item"><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74e9e6fc00011a8e3e_reviews-tripadvisor-light-bg.svg"
					alt="TripAdvisor Top Rated Company" class="reviews__logo" /><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a535ce_trip-advisor-stars.svg"
					alt="" class="reviews__stars" />
				<div class="reviews__text">5 star average rating based on <strong>1,550</strong> reviews</div><a
					href="https://www.tripadvisor.com/Attraction_Review-g45963-d8765047-Reviews-Royalty_Exotic_Cars-Las_Vegas_Nevada.html"
					target="_blank" id="TripAdvisor-Review-Link" class="reviews__link">Leave a TripAdvisor Review</a>
			</div>
			<div class="reviews__item"><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74afc4be0001e0ec84_reviews-google-light-bg.svg"
					alt="TripAdvisor Top Rated Company" class="reviews__logo" /><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5360b_google-reviews-stars.svg"
					alt="" class="reviews__stars" />
				<div class="reviews__text">5 star average rating based on <strong>571</strong> reviews</div><a
					href="https://goo.gl/maps/Bxth6drQDFqZTnvF9" target="_blank" id="Google-Review-Link"
					class="reviews__link">Leave a Google Review</a>
			</div>
			<div class="reviews__item"><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74e1788700018e6cd1_reviews-facebook-light-bg-2.svg"
					alt="TripAdvisor Top Rated Company" class="reviews__logo" /><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a62817bae7e6500016b012c_stars-facebook.svg"
					alt="" class="reviews__stars" />
				<div class="reviews__text">5 star average rating based on <strong>230</strong> reviews</div><a
					href="https://www.facebook.com/pg/RoyaltySupercarRentals/reviews/" target="_blank"
					id="Facebook-Review-Link" class="reviews__link">Leave a Facebook Review</a>
			</div>
			<div class="reviews__item"><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74e9e6fc00011a8e3d_reviews-yelp-light-bg.svg"
					alt="TripAdvisor Top Rated Company" class="reviews__logo" /><img
					src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5372b_yelp-reviews-stars.svg"
					alt="" class="reviews__stars" />
				<div class="reviews__text">5 star average rating based on <strong>169</strong> reviews</div><a
					href="https://www.yelp.com/biz/royalty-exotic-cars-las-vegas-5?hrid=Y6HEV_AYvUQs5RMwUD5guw&amp;rh_type=phrase&amp;rh_ident=unlimited_mile"
					target="_blank" id="Yelp-Review-Link" class="reviews__link">Leave a Yelp Review</a>
			</div>
		</div>
		<div class="rentals">
			<h2 class="home__h2">Browse our fleet</h2>
			<div class="rent__nav"><a id="Browse-Supercar-Rentals-Link" href="/car-rentals"
					class="rent__nav--link w-inline-block"><img
						src="/frontEnd/5d3f3e9d9f2cd93b57223d57_001-cars.jpg"
						alt="" />
					<div class="rent__nav--label">Car Rentals</div>
				</a><a id="Browse-SUV-Rentals-Link" href="/suv-rentals"
					class="rent__nav--link w-inline-block"><img
						src="/frontEnd/5d3f3e92ffba056a84408ad3_002-suv.jpg"
						alt="" />
					<div class="rent__nav--label">SUV Rentals</div>
				</a><a id="Browse-Slingshot-Rentals-Link" href="/car-rentals"
					class="rent__nav--link w-inline-block"><img
						src="/frontEnd/5d3f3e7d23fb0f428fb98133_004-autocycle.jpg"
						alt="" />
					<div class="rent__nav--label">Autocycle Rentals</div>
				</a><a id="Browse-Motorcycle-Rentals-Link" href="/car-rentals"
					class="rent__nav--link w-inline-block"><img
						src="/frontEnd/5d3f3e8725d7f1e6c2db4edb_003-motorcycles.jpg"
						alt="" />
					<div class="rent__nav--label">Motorcycle Rentals</div>
				</a></div>
			<div id="supercar-rentals" class="rentals__section">
				<h3 class="home__h3">Supercar Rentals</h3>
				<div class="rent__collection w-dyn-list">
					<div role="list" class="rent__list rent__list--super w-dyn-items">
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="lamborghini-aventador">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="lamborghini-aventador" data-reach-trending-hide>
											Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e18c1c68f1cc77f9bb8451e_Exterior%20(%20Hero%20)%20.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e18c1bbb04093d1772364e2_Exterior%20(%20rear%20quarter%20)%20.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e18c1d48f1cc7477bb85107_Exterior%20(%20Side%20Profile%20)%20.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Aventador </div>
										<div>4 Hrs: $</div>
										<div>999</div>
										<div>    |    8 Hrs: $</div>
										<div>1749</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1749</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">2299</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a54901_mclaren-icon-black.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-mclaren-720s-bright-orange">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-mclaren-720s-bright-orange"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5af4d00138c15114e253c7df_2018-mclaren-720s-bright-orange-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5af4cffc38c1513c6b53c7dc_2018-mclaren-720s-bright-orange-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5af4d00ba3698787f466150d_2018-mclaren-720s-bright-orange-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">McLaren 720S</div>
										<div>4 Hrs: $</div>
										<div>799</div>
										<div>    |    8 Hrs: $</div>
										<div>1499</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1499</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1999</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-lamborghini-huracan-twin-turbo-1000-hp-black">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-lamborghini-huracan-twin-turbo-1000-hp-black"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e347b1abefcbc12ec7ee0ae_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e347b0c7c2199789067629e_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e347b577c21991f2e6789a9_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán TT 1000HP</div>
										<div>4 Hrs: $</div>
										<div>699</div>
										<div>    |    8 Hrs: $</div>
										<div>1399</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1399</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1799</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2020-lamborghini-huracan-evo">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2020-lamborghini-huracan-evo"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e18c293d73f97017d30c18e_Exterior%20(%20Front%20Angle%20)%20.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e18c2893fa32147ddb3e822_Exterior%20(%20Rear%20Angle%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e18c29b3fa321b380b3edb4_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán Evo TT 1000HP</div>
										<div>4 Hrs: $</div>
										<div>749</div>
										<div>    |    8 Hrs: $</div>
										<div>1399</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1399</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1999</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-lamborghini-huracan-perfomante">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-lamborghini-huracan-perfomante"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e2caeea48350f6d45ce5483_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e2caedc4a5de281b32cae60_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e2caef69552f70410c06bee_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán Performante</div>
										<div>4 Hrs: $</div>
										<div>649</div>
										<div>    |    8 Hrs: $</div>
										<div>1299</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1299</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1899</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a5414a_Ferrari-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-ferrari-488-red-convertible">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-ferrari-488-red-convertible"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a5429f_2017-ferrari-488-red-convertible-car-hero-image-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5a10aaa4d85f4b0001a545cc_2017-ferrari-488-convertible-red-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a545d3_2017-ferrari-488-convertible-red-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ferrari 488 Spider</div>
										<div>4 Hrs: $</div>
										<div>599</div>
										<div>    |    8 Hrs: $</div>
										<div>1099</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1099</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1599</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a5414a_Ferrari-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-ferrari-488-gtb-red">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-ferrari-488-gtb-red"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a548f3_2017-ferrari-488-gtb-coupe-red-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5a10aaa4d85f4b0001a54928_2017-ferrari-488-gtb-coupe-red-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a54926_2017-ferrari-488-gtb-coupe-red-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ferrari 488 GTB</div>
										<div>4 Hrs: $</div>
										<div>599</div>
										<div>    |    8 Hrs: $</div>
										<div>1099</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1099</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1599</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a5414a_Ferrari-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-ferrari-488-spyder-white-convertible">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-ferrari-488-spyder-white-convertible"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5af4be5feee5104947ba2c94_2018-ferrari-488-spyder-white-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5af4be5bdbb1e30fb82db835_2018-ferrari-488-spyder-white-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5af4be6682b39068f655eb64_2018-ferrari-488-spyder-white-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ferrari 488 Spider</div>
										<div>4 Hrs: $</div>
										<div>599</div>
										<div>    |    8 Hrs: $</div>
										<div>1099</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1099</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1599</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-lamborghini-huracan-yellow-convertible">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-lamborghini-huracan-yellow-convertible"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b3a471eb496c56d2e70b5ca__0018_SPD06399.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b3a471804200910c9fc9cc5__0017_SPD06407.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b3a468d0420090a46fc9c77__0002_Layer%201.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán Spyder</div>
										<div>4 Hrs: $</div>
										<div>599</div>
										<div>    |    8 Hrs: $</div>
										<div>1099</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1099</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-lamborghini-huracan-green-convertible">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-lamborghini-huracan-green-convertible"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e18c6a72ac2dbfc0e3f6d03_Exterior%20(%20Front%20Angle%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5a10aaa4d85f4b0001a542a5_2017-lamborghini-huracan-convertible-red-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a542b7_2017-lamborghini-huracan-convertible-red-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán Spyder</div>
										<div>4 Hrs: $</div>
										<div>599</div>
										<div>    |    8 Hrs: $</div>
										<div>1099</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1099</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1599</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-lamborghini-huracan-spider-white">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-lamborghini-huracan-spider-white"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b3a4892184bdd4152129a23__0003_Layer%202.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b3a48c6042009717afc9dfe__0009_SPD00156.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b3a48cf52b2dc73071bb1e1__0010_SPD00150.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán Spyder</div>
										<div>4 Hrs: $</div>
										<div>599</div>
										<div>    |    8 Hrs: $</div>
										<div>1099</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1099</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-lamborghini-huracan-orange-convertible">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2017-lamborghini-huracan-orange-convertible"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a5419a_2017-lamborghini-huracan-spyder-orange-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5a10aaa4d85f4b0001a5419d_2017-lamborghini-huracan-spyder-orange-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a5419c_2017-lamborghini-huracan-spyder-orange-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán Spyder</div>
										<div>4 Hrs: $</div>
										<div>549</div>
										<div>    |    8 Hrs: $</div>
										<div>999</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>999</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="lamborghini-huracan">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="lamborghini-huracan" data-reach-trending-hide>
											Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e2ce7be20fab2b3cb97bdcb_Exterior%20(%20Front%20Angle%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e2ce7b6d12a962e9cc03b7d_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e2ce7c7d12a9600b5c04100_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracan</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1399</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2015-lamborghini-huracan-red">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2015-lamborghini-huracan-red"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5af4cd5938c1514ed053c1d9__0002_Rosso%20Huracan%20Body%20Kit%205.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5af4cd7e8ec18dcad3a582f1__0005_Rosso%20Huracan%20Body%20Kit%203.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5af4cd774aa963a986f497bd__0004_Rosso%20Huracan%20Body%20Kit%204.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-lamborghini-huracan-orange">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-lamborghini-huracan-orange"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e18c7b1d73f9787bc32f367_2016-lamborghini-huracan-610-4-orange-car-hero-image-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e18c78f0d00d9684728fb77_2016-lamborghini-huracan-610-4-orange-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e18c7c2d3815c0e49d021da_2016-lamborghini-huracan-610-4-orange-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-lamborghini-huracan-green-coupe">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-lamborghini-huracan-green-coupe"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b3a45c8b496c5652970b51e__0015_SPD00051.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b3a45ba184bddbfb9129758__0013_SPD00056.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b3a4555042009343cfc9be0__0002_Layer%201.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán </div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1399</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rent__item--super w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="lamborghini-huracan-2">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="lamborghini-huracan-2" data-reach-trending-hide>
											Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e5597793b181b5728ca36a4_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e55976e8dbb6d13b58cf8ca_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e5597869c46514ce5936f70_Exterior%20(%20Side%20Profile%20)%20.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Huracán</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1399</div>
										</div>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
			<div id="exotic-car-rentals" class="rentals__section">
				<h3 class="home__h3">Exotic Car Rentals</h3>
				<div class="rent__collection w-dyn-list">
					<div role="list" class="rent__list cards__exotic w-dyn-items">
						<div role="listitem" class="rent__item rentals__item--exotic w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a54901_mclaren-icon-black.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="mclaren-570s-spider">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="mclaren-570s-spider" data-reach-trending-hide>
											Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5eff678e2ecec55d5a910a1c_Exterior%20(%20Front%20Quarter%20)%20.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5eff6795476402617d259f75_Exterior%20(%20Rear%20Quarter%20)%20.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5eff6875d50fbda6fc059b61_Exterior%20(%20Side%20Profile%20)%20.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">McLaren 570s Spider</div>
										<div>4 Hrs: $</div>
										<div>549</div>
										<div>    |    8 Hrs: $</div>
										<div>999</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>999</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1299</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--exotic w-dyn-item"><a
								id="Supercar-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a5414a_Ferrari-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2015-ferrari-458-italia-yellow-convertible">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2015-ferrari-458-italia-yellow-convertible"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e55594574aed6fde03988e8_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e55593bb4728823dc5e571e_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e555b227b3c450a220caa5a_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ferrari 458 Italia Spider</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1399</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--exotic w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a54901_mclaren-icon-black.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-mclaren-570s-orange">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2018-mclaren-570s-orange"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a54541_2017-mclaren-570s-orange-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img src="#" alt=""
										class="rentals__photo rentals__photo--mobile w-dyn-bind-empty" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a54571_2017-mclaren-570s-orange-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">McLaren 570S</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1199</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--exotic w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a540d1_Artboard 1.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-porsche-911-gt3-rs-orange">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-porsche-911-gt3-rs-orange"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a54981_2016-porsche-gt3-rs-orange-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5a10aaa4d85f4b0001a5497d_2016-porsche-gt3-rs-orange-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a5497e_2016-porsche-gt3-rs-orange-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Porsche 911 GT3 RS</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1599</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--exotic w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5bbe40d13883132b070e0582_brand-aston-martin-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2019-aston-martin-vantage">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2019-aston-martin-vantage"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5bd27bc53ed808601a8cce23__0020_DSC09852.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5bd27bed42c5472bfa55e8af__0025_DSC09839.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5bd27be817a13e2fac478959__0024_DSC09841-v2.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Aston Martin Vantage</div>
										<div>4 Hrs: $</div>
										<div>399</div>
										<div>    |    8 Hrs: $</div>
										<div>799</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>799</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1299</div>
										</div>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
			<div id="sports-car-rentals" class="rentals__section">
				<h3 class="home__h3">Sports Car Rentals</h3>
				<div class="rent__collection w-dyn-list">
					<div role="list" class="rent__list cards__sports w-dyn-items">
						<div role="listitem" class="rent__item rentals__item--sports w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53c97_nissan-gtr-logo-dark.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-nissan-gt-r-black">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-nissan-gt-r-black" data-reach-trending-hide>
											4-Seater Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a54990_2016-nissan-gt-r-black-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5ae7901bd99a3dbe45d6444e_2016-nissan-gt-r-black-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a5498a_2016-nissan-gt-r-black-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Nissan GT-R Fully Modded </div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>899</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>899</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1299</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--sports w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5e2a79adbe4a74307320a38f_brand-dodge-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="dodge-challenger-hellcat">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="dodge-challenger-hellcat"
											data-reach-trending-hide>Coupe</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e18bd806d71eb0c776181df_Exterior%20(%20Front%20Angle%20)%20.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e18bd746d71eb45396178b8_Exterior%20(%20Rear%20Angle%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e18bddad3815cb0f5caaaf5_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Dodge Challenger Hellcat</div>
										<div>4 Hrs: $</div>
										<div>349</div>
										<div>    |    8 Hrs: $</div>
										<div>599</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>599</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">799</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--sports w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53c95_corvette-dark.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-corvette-z06-red-convertible">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-corvette-z06-red-convertible"
											data-reach-trending-hide>Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e213f59e13699335a11e7c7_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e213d01bd02cf7d13acb57a_Exterior%20(%20Rear%20Quater%20(.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e213adf4ea44a50e1a306e8_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Corvette Stingray</div>
										<div>4 Hrs: $</div>
										<div>349</div>
										<div>    |    8 Hrs: $</div>
										<div>349</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>349</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">649</div>
										</div>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
			<div id="luxury-car-rentals" class="rentals__section">
				<h3 class="home__h3">Luxury Car Rentals</h3>
				<div class="rent__collection w-dyn-list">
					<div role="list" class="rent__list cards__luxury w-dyn-items">
						<div role="listitem" class="rent__item rentals__item--luxury w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a8627d91a47200001d7e77f_brand-rolls-royce-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2014-rolls-royce-ghost-v-spec-black">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2014-rolls-royce-ghost-v-spec-black"
											data-reach-trending-hide>Sedan</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b689428f109cf5df5d9f9f2__0015_SPD00875.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b6894165fc94ccc5d49b9d5__0012_SPD00905.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b6893c80512e92bacb55bb4__0003_Layer%202.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Rolls Royce Ghost </div>
										<div>4 Hrs: $</div>
										<div>599</div>
										<div>    |    8 Hrs: $</div>
										<div>999</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>999</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--luxury w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53ed4_bentley-on-light-background.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2015-bentley-continental-gtc-red">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2015-bentley-continental-gtc-red"
											data-reach-trending-hide>4-Seater Convertible</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a541d8_2015-bentley-continental-gtc-red-car-hero-2-image-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5a10aaa4d85f4b0001a541da_2015-bentley-continental-gtc-red-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a541de_2015-bentley-continental-gtc-red-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Bentley Continental GTC</div>
										<div>4 Hrs: $</div>
										<div>449</div>
										<div>    |    8 Hrs: $</div>
										<div>699</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>699</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">999</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--luxury w-dyn-item"><a
								id="Supercar-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a873a0257c38e00015b5e92_brand-amg-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-mercedes-amg-s63-gray">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/car-rentals"
											data-reach-trending-slug="2016-mercedes-amg-s63-gray"
											data-reach-trending-hide>Sedan</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5ae78dc1d99a3d27fdd6435f_2016-mercedes-amg-s63-gray-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5ae78db8d99a3d0138d6435b_2016-mercedes-amg-s63-gray-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5ae78dcfd99a3d54d8d6436a_2016-mercedes-amg-s63-gray-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Mercedes-AMG S63</div>
										<div>4 Hrs: $</div>
										<div>349</div>
										<div>    |    8 Hrs: $</div>
										<div>599</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>599</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">999</div>
										</div>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
			<div id="suv-rentals" class="rentals__section">
				<h3 class="home__h3">SUV Rentals</h3>
				<div class="rent__collection w-dyn-list">
					<div role="list" class="rent__list cards__suvs w-dyn-items">
						<div role="listitem" class="rent__item rentals__item--suvs w-dyn-item"><a id="SUV-Rental-Item"
								href="/car-rentals/lamborghini-aventador" class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="lamborghini-urus">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="lamborghini-urus" data-reach-trending-hide></div>
										All Wheel Drive
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e18c08a1b4704641fdece38_Exterior%20(%20Front%20Angle%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e18c077d3815c7ee2cc2e8e_Exterior%20(%20Rear%20Angle%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e18c09e0d00d9cee2262d07_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Lamborghini Urus </div>
										<div>4 Hrs: $</div>
										<div>699</div>
										<div>    |    8 Hrs: $</div>
										<div>1199</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>1199</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">1499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--suvs w-dyn-item"><a id="SUV-Rental-Item"
								href="/car-rentals/lamborghini-aventador" class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a873a0257c38e00015b5e92_brand-amg-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="mercedes-g550">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="mercedes-g550" data-reach-trending-hide></div>All
										Wheel Drive
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e18bf94d9e0a547bf5af71c_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e18bf85a9c7eb7a7635dd6e_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e18bfa00d00d976e7251e7f_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Mercedes G550</div>
										<div>4 Hrs: $</div>
										<div>499</div>
										<div>    |    8 Hrs: $</div>
										<div>499</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>499</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">799</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--suvs w-dyn-item"><a id="SUV-Rental-Item"
								href="/car-rentals/lamborghini-aventador" class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5e545206ad46c93ea33479a1_brand-ford.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="ford-raptor">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="ford-raptor" data-reach-trending-hide></div>All
										Wheel Drive
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e272c42e721dd24daf84540_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e272c3992320b318693444b_Exterior%20(%20Rear%20quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e272c4ee721dd1426f8495d_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ford Raptor </div>
										<div>4 Hrs: $</div>
										<div class="w-dyn-bind-empty"></div>
										<div>    |    8 Hrs: $</div>
										<div>299</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>299</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--suvs w-dyn-item"><a id="SUV-Rental-Item"
								href="/car-rentals/lamborghini-aventador" class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86288f5e69d200011ed8c0_brand-range-rover.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="range-rover-supercharged">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="range-rover-supercharged"
											data-reach-trending-hide></div>All Wheel Drive
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e4ee01db12387372e1d7714_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e4ee00a6ad29a472726d6b9_Exterior%20(%20Rear%20Quarter%20)%20.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e4ee02ad1a7a37783fbeab4_Exterior%20(%20Side%20Profile%20)%20(1).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Range Rover HSE V8</div>
										<div>4 Hrs: $</div>
										<div>249</div>
										<div>    |    8 Hrs: $</div>
										<div>249</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>249</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">449</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--suvs w-dyn-item"><a id="SUV-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86280cba0c49000107fcb4_brand-jeep-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="2018-jeep-wrangler-white-upgraded">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="2018-jeep-wrangler-white-upgraded"
											data-reach-trending-hide></div>4WD (4x4)
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5aa9b03b01bb9a35c9646980_2018-jeep-wrangler-white-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5aa9b028d568d6f7399a09cd_2018-jeep-wrangler-white-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5aa9b042d568d643a79a09db_2018-jeep-wrangler-white-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Jeep Wrangler</div>
										<div>4 Hrs: $</div>
										<div>349</div>
										<div>    |    8 Hrs: $</div>
										<div>499</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>499</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">799</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--suvs w-dyn-item"><a id="SUV-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86280cba0c49000107fcb4_brand-jeep-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="2018-jeep-wrangler-red-upgraded">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
											data-reach-trending-slug="2018-jeep-wrangler-red-upgraded"
											data-reach-trending-hide></div>4WD (4x4)
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b3a4c79c0be082a8e15acf0__0014_SPD06704.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b3a4ca352b2dc32fd1bb9e0__0018_SPD06684b.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b3a4c5fb496c519c870c4ab__0011_SPD06745.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Jeep Wrangler</div>
										<div>4 Hrs: $</div>
										<div>349</div>
										<div>    |    8 Hrs: $</div>
										<div>499</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>499</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">799</div>
										</div>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
			<div id="slingshot-rentals" class="rentals__section">
				<h3 class="home__h3">Autocycle Rentals</h3>
				<div class="rent__collection w-dyn-list">
					<div role="list" class="rent__list cards__auto w-dyn-items">
						<div role="listitem" class="rent__item rentals__item--auto w-dyn-item"><a
								id="Autocycle-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53cb2_vanderhall-light.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/autocycle-rentals"
											data-reach-trending-slug="2018-vanderhall-venice-white-red">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/autocycle-rentals"
											data-reach-trending-slug="2018-vanderhall-venice-white-red"
											data-reach-trending-hide>Automatic</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5ae7aadafc4f30af57f91c33_2018-vanderhall-venice-white-exterior-front-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5ae7aad43d23f076c1f4fdec_2018-vanderhall-venice-white-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5ae7aae0ee38f131efb7ef20_2018-vanderhall-venice-white-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Vanderhall Venice</div>
										<div>4 Hrs: $</div>
										<div>249</div>
										<div>    |    8 Hrs: $</div>
										<div>399</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>399</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--auto w-dyn-item"><a
								id="Autocycle-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a6e504610ba5800018a6d47_brand-slingshot-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/autocycle-rentals"
											data-reach-trending-slug="2018-slingshot-sl-icon-white-manual">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/autocycle-rentals"
											data-reach-trending-slug="2018-slingshot-sl-icon-white-manual"
											data-reach-trending-hide>Manual</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b3a4f1fc0be080a7f15b11b_icon-white-exterior-front-angle.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5af4b85f8e26d5e6c489982a_2018-slingshot-sl-icon-white-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5af4b878eee51091b2ba2850_2018-slingshot-sl-icon-white-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Slingshot SL ICON</div>
										<div>4 Hrs: $</div>
										<div>2489</div>
										<div>    |    8 Hrs: $</div>
										<div>349</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>349</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">499</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--auto w-dyn-item"><a
								id="Autocycle-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a6e504610ba5800018a6d47_brand-slingshot-light-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/autocycle-rentals"
											data-reach-trending-slug="2016-slingshot-green-automatic">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/autocycle-rentals"
											data-reach-trending-slug="2016-slingshot-green-automatic"
											data-reach-trending-hide>Automatic</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5a10aaa4d85f4b0001a541f8_2016-polaris-slingshot-green-car-hero-image-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5a10aaa4d85f4b0001a54367_2016-polaris-slingshot-green-exterior-back-angle-royalty-exotic-cars.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5a10aaa4d85f4b0001a54365_2016-polaris-slingshot-green-exterior-profile-royalty-exotic-cars.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Automatic Slingshot</div>
										<div>4 Hrs: $</div>
										<div>349</div>
										<div>    |    8 Hrs: $</div>
										<div>399</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>399</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">499</div>
										</div>
									</div>
								</div>
							</a></div>
					</div>
				</div><a id="Browse-All-Autocycles-Link" href="/car-rentals"
					class="rentals__browse--link">Browse all 21 Autocycles</a>
			</div>
			<div id="motorcycle-rentals" class="rentals__section">
				<h3 class="home__h3">Motorcycle Rentals</h3>
				<div class="rent__collection w-dyn-list">
					<div role="list" class="rent__list cards__moto w-dyn-items">
						<div role="listitem" class="rent__item rentals__item--moto w-dyn-item"><a
								id="Motorcycle-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a4ed78e9074a700013f8a5e_indian-dark-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-indian-chieftain-white">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-indian-chieftain-white"
											data-reach-trending-hide>1811cc 111 V-Twin</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e2f1d46a2f06023257c5a96_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e2f1d3ce16b537e42f187d4_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e2f1d4a8dbc2f6af7dcdeb6_Exterior%20(%20Side%20Profile%20).jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Indian Chieftain</div>
										<div>4 Hrs: $</div>
										<div>199</div>
										<div>    |    8 Hrs: $</div>
										<div>249</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>249</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">399</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--moto w-dyn-item"><a
								id="Motorcycle-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a4eb5d160d9820001d80ab0_ducati-dark-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-ducati-1299-panigale-red">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-ducati-1299-panigale-red"
											data-reach-trending-hide>1285cc V2</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b75e18858cad063c8586924__0012__DSC4700b.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b75e1488166ba06e5372ceb__0005__DSC4710b.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b75e17f5122a974d5a69374__0011__DSC4701b.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ducati 1299 Panigale</div>
										<div>4 Hrs: $</div>
										<div>199</div>
										<div>    |    8 Hrs: $</div>
										<div>249</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>249</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">399</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--moto w-dyn-item"><a
								id="Motorcycle-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a5415b_BMW-web.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-bmw-s1000rr-white-blue">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-bmw-s1000rr-white-blue"
											data-reach-trending-hide>1000cc I4</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b760493dccee446dd8e200b__0011__DSC4715b.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b76045134de1d27089c1096__0005__DSC4722b.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b76046edccee480ff8e1fff__0008__DSC4718b.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">BMW S1000RR</div>
										<div>4 Hrs: $</div>
										<div>199</div>
										<div>    |    8 Hrs: $</div>
										<div>249</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>249</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">399</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--moto w-dyn-item"><a
								id="Motorcycle-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a4ed78e9074a700013f8a5e_indian-dark-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-indian-chieftain-black">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-indian-chieftain-black"
											data-reach-trending-hide>1811cc 111 V-Twin</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5e2f1ce3b0305a3ef65d5ed1_Exterior%20(%20Front%20Quarter%20).jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5e2f1cdc89f8d44f3f3c8b26_Exterior%20(%20Rear%20Quarter%20).jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5e2f1ce98dbc2f3e92dc806e_Side%20Profile.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Indian Chieftain</div>
										<div>4 Hrs: $</div>
										<div>199</div>
										<div>    |    8 Hrs: $</div>
										<div>249</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>249</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">399</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--moto w-dyn-item"><a
								id="Motorcycle-Rental-Item"
								href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a4eb5d160d9820001d80ab0_ducati-dark-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-ducati-959-panigale-white">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-ducati-959-panigale-white"
											data-reach-trending-hide>955cc V2</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b75e1ec9d41c1e1532a3350__0011__DSC4742b.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b75e1c38166ba46a2372fad__0004__DSC4749b.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b75e1e78166baa525372fcf__0010__DSC4743b.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ducati 959 Panigale</div>
										<div>4 Hrs: $</div>
										<div>149</div>
										<div>    |    8 Hrs: $</div>
										<div>199</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>199</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">299</div>
										</div>
									</div>
								</div>
							</a></div>
						<div role="listitem" class="rent__item rentals__item--moto w-dyn-item"><a
								id="Motorcycle-Rental-Item" href="/car-rentals/lamborghini-aventador"
								class="rentals__link w-inline-block">
								<div class="rentals__header"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a4eb5d160d9820001d80ab0_ducati-dark-bg.svg"
										alt="" class="rentals__logo" />
									<div class="trending__embed w-embed">
										<div class="trending"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-ducati-959-panigale-red">
											<div class="trending__wrapper">
												<img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
													data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
													data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]"
													alt="" class="trending__icon">
												<div class="trending__text">Trending Now</div>
											</div>
										</div>

										<div class="rentals__label"
											data-reach-trending-directory="www.royaltyexoticcars.com/motorcycle-rentals"
											data-reach-trending-slug="2018-ducati-959-panigale-red"
											data-reach-trending-hide>955cc V2</div>
									</div>
								</div>
								<div class="rentals__photos"><img
										src="/frontEnd/5b749bff2c58c54bbb28d5d8__0007__DSC4730b.jpg"
										alt="" class="rentals__photo" /><img
										src="/frontEnd/5b749bf416d8f23b31c4e4bf__0003__DSC4738b.jpg"
										alt="" class="rentals__photo rentals__photo--mobile" />
									<div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
											src="/frontEnd/5b749c0cb2d7ee63f818ea9d__0005__DSC4732b.jpg"
											alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
										<div class="rentals__photo--overlay"></div>
									</div>
									<div class="rentals__photos--spacer"></div>
								</div>
								<div class="rentals__footer">
									<div class="rentals__info">
										<div class="rentals__title">Ducati 959 Panigale</div>
										<div>4 Hrs: $</div>
										<div>149</div>
										<div>    |    8 Hrs: $</div>
										<div>199</div>
									</div>
									<div class="rentals__button">
										<div class="rentals__button--label">24 Hr Special</div>
										<div>$</div>
										<div>199</div>
									</div>
									<div class="rentals__note">
										<div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
										<div class="rentals__note--was">
											<div class="rentals__note--text">normally $</div>
											<div class="rentals__note--text">299</div>
										</div>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
@section('script')
<script>
						var slideIndex = 1;
						showSlides(slideIndex);

						function plusSlides(n) {
						showSlides(slideIndex += n);
						}

						function currentSlide(n) {
						showSlides(slideIndex = n);
						}

						function showSlides(n) {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						var dots = document.getElementsByClassName("dot");
						if (n > slides.length) {slideIndex = 1}    
						if (n < 1) {slideIndex = slides.length}
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";  
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex-1].style.display = "block";  
						dots[slideIndex-1].className += " active";
						}
					</script>
@endsection