@php

	$setting = \App\Model\Setting::first();
	$brands = App\Model\VehicleBrand::where('status','active')->get();
	$categories = App\Model\VehicleCategory::where('parent_category_id',0)->where('status','active')->get();

@endphp
<!DOCTYPE html><!-- Last Published: Sat Jul 18 2020 22:29:29 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.rentalexoticsbeasts.com" data-wf-page="5eab2e688db14a5dd693300b"
	data-wf-site="5a10aaa4d85f4b0001a53292" lang="en">
<head>
	<meta charset="utf-8" />
	<title>Rental Exotic Beasts - Las Vegas</title>
	<meta
		content="Las Vegas&#x27; largest selection of exotic cars, suvs, autocycles &amp; motorcycles for rent. NO mileage limits, governors, security deposits, or hidden fees. Call or text +1-866-984-1187 to book!"
		name="description" />
	<meta content="Rental Exotic Beasts - Las Vegas" property="og:title" />
	<meta
		content="Las Vegas&#x27; largest selection of exotic cars, suvs, autocycles &amp; motorcycles for rent. NO mileage limits, governors, security deposits, or hidden fees. Call or text +1-866-984-1187 to book!"
		property="og:description" />
	<meta
		content="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a823c1c32f0d300017e7fa0_Royalty%20Exotic%20Cars%20Website%20Banner%20-%20small.gif"
		property="og:image" />
	<meta content="Rental Exotic Beasts - Las Vegas" property="twitter:title" />
	<meta
		content="Las Vegas&#x27; largest selection of exotic cars, suvs, autocycles &amp; motorcycles for rent. NO mileage limits, governors, security deposits, or hidden fees. Call or text +1-866-984-1187 to book!"
		property="twitter:description" />
	<meta
		content="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a823c1c32f0d300017e7fa0_Royalty%20Exotic%20Cars%20Website%20Banner%20-%20small.gif"
		property="twitter:image" />
	<meta property="og:type" content="website" />
	<meta content="summary_large_image" name="twitter:card" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="1ergY3uaEZfUno4hRzE8xunDKWbi2nV6QnZa2CZZDYM" name="google-site-verification" />
	<link href="/frontEnd/css/rentalexoticsbeasts.16f3cbba0.min.css" rel="stylesheet" type="text/css" />
	<link href="/frontEnd/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="/frontEnd/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="../frontEnd/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
	<script
		type="text/javascript">WebFont.load({ google: { families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Oswald:200,300,400,500,600,700", "Rock Salt:regular"] } });</script>
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
	<script
		type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
	</script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" integrity="sha512-RWhcC19d8A3vE7kpXq6Ze4GcPfGe3DQWuenhXAbcGiZOaqGojLtWwit1eeM9jLGHFv8hnwpX3blJKGjTsf2HxQ==" crossorigin="anonymous" />


    <style>
        .nav__brand .logo{
            height:60px !important;
        }


        @media screen and (max-width: 767px) {
            .nav__brand .logo {
                height: 38px !important;
            }
        }

        .slider-left-content{

            background: linear-gradient(#94ccdb, #7673ea, transparent) !important;
        }
        .carousel-caption{
            bottom: 20% !important;
        }
        .slider-left-content .heading{
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .no-appearance {
            -webkit-appearance: caps-lock-indicator;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .booking-option{
            font-size: 18px !important;
            height: 55px !important;
        }
        .input-group {
            margin-bottom: 1rem;
        }

        .checkbox-with-content{
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 10px auto;
        }
    </style>

@yield('style')
</head>

<body>
	<header class="header">
		<div data-collapse="all" data-animation="over-right" data-duration="200" data-easing="ease-out-quad"
			data-easing2="ease-out-quad" role="banner" class="navigation w-nav">
			<div class="info">
				<a target="_blank"
					href="tel:+18669841187" id="Header-Phone-Link" class="info__link">Toll Free: {{$setting->phone}}</a>

				<div class="info__search">
					<form action="/vehicles" id="Header-Search-Form"
						class="search w-form"><input type="search" class="search__input w-input" maxlength="256"
							name="q" placeholder="Search cars, suvs, slingshots, etc"
							title="Search cars, motorcycles, destinations, faqs, rental requirements, reviews, etc"
							required="" /><input type="submit" value=" " class="search__submit w-button" /></form>
				</div>

				<div class="info__embed w-embed"><a id="Email-Link-Footer" class="info__link"
						href="mailto:{{$setting->email}}?subject=&body=<br><br><br><br>---------<br>Please place your message above this line<br>Page URL: [sub]"
						onclick="this.href = this.href.replace('[sub]',window.location)">
						{{$setting->email}}
					</a>
				</div>
				<a href="https://www.google.com/maps/place/Royalty+Exotic+Car+Rentals/@36.1109615,-115.1838642,17z/data=!3m1!4b1!4m5!3m4!1s0x80c8c425f445f48d:0x7b51ef32201743d6!8m2!3d36.1109615!4d-115.1816755?hl=en"
					id="Header-Map-Link" target="_blank" class="info__link infobar__link--nolink">9am - 7pm Daily</a>


			</div>
			<div class="nav">
				<div class="nav__brand"><a href="/" id="Header-Brand-Link" aria-current="page"
						class="brand w-nav-brand w--current">
                        <!--<img src="/logo.png" class="logo" alt="">-->
						<div class="brand__icon"></div>
						<div class="brand__text">Rental Exotic Beasts</div>
					</a></div>
				<div class="nav__links">
					<div data-delay="0" data-hover="1" class="dropdown dropdown__mobile w-dropdown">
						<div id="Rentals-Menu" class="nav__link nav__link--mobile w-dropdown-toggle">
							<div>Rentals</div><img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e5457c79427000132cf15_icon-arrow-down.svg"
								alt="" class="nav__arrow" />
						</div>
						<nav class="dropdown__list dropdown__list--categories w-dropdown-list"><img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
								alt="" class="nav__dropdown--arrow" />
							<div class="nav__dropdown--pane">

								<div class="nav__categories">

                                    @foreach($categories??array(  ) as $category)
										<a href="/vehicles?category={{ $category->slug }}" id="Nav-Car-Rentals-Link" class="nav__categories--link w-inline-block">
											<div class="nav__categories--graphic">
												<img src="{{url($category->photo??'')}}"
													alt="" class="nav__categories--img" onerror="this.src='/no-image.png';" />
											</div>
											<div class="nav__categories--text">
												<div class="nav__categories--heading">{{ $category->name }}</div>
												<div class="nav__categories--desc">Ranging from American muscle to European
													masterpieces.</div>
											</div>
										</a>

									@endforeach

									<div class="nav__categories--quicklinks">
										<div class="quicklinks__collection w-dyn-list">
											<div role="list"
												class="quicklinks__list quicklinks__list--grid w-dyn-items">
                                                @foreach($brands??array() as $brand)
												<div role="listitem"
													class="quicklinks__item quicklinks__item--nav w-dyn-item"><a
														id="Nav-Quicklink" href="/vehicles?brand={{ $brand->slug }}"
														class="quicklinks__link w-inline-block"><img
															src="{{url($brand->photo??'')}}"
															alt="Bugatti" class="quicklinks__logo" />
														<div class="quicklinks__details">
															<div class="quicklinks__title">{{ $brand->name }}</div>
															<!-- <div class="quicklinks__desc">Veyron</div> -->
														</div>
													</a>
												</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</nav>
					</div>
					<div data-delay="0" data-hover="1" class="dropdown w-dropdown">
						<div id="Requirements-Menu" class="nav__link w-dropdown-toggle">
							<div>Requirements</div><img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e5457c79427000132cf15_icon-arrow-down.svg"
								alt="" class="nav__arrow" />
						</div>
						<nav class="dropdown__list dropdown__list--table w-dropdown-list"><img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
								alt="" class="nav__dropdown--arrow" />
							<div class="nav__dropdown--pane">
								<div class="nav__reqs">
									<div class="switch switch__table">
										<div class="switch__label switch__label--on">United States<br />Drivers</div><a
											id="Requirements-Switch" href="#" class="switch__link w-inline-block">
											<div class="switch__button"></div>
										</a>
										<div class="switch__label switch__label--off">International<br />Drivers</div>
									</div>
									<div class="table reqs__table--nav">
										<div class="table__row table__row--header">
											<div
												class="table__cell table__cell--dimension table__cell--dimension-header">
											</div>
											<div class="table__cell">Exotic<br />Cars &amp; SUVs</div>
											<div class="table__cell">Auto &amp; Moto<br />Cycles</div>
										</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-Age-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div>Age ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Minimum Age requirements are strictly enforced and ensure
														proper insurance protection. All renters who allow an underage
														driver will be fined $2,500 and their rental will be immediately
														canceled.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div class="table__cell">25+</div>
											<div class="table__cell">21+</div>
										</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-License-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">Drivers License ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Every driver is required to be listed on the rental agreement
														and provide a VALID and NON-EXPIRED drivers license with the
														name matching EXACTLY the name on the rental
														agreement.<br /><strong>Note:</strong> International Drivers
														Licenses are accepted.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div class="table__cell--wrapper">
												<div class="table__cell">United States<br />Drivers License</div>
												<div class="table__cell table__cell--intl">International<br />Drivers
													License</div>
											</div>
											<div class="table__cell--wrapper">
												<div class="table__cell">United States<br />Drivers License</div>
												<div class="table__cell table__cell--intl">International<br />Drivers
													License</div>
											</div>
										</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-Insurance-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">Car Insurance ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Every driver is required to have an active car insurance policy
														before driving one of our rental vehicles.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div class="table__cell--wrapper">
												<div data-delay="0" class="table__cell w-dropdown">
													<div id="Requirements-Insurance-Exotics-US-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">Comp/Collision<br />100/300/50 ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div><span>Each driver is required to provide their own car
																insurance that covers any liability claim up to
																$100k/$300k/$50k and has full comprehensive &amp;
																collision coverage with a maximum $1,000
																deductible.<br /><strong>Note:</strong> Your insurance
																policy still requires Comp/Collision coverage even if
																you decide to purchase an optional insurance
																upgrade.</span></div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
												<div data-delay="0" class="table__cell table__cell--intl w-dropdown">
													<div id="Requirements-Insurance-Exotics-Intl-Tooltip"
														class="table__dropdown--toggle w-dropdown-toggle">
														<div class="text-block">$199<br />Royalty Insurance ⓘ</div>
													</div>
													<nav class="table__dropdown--pane w-dropdown-list">
														<div><span>Covers any bodily injury claim up to $1,000,000 and
																has full comprehensive and collision coverage with a
																$15,000 deductible.</span></div>
														<div class="table__dropdown--arrow"></div>
													</nav>
												</div>
											</div>
											<div data-delay="0" class="table__cell w-dropdown">
												<div id="Requirements-Insurance-Cycles-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">$29<br />Royalty Insurance ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div><span>Each driver is required to purchase the Royalty Insurance
															Policy that covers any bodily injury claim up to $15k/$30k
															and has full comprehensive &amp; collision coverage with a
															$2,500 deductible.</span></div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
										</div>
										<div class="table__divider">Upgrade Options</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-Supplemental-Insurance-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">Supplemental<br />Liability Insurance ⓘ
													</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Protects against any bodily injury incurred during your rental
														period up to the combined value of $1,000,000 for any passenger
														or passerby regardless of who is at fault.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div class="table__cell--wrapper">
												<div class="table__cell">$99</div>
												<div class="table__cell table__cell--intl">Included</div>
											</div>
											<div class="table__cell">--</div>
										</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-Damage-Waiver-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">Property Damage<br />Waiver ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Protects against common damages up to a specified limit
														including curbed wheels, windshield cracks, minor
														scuffs/scratches, etc.<br /><strong>Note: </strong>If damages
														exceed the specified limit and results in an insurance claim,
														this will act as a deductible waiver.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div data-delay="0" class="table__cell w-dropdown">
												<div id="Requirements-Damage-Waiver-Exotics-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">$99 ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Protects against any damages up to a $3,500 (based on the
														actual cost of repair).<br />If the damage exceeds $3,500 and
														results in an insurance claim, this will act as a deductible
														waiver.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div data-delay="0" class="table__cell w-dropdown">
												<div id="Requirements-Damage-Waiver-Cycles-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">$49 ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Protects against any damages up to a $2,500 (based on the
														actual cost of repair).<br />If the damage exceeds $2,500 and
														results in an insurance claim, this will act as a deductible
														waiver.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
										</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-Tire-Protection-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">Tire<br />Protection ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Covers cost of tire replacement, tow charges, and loss of
														rental time up to $1,000.<br /><strong>Note:</strong> Tire
														replacement can take up to several hours depending on the
														location of incident, traffic conditions, and availability.
													</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div class="table__cell">$49</div>
											<div class="table__cell">$35</div>
										</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-Breakdown-Coverage-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">Mechanical<br />Breakdown Coverage ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Covers cost of Mechanical Parts due to wear and tear, tow
														charges, and loss of rental time up to
														$1,000.<br /><strong>Note:</strong> Does NOT cover mechanical
														failure due to customer mis-use or gross negligence operating
														the vehicle. You are fully responsible for your own actions
														while operating a Rental Exotic Beasts vehicle.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div class="table__cell">$99</div>
											<div class="table__cell">$49</div>
										</div>
										<div class="table__row">
											<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
												<div id="Requirements-Prepaid-Fuel-Tooltip"
													class="table__dropdown--toggle w-dropdown-toggle">
													<div class="text-block">Prepaid<br />Fuel Credit ⓘ</div>
												</div>
												<nav class="table__dropdown--pane w-dropdown-list">
													<div>Allows you to return the vehicle without needing to refuel
														beforehand. <br /><strong>Note:</strong> ALL vehicles (including
														auto/moto cycles) require 91 OCTANE RATING fuel. Anyone caught
														using lower quality fuel will be fined $2,500 and responsible
														for any subsequent damages resulting from improper fuel.</div>
													<div class="table__dropdown--arrow"></div>
												</nav>
											</div>
											<div class="table__cell">$99</div>
											<div class="table__cell">$49</div>
										</div>
									</div>
								</div>
							</div>
						</nav>
					</div>
					<div data-delay="0" data-hover="1" class="dropdown w-dropdown">
						<div id="About-Menu" class="nav__link w-dropdown-toggle">
							<div>About</div><img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e5457c79427000132cf15_icon-arrow-down.svg"
								alt="" class="nav__arrow" />
						</div>
						<nav class="dropdown__list dropdown__list--about w-dropdown-list"><img
								src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5baebde8ad0c8ab1cfd622ef_icon-arrow-up-gray.svg"
								alt="" class="nav__dropdown--arrow" />
							<div class="nav__dropdown--pane">
								<div class="nav__about">
									<div class="nav__about--column about__column--links">
										<a href="/faqs"
											id="Nav-FAQs-Link" class="nav__about--link w-dropdown-link">FAQs</a>
										<a href="/privacy" id="Nav-Privacy-Link"
											class="nav__about--link w-dropdown-link">Privacy</a>
										<a href="/cookies" id="Nav-Cookies-Link"
											class="nav__about--link w-dropdown-link">Cookies</a>
										<a href="mailto:{{$setting->email}}"
											id="Nav-Feedback-Link" class="nav__about--link w-dropdown-link">Feedback</a>
									</div>
								</div>
							</div>
						</nav>
					</div>
					<a id="Rally-Link-Nav" href="#" class="nav__link nav__link--hidden w-inline-block">
						<div>Rally</div>
					</a>
					<!-- <a id="Vlog-Link-Nav" href="https://www.youtube.com/channel/UC9uIfxBZsokLzeqqgMv_qYw"
						target="_blank" class="nav__link w-inline-block">
						<div>Vlog</div>
					</a> -->
					<a id="Shop-Link-Nav" href="/shop" class="nav__link w-inline-block">
						<div>Shop</div>
					</a>
				</div>
				<div id="Nav-Drawer-Button" class="nav__button w-nav-button"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a5f41d75e7131000194c9d3_menu.svg"
						alt="" class="navbar__icon" /></div>
			</div>
			<nav role="navigation" class="drawer w-nav-menu">
				<div class="drawer__container">
					
					<div class="drawer__section"><a
							href="https://www.google.com/maps/place/Royalty+Exotic+Car+Rentals/@36.1109615,-115.1838642,17z/data=!3m1!4b1!4m5!3m4!1s0x80c8c425f445f48d:0x7b51ef32201743d6!8m2!3d36.1109615!4d-115.1816755?hl=en"
							id="Drawer-Location-Link" target="_blank" class="card w-inline-block">
							<div class="drawer__location">
								<div class="drawer__location--info"><img
										src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a690c68ae5eb70001f01b94_rec_logo_icon_black.svg"
										alt="Rental Exotic Beasts Logo" class="drawer__location--logo" />
									<div class="drawer__location--title">Rental Exotic Beasts Rentals</div>
									<div class="drawer__location--desc">{{$setting->address}}</div>
								</div>
								<div class="location__map"></div>
							</div>
						</a></div>
					
					<div class="drawer__section">
						<div class="card"><a id="Drawer-Shop-Button" href="/shop"
								target="_blank" class="navdrawer__shop--button w-inline-block"><img
									src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5c13df34d3261aa1bbc46af7_icon-open.svg"
									alt="" class="navdrawer__shop--icon" />
								<div>Visit our Merch Shop!</div>
							</a></div>
					</div>
					<div class="drawer__section">
						<div class="card card__table">
							<div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
								
								<div class="tabs__content w-tab-content">
									<div data-w-tab="US Residents" class="tabs__pane w-tab-pane w--tab-active">
										<div class="navdrawer__links--wrapper"><a href="tel:18669841187"
												id="Drawer-Call-US-Link" class="navdrawer__link w-inline-block">
												<div class="navdrawer__link--icon"><img
														src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7253fa2651bb0001cd5c5c_icon-sms-white.svg"
														alt="US Main Phone Number" class="navdrawer__link--image" />
												</div>
												<div>Call Toll Free: </div>
												<div>{{$setting->phone}}</div>
											</a><a
												href="mailto:reservations@rentalexoticsbeasts.com?subject=I&#x27;d%20like%20to%20rent%20an%20exotic%20car!%20%3A)"
												id="Drawer-Email-US-Link" class="navdrawer__link w-inline-block">
												<div class="navdrawer__link--icon"><img
														src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533e1_mail-white.svg"
														alt="Reservations Email" class="navdrawer__link--image" /></div>
												<div>{{$setting->email}}</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="drawer__section">
						<div class="card card__table">
							<div class="navdrawer__links--wrapper"><a
									href="{{$setting->insta_link}}" target="_blank"
									id="Drawer-Instagram-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533c2_instagram.svg"
											alt="Instagram" class="navdrawer__link--image" /></div>
									<div>Follow us on Instagram</div>
								</a><a href="{{$setting->fb_link}}"
									target="_blank" id="Drawer-Facebook-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a533b4_53f333fd1b92a02f2f930a05_facebook_footer.svg"
											alt="Facebook" class="navdrawer__link--image" /></div>
									<div>Like us on Facebook</div>
								</a><a href="{{$setting->tweeet_link}}" target="_blank"
									id="Drawer-Twitter-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a53477_53f33417144ad8302fd73d6a_twitter_footer.svg"
											alt="Twitter" class="navdrawer__link--image" /></div>
									<div>Follow us on Twitter</div>
								</a>
								
								<a href="{{$setting->pinter_link}}" target="_blank"
									id="Drawer-Pinterest-Link" class="navdrawer__link w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a536cd_pinterest.svg"
											alt="Pinterest" class="navdrawer__link--image" /></div>
									<div>Follow us on Pinterest</div>
								</a><a href="{{$setting->utube_link}}" target="_blank"
									id="Drawer-Youtube-Link"
									class="navdrawer__link navdrawer__link--no-border w-inline-block">
									<div class="navdrawer__link--icon navdrawer__link--icon-social"><img
											src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a53631_youtube.svg"
											alt="Youtube" class="navdrawer__link--image" /></div>
									<div>Subscribe to our YouTube</div>
								</a>
							</div>
						</div>
					</div><a
						href="mailto:{{$setting->email}}"
						id="Drawer-Feedback-Button" class="navdrawer__button w-button">How can we improve?</a>
				</div>
			</nav>
		</div>
	</header>
	@yield('content')
	<!--<footer class="footer">
		<div class="container container__small">
			<div id="requirements" class="reqs">
				<div class="reqs__header">
					<h4 class="footer__h4">Rental Requirements</h4>
					<div class="switch">
						<div class="switch__label switch__label--on">United States<br />Drivers</div><a
							id="Rental-Requirements-Switch" href="#" class="switch__link w-inline-block">
							<div class="switch__button"></div>
						</a>
						<div class="switch__label switch__label--off">International<br />Drivers</div>
					</div>
				</div>
				<div class="table">
					<div class="table__row table__row--header">
						<div class="table__cell table__cell--dimension table__cell--dimension-header"></div>
						<div class="table__cell">Exotic<br />Cars &amp; SUVs</div>
						<div class="table__cell">Auto &amp; Moto<br />Cycles</div>
					</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-Age" class="table__dropdown--toggle w-dropdown-toggle">
								<div>Age ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Minimum Age requirements are strictly enforced and ensure proper insurance
									protection. All renters who allow an underage driver will be fined $2,500 and their
									rental will be immediately canceled.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div class="table__cell">25+</div>
						<div class="table__cell">21+</div>
					</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-License" class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">Drivers License ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Every driver is required to be listed on the rental agreement and provide a VALID
									and NON-EXPIRED drivers license with the name matching EXACTLY the name on the
									rental agreement.<br /><strong>Note:</strong> International Drivers Licenses are
									accepted.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div class="table__cell--wrapper">
							<div class="table__cell">United States<br />Drivers License</div>
							<div class="table__cell table__cell--intl">International<br />Drivers License</div>
						</div>
						<div class="table__cell--wrapper">
							<div class="table__cell">United States<br />Drivers License</div>
							<div class="table__cell table__cell--intl">International<br />Drivers License</div>
						</div>
					</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-Insurance" class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">Car Insurance ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Every driver is required to have an active car insurance policy before driving one
									of our rental vehicles.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div class="table__cell--wrapper">
							<div data-delay="0" class="table__cell w-dropdown">
								<div id="Requirements-Insurance-Exotics-US"
									class="table__dropdown--toggle w-dropdown-toggle">
									<div class="text-block">Comp/Collision<br />100/300/50 ⓘ</div>
								</div>
								<nav class="table__dropdown--pane w-dropdown-list">
									<div><span>Each driver is required to provide their own car insurance that covers
											any liability claim up to $100k/$300k/$50k and has full comprehensive &amp;
											collision coverage with a maximum $1,000
											deductible.<br /><strong>Note:</strong> Your insurance policy still requires
											Comp/Collision coverage even if you decide to purchase an optional insurance
											upgrade.</span></div>
									<div class="table__dropdown--arrow"></div>
								</nav>
							</div>
							<div data-delay="0" class="table__cell table__cell--intl w-dropdown">
								<div id="Requirements-Insurance-Exotics-Intl"
									class="table__dropdown--toggle w-dropdown-toggle">
									<div class="text-block">$199<br />Royalty Insurance ⓘ</div>
								</div>
								<nav class="table__dropdown--pane w-dropdown-list">
									<div><span>Covers any bodily injury claim up to $1,000,000 and has full
											comprehensive and collision coverage with a $15,000 deductible.</span></div>
									<div class="table__dropdown--arrow"></div>
								</nav>
							</div>
						</div>
						<div data-delay="0" class="table__cell w-dropdown">
							<div id="Requirements-Insurance-Cycles" class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">$29<br />Royalty Insurance ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div><span>Each driver is required to purchase the Royalty Insurance Policy that covers
										any bodily injury claim up to $15k/$30k and has full comprehensive &amp;
										collision coverage with a $2,500 deductible.</span></div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
					</div>
					<div class="table__divider">Upgrade Options</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-Supplemental-Insurance"
								class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">Supplemental<br />Liability Insurance ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Protects against any bodily injury incurred during your rental period up to the
									combined value of $1,000,000 for any passenger or passerby regardless of who is at
									fault.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div class="table__cell--wrapper">
							<div class="table__cell">$99</div>
							<div class="table__cell table__cell--intl">Included</div>
						</div>
						<div class="table__cell">--</div>
					</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-Damage-Waiver" class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">Property Damage<br />Waiver ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Protects against common damages up to a specified limit including curbed wheels,
									windshield cracks, minor scuffs/scratches, etc.<br /><strong>Note: </strong>If
									damages exceed the specified limit and results in an insurance claim, this will act
									as a deductible waiver.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div data-delay="0" class="table__cell w-dropdown">
							<div id="Requirements-Damage-Waiver-Exotics"
								class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">$99 ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Protects against any damages up to a $3,500 (based on the actual cost of
									repair).<br />If the damage exceeds $3,500 and results in an insurance claim, this
									will act as a deductible waiver.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div data-delay="0" class="table__cell w-dropdown">
							<div id="Requirements-Damage-Waiver-Cycles"
								class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">$49 ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Protects against any damages up to a $2,500 (based on the actual cost of
									repair).<br />If the damage exceeds $2,500 and results in an insurance claim, this
									will act as a deductible waiver.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
					</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-Tire-Protection" class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">Tire<br />Protection ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Covers cost of tire replacement, tow charges, and loss of rental time up to
									$1,000.<br /><strong>Note:</strong> Tire replacement can take up to several hours
									depending on the location of incident, traffic conditions, and availability.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div class="table__cell">$49</div>
						<div class="table__cell">$35</div>
					</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-Breakdown-Coverage" class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">Mechanical<br />Breakdown Coverage ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Covers cost of Mechanical Parts due to wear and tear, tow charges, and loss of
									rental time up to $1,000.<br /><strong>Note:</strong> Does NOT cover mechanical
									failure due to customer mis-use or gross negligence operating the vehicle. You are
									fully responsible for your own actions while operating a Rental Exotic Beasts
									vehicle.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div class="table__cell">$99</div>
						<div class="table__cell">$49</div>
					</div>
					<div class="table__row">
						<div data-delay="0" class="table__cell table__cell--dimension w-dropdown">
							<div id="Requirements-Prepaid-Fuel" class="table__dropdown--toggle w-dropdown-toggle">
								<div class="text-block">Prepaid<br />Fuel Credit ⓘ</div>
							</div>
							<nav class="table__dropdown--pane w-dropdown-list">
								<div>Allows you to return the vehicle without needing to refuel beforehand.
									<br /><strong>Note:</strong> ALL vehicles (including auto/moto cycles) require 91
									OCTANE RATING fuel. Anyone caught using lower quality fuel will be fined $2,500 and
									responsible for any subsequent damages resulting from improper fuel.</div>
								<div class="table__dropdown--arrow"></div>
							</nav>
						</div>
						<div class="table__cell">$99</div>
						<div class="table__cell">$49</div>
					</div>
				</div>
			</div>
			<div id="faqs" class="faqs">
				<div class="faqs__header">
					<h4 class="footer__h4 footer__h4--faqs">Frequently asked Questions</h4><a
						href="mailto:reservations@rentalexoticsbeasts.com?subject=I%20have%20a%20question%20about%20renting%20an%20exotic%20car%20%3A)"
						id="Footer-Email-Button" class="faqs__cta w-inline-block"><img
							src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a70fd0132b5030001ecab9a_icon-email-white.svg"
							alt="" class="faqs__cta--icon" />
						<div>reservations@rentalexoticsbeasts.com</div>
					</a>
				</div>
				<div class="faqs__collection w-dyn-list">
					<div role="list" class="w-dyn-items">
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-there-any-guarantees" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are there any guarantees?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>No.</strong></p>
									<p>Although we have a 99% perfect track record for reservation accuracy, the world
										is a wild and dynamic place, especially Las Vegas and, sadly, booking a rental
										with Rental Exotic Beasts does <strong>NOT</strong> guarantee your vehicle
										selection, make &amp; model, time frame, price, availability or any other
										detail.</p>
									<p>We reserve the right to amend your reservation at any time, with or without
										notice. (But we will always do everything in our power to ensure you have the
										BEST&nbsp;POSSIBLE experience.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-there-any-security-deposits" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are there any security deposits?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>No.</strong></p>
									<p>Minor scuffs and scrapes (which are relatively inexpensive to repair) are billed
										to you directly on the payment card you use to make the reservation or would
										also be covered under a full coverage insurance policy*.&nbsp;</p>
									<p>*Supplemental Damage Waivers are available as well.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-there-any-taxes" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are there any taxes?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong> </p>
									<p>Las Vegas Location Taxes are 8.325% sales tax, Government surcharge of 10%, and
										Clark County Rental tax 2%.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="do-you-accept-bitcoin-or-other-altcoins" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Do you accept Bitcoin or other altcoins*?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>We use BitPay to accept Bitcoin payments. *<a
											href="https://support.bitpay.com/hc/en-us/articles/203411543-Do-you-support-alternative-payments-like-Bitcoin-Cash-altcoins-credit-cards-or-PayPal-"
											data-rt-link-type="external">We'll be adding BitCoin Cash</a> as soon as it
										is supported by BitPay.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="do-you-match-competitor-prices" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Do you match competitor prices?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong></p>
									<p>We offer the widest variety of exotic rentals at the lowest price guaranteed.
										This means we will match our competitor's price for comparable rentals.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="does-your-website-support-older-browsers" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Does your website support older browsers?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>No.</strong></p>
									<p>Our website uses many features only available with updated versions of Chrome,
										Firefox, Edge, Safari, and Opera.&nbsp;Please visit&nbsp;<a
											href="https://whatbrowser.org/"
											data-rt-link-type="external">WhatBrowser.org</a>&nbsp;to find out if your
										browser needs updating.</p>
									<p>We understand this is frustrating for users of older browsers, but we believe the
										existing functionality outweighs the benefits of older browser support (plus,
										the site wouldn't be as cool!) </p>
									<p>However, if you are seeing any issues with the site, please <a
											href="mailto:happiness@rentalexoticsbeasts.com" data-rt-link-type="email">let
											us know</a> and we'll send you a free pair of sunglasses! 😎</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="how-does-it-work" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">How does it work?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Easy.</strong></p>
									<p>Pick a car, pay for the rental, show proof of insurance and enjoy.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="how-many-miles-do-i-get-with-my-rental" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">How many miles do I get with my rental?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p data-new-link="true"><strong>Unlimited</strong>.&nbsp;</p>
									<p data-new-link="true">All rentals come with NO mileage limit but must stay within
										the county rented from.</p>
									<p data-new-link="true">Need to drive further away? <a
											href="mailto:reservations@rentalexoticsbeasts.com"
											data-rt-link-type="email">Let us know</a>.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="is-there-a-military-discount" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Is there a military discount?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>All US military personnel (active and retired) receive 5% off.&nbsp;</p>
									<p>Thank you for serving our country! 🇺🇸</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="what-is-the-refund-policy" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">What is the refund policy?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p>All cancellations, regardless of reason, can only receive a maximum 50% refund.
										<strong>We strictly adhere to this policy.</strong></p>
									<p>*Drivers who appear intoxicated, hungover, or unfit to drive will be allowed to
										transfer their rental to different, safer time slot <strong>based on
											availability</strong>.&nbsp;</p>
									<p>Absolutely no refunds are given to impaired drivers at our full discretion.
										<strong>Safety of others is our top priority.</strong></p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="why-do-the-brakes-squeak" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Why do the brakes squeak?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p data-new-link="true">Most of our cars use factory stock <a
											href="https://www.usatoday.com/story/money/cars/2014/08/26/porsche-turbo-s-squeaky-brakes/14647529/"
											data-rt-link-type="external">carbon ceramic racing brakes</a>. The reason
										they squeak is because they perform best when they are hot (usually on a
										racetrack).</p>
									<p data-new-link="true">Since our cars are used on everyday roads, the brake pads
										are much cooler and thus squeak louder than usual.&nbsp;</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-background-checks-required" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are background checks required?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>No.</strong></p>
									<p>All you need is existing car insurance, a driver's license, and a credit card.
										(Note: International driver's can purchase insurance from us)</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-there-any-group-discounts" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are there any group discounts?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p data-new-link="true"><strong>Yes.</strong>&nbsp;</p>
									<p data-new-link="true">We have corporate event packages available upon request for
										reservations of 6 rentals or more. Please <a
											href="mailto:reservations@rentalexoticsbeasts.com"
											data-rt-link-type="email">contact our reservations team</a> for more
										information.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-there-any-speed-restrictions-or-governors"
									href="#" class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are there any speed restrictions or governors?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>No.</strong>&nbsp;</p>
									<p>However, you are required to follow all state and federal laws and we encourage
										you to drive responsibly.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-there-hourly-rentals" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are there hourly rentals?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p data-new-link="true"><strong>Yes.</strong>&nbsp;</p>
									<p data-new-link="true">The minimum rental period is 4 hours. The maximum rental
										period is 7 days. Need to rent a car for more than 7 days? <a
											href="mailto:reservations@rentalexoticsbeasts.com"
											data-rt-link-type="email">Let us know</a>.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="are-there-penalties-for-late-returns" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Are there penalties for late returns?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>Returning a rental after the specified time results in a $250 late fee plus
										proration amount.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="can-i-book-a-car-for-someone-else" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Can I book a car for someone else?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>Reservations need to match the name on the payment card, however you can add
										additional drivers.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="can-i-book-car-rentals-online" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Can I book car rentals online?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>Our website uses a secure and encrypted online booking system.&nbsp;🔒</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="can-i-pay-with-cash" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Can I pay with cash?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>But reserving a car in advance requires full payment up front with either a
										credit card, gift card, or bitcoin. You can then pay with cash at the time of
										pickup and we'll refund your original payment.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="can-tall-people-fit-comfortably-in-an-exotic-car"
									href="#" class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Can tall people fit comfortably in an exotic car?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong> (up to 6'2")</p>
									<p>A common misconception in the exotic car world is that tall people cannot fit
										comfortably behind the wheel. All of our cars can fit persons as tall as 6'2"
										with the exception of the Convertible Lamborghini Huracán. </p>
									<p>Taller than 6'2"? Try a <a href="las-vegas-nv/ferrari-rentals.html"
											data-rt-link-type="external">Ferrari</a> (they have the most legroom)!</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="do-i-have-to-have-a-drivers-license" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Do I have to have a drivers license?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>However, international drivers licenses are NOT required.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="do-i-need-to-arrive-early-for-pickup" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Do I need to arrive early for pickup?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong></p>
									<p>Please arrive up to 20 minutes before your rental start time to fill out waivers
										and do a walkthrough of the vehicle.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="do-you-accept-prepaid-debit-cards-gift-cards"
									href="#" class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Do you accept prepaid debit cards/gift cards?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>No.</strong>&nbsp;</p>
									<p>All payment cards must have a chip and be attached to a bank account matching the
										name on your rental agreement.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="do-you-accept-walk-ins" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Do you accept walk-ins?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>Although, cars are generally booked weeks in advance.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="do-you-sell-gift-cards" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">Do you sell gift cards?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p><strong>Yes.</strong>&nbsp;</p>
									<p>You can purchase gift cards from our online booking system or over the phone for
										any amount. 🎁</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="how-much-does-it-cost-to-rent-a-car" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">How much does it cost to rent a car?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p>24 hour rental prices range from $349 up to $19,999.</p>
								</div>
							</div>
						</div>
						<div role="listitem" class="faqs__item w-dyn-item">
							<div class="faqs__embed w-embed"><a id="how-old-do-i-have-to-be-to-rent-a-car" href="#"
									class="footer__faqs--question">
									<h5 class="footer__faqs--h5">How old do I have to be to rent a car?</h5>
								</a></div>
							<div class="faqs__answer">
								<div class="faqs__text w-richtext">
									<p>25 for cars and suvs. 21 for autocycles and motorcycles.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feedback">
				<div class="feedback__text">How are we doing?</div><a id="Feedback-Very-Bad" title="Very Bad"
					data-w-id="3649765b-4d71-8843-2ac7-746eb1fab5ca" href="#" class="feedback__icon">😬</a><a
					id="Feedback-Not-Good" title="Not Good" href="#" class="feedback__icon">🙁</a><a
					id="Feedback-No-Comment" title="No Comment" href="#" class="feedback__icon">😑</a><a
					id="Feedback-Not-Bad" title="Not Bad" href="#" class="feedback__icon">🙂</a><a
					id="Feedback-Very-Good" title="Very Good" href="#" class="feedback__icon">😁</a>
			</div>
		</div>
		<div class="brands w-dyn-list">
			<div role="list" class="brands__list w-dyn-items">
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5e692dd588998ceddddba8c4_brand-acura-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a6e531b7bd20a0001850dc3_brand-bugatti.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a8624535753b900012ffb11_brand-viper-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86288f5e69d200011ed8c0_brand-range-rover.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a4ed69d489f4600012fb1b7_indian-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53c97_nissan-gtr-logo-dark.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a5415b_BMW-web.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a8627d91a47200001d7e77f_brand-rolls-royce-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a6e504610ba5800018a6d47_brand-slingshot-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a540d1_Artboard 1.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5e545206ad46c93ea33479a1_brand-ford.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a873a0257c38e00015b5e92_brand-amg-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a6e504610ba5800018a6d47_brand-slingshot-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a8628345753b900013000ee_brand-hummer-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53ed4_bentley-on-light-background.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5bbe40d13883132b070e0582_brand-aston-martin-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53c95_corvette-dark.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a4eb5ce85390000019d730d_ducati-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53cb2_vanderhall-light.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a5414a_Ferrari-web.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5e2a79adbe4a74307320a38f_brand-dodge-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a8736c957c38e00015b588d_brand-r8-light-bg.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a54901_mclaren-icon-black.svg"
						alt="" class="brands__logo" /></div>
				<div role="listitem" class="brands__item w-dyn-item"><img
						src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a6e720a10ba5800018a828f_brand-bmw-i-3d.svg"
						alt="" class="brands__logo" /></div>
			</div>
		</div>
        <div class="container container__small">
			<div class="motto">
				<div class="motto__brand"><a href="index.html" id="Header-Brand-Link" aria-current="page"
						class="brand w-nav-brand w--current">
						<div class="brand__icon"></div>
						<div class="brand__text">Rental Exotic Beasts</div>
					</a></div>
				<div class="motto__text">Perfect Experience, Every Time.</div>
			</div>
			<nav class="sitemap">
				<div class="sitemap__column">
					<div class="sitemap__header">Company</div><a id="Home-Link-Footer" href="/" target="_blank"
						aria-current="page" class="sitemap__link w--current">Home</a><a href="#"
						class="sitemap__link">Vlog</a><a href="https://shop.rentalexoticsbeasts.com/" target="_blank"
						class="sitemap__link">Shop</a><a href="/team" class="sitemap__link">Team</a><a
						href="/faqs" class="sitemap__link">FAQs</a>
				</div>
				<div class="sitemap__column">
					<div class="sitemap__header">Legal</div><a href="privacy.html" id="Privacy-Link-Footer"
						class="sitemap__link">Privacy</a><a href="terms.html" id="Terms-Link-Footer"
						class="sitemap__link">Terms</a><a href="disclaimer.html" id="Disclaimer-Link-Footer"
						class="sitemap__link">Disclaimer</a><a href="cookies.html" id="Cookies-Link-Footer"
						class="sitemap__link">Cookies</a>
					<div class="sitemap__embed w-embed"><button id="Preferences-Link" class="sitemap__link"
							type="button"
							onclick="event.stopPropagation(); window.consentManager.openConsentManager()">Preferences</button>
					</div>
				</div>
				<div class="sitemap__column">
					<div class="sitemap__header">Local</div><a
						href="https://www.tripadvisor.com/Attraction_Review-g45963-d8765047-Reviews-Royalty_Exotic_Cars-Las_Vegas_Nevada.html"
						id="TripAdvisor-Link-Footer" target="_blank" class="sitemap__link">TripAdvisor</a><a
						href="https://goo.gl/maps/Bxth6drQDFqZTnvF9" id="Google-Maps-Link-Footer" target="_blank"
						class="sitemap__link">Google Maps</a><a
						href="https://www.facebook.com/pg/RoyaltySupercarRentals/reviews/"
						id="Facebook-Business-Link-Footer" target="_blank" class="sitemap__link">Facebook Business</a><a
						href="https://www.yelp.com/biz/royalty-exotic-cars-las-vegas-5?hrid=Y6HEV_AYvUQs5RMwUD5guw&amp;rh_type=phrase&amp;rh_ident=unlimited_mile"
						id="Yelp-Link-Footer" target="_blank" class="sitemap__link">Yelp</a><a
						href="https://www.bbb.org/us/nv/las-vegas/profile/auto-renting-and-leasing/royalty-exotic-car-rental-1086-90045063"
						id="BBB-Link-Footer" target="_blank" class="sitemap__link">Better Business Bureau</a>
				</div>
				<div class="sitemap__column">
					<div class="sitemap__header">Social</div><a
						href="https://www.youtube.com/channel/UC9uIfxBZsokLzeqqgMv_qYw" id="Youtube-Link-Footer"
						target="_blank" class="sitemap__link">Youtube</a><a
						href="https://www.instagram.com/rentalexoticsbeasts/" id="Instagram-Link-Footer" target="_blank"
						class="sitemap__link">Instagram</a><a id="Facebook-Link-Footer"
						href="https://www.facebook.com/Royalty-Exotic-Cars-1803379263252624/" target="_blank"
						class="sitemap__link">Facebook</a><a href="https://twitter.com/RoyaltyExotics"
						id="Twitter-Link-Footer" target="_blank" class="sitemap__link">Twitter</a><a
						href="https://www.pinterest.com/royaltyexotics/" id="Pinterest-Link-Footer" target="_blank"
						class="sitemap__link">Pinterest</a>
				</div>
				<div class="sitemap__column sitemap__column--fullwidth">
					<div class="sitemap__header">Rentals</div>
					<div class="sitemap__collection w-dyn-list">
						<div role="list" class="w-dyn-items">
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Cars</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">SUVs</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Autocycle</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Motorcycles</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Hypercars</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Supercars</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Exotic Cars</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Sports Cars</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Luxury Cars</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Classic Cars</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Offroad SUVs</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Open Air
									Roadsters</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="l/car-rentals" class="sitemap__link">Luxury SUVs</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals"
									class="sitemap__link">Three-wheel Motorcycle</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Superbikes</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Sport Bikes</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Cruisers</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Touring Bikes</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Bugatti</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Lamborghini</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Ferrari</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">McLaren</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Porsche</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Audi R8</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Acura NSX</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Nissan GT-R</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Corvette Z06</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Aston Martin</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Rolls Royce</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Bentley</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="las-vegas-nv/mercedes-amg.html" class="sitemap__link">Mercedes-AMG</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="las-vegas-nv/bmw-i8-rentals.html" class="sitemap__link">BMW i8</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="las-vegas-nv/jeep-rentals.html" class="sitemap__link">Jeep</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="las-vegas-nv/slingshot-rentals.html" class="sitemap__link">Slingshot</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="las-vegas-nv/vanderhall-rentals.html" class="sitemap__link">Vanderhall</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Ducati</a></div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="las-vegas-nv/bmw-motorrad-rentals.html" class="sitemap__link">BMW Motorrad</a>
							</div>
							<div role="listitem" class="w-dyn-item"><a id="Footer-Sitemap-Link"
									href="/car-rentals" class="sitemap__link">Indian</a></div>
						</div>
					</div>
				</div>
			</nav>
			<div class="copyright">
				<div class="copyright__section">
					<div id="Copyright-Year">2020</div>
					<div> © RoyaltyExoticCars.com</div>
					<div class="copyright__embed w-embed w-script">
						<script>document.querySelector("#Copyright-Year").textContent = "" + new Date().getFullYear()</script>
					</div>
				</div>
				<div class="space__flex"></div>
				<div class="copyright__section"><a id="Phone-Link-Footer" href="tel:+18669841187"
						class="copyright__link">+1-866-984-1187</a>
					<div class="space__em"></div>
					<div class="w-embed"><a id="Email-Link-Footer" class="copyright__link"
							href="mailto:reservations+toursengine@rentalexoticsbeasts.com?subject=&body=<br><br><br><br>---------<br>Please place your message above this line<br>Page URL: [sub]"
							onclick="this.href = this.href.replace('[sub]',window.location)">
							Reservations@Rentalexoticsbeasts.com
						</a></div>
				</div>
				<div class="copyright__bar">|</div>
				<div class="copyright__section">
					<div class="share">
						<div class="share__text">Share on </div>
						<div class="share__icon">
							<div class="share__embed share__embed--fb w-embed"><a id="Facebook-Share-Icon"
									class="share__embed share__embed--fb"
									href="https://www.facebook.com/sharer/sharer.php?u=&amp;t=" target="_blank"
									title="Share on Facebook"
									onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;">
									<svg width="100%" height="100%" aria-hidden="true" focusable="false"
										data-prefix="fab" data-icon="facebook-f"
										class="svg-inline--fa fa-facebook-f fa-w-10" role="img"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
										<path fill="currentColor"
											d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
										</path>
									</svg>
								</a></div>
						</div>
						<div class="share__icon">
							<div class="share__embed share__embed--tw w-embed"><a id="Twitter-Share-Icon"
									class="share__embed share__embed--tw" href="https://twitter.com/intent/tweet?"
									target="_blank" title="Share on Twitter"
									onclick="window.open('https://twitter.com/intent/tweet?text=%20' + encodeURIComponent(document.title) + ':%20 '  + encodeURIComponent(document.URL)); return false;">
									<svg width="100%" height="100%" aria-hidden="true" focusable="false"
										data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16"
										role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<path fill="currentColor"
											d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
										</path>
									</svg>
								</a></div>
						</div>
						<div class="share__icon">
							<div class="share__embed share__embed--in w-embed"><a id="LinkedIn-Share-Icon"
									class="share__embed share__embed--in"
									href="http://www.linkedin.com/shareArticle?mini=true&amp;url=&amp;title=&amp;summary=&amp;source="
									target="_blank" title="Share on LinkedIn"
									onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;">
									<svg width="100%" height="100%" aria-hidden="true" focusable="false"
										data-prefix="fab" data-icon="linkedin-in"
										class="svg-inline--fa fa-linkedin-in fa-w-14" role="img"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
										<path fill="currentColor"
											d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
										</path>
									</svg>
								</a></div>
						</div>
						<div class="share__icon">
							<div class="share__embed share__embed--mail w-embed"><a id="Email-Share-Icon"
									class="share__embed share__embed--mail"
									href="mailto:?subject=m&body=<br><br><br><br>---------<br>Please place your message above this line<br>Page URL: [sub]"
									target="_blank" title="Email this page"
									onclick="this.href = this.href.replace('[sub]',window.location)">
									<svg width="100%" height="100%" aria-hidden="true" focusable="false"
										data-prefix="fas" data-icon="envelope"
										class="svg-inline--fa fa-envelope fa-w-16" role="img"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<path fill="currentColor"
											d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
										</path>
									</svg>
								</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="policies"><a id="Privacy-Policy-Link" href="/terms"
					class="footer__docs--link">Privacy</a><a id="Terms-of-Use-Link" href="/terms"
					class="footer__docs--link">Terms</a><a id="Disclaimer-Link" href="/terms"
					class="footer__docs--link">Disclaimer</a><a id="Cookies-Policy-Link" href="/terms"
					class="footer__docs--link">Cookies</a>
				<div class="footer__embed w-embed"><button id="Preferences-Link" class="footer__docs--link"
						type="button"
						onclick="event.stopPropagation(); window.consentManager.openConsentManager()">Preferences</button>
				</div>
			</div>

			<div id="consent-manager" class="cookies">
				<div class="css-1d3ybkx cookies__hidden">
					<div>By using our website, you agree to our </div>
					<div>Cookie Policy</div>
				</div>
			</div>
		</div>
	</footer>-->
	<footer>
        <!-- Footer top -->
        <div class="container footer_top">
            <div class="row"><div class="col-md-3">
                    <div class="footer_item">
                        <h4>Explore link</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">
							<li><a href="/"><span class="fa fa-play"></span> Home</a>
							<li><a href="/vehicles"><span class="fa fa-play"></span> Our Fleet</a>
                            </li><li><a href="/shop"><span class="fa fa-play"></span> Shop</a>
                            </li><li><a href="/faqs"><span class="fa fa-play"></span> FAQ's</a>
                            </li><li><a href="/privacy"><span class="fa fa-play"></span> Privacy</a>
                            </li></ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Rentals</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">

							@foreach($categories??array(  ) as $category)

								<li>
									<a href="/vehicles?category={{ $category->slug }}"><span class="fa fa-play"></span>{{ $category->name }}</a>
								</li>

							@endforeach
                
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Social</h4>
                        <hr>
                        <ul class="list-unstyled footer_menu">
                            <li><a href="{{$setting->insta_link}}"><span class="fa fa-play"></span>Instagram</a>
                            </li><li><a href="{{$setting->fb_link}}"><span class="fa fa-play"></span>Facebook</a>
                            </li><li><a href="{{$setting->tweeet_link}}"><span class="fa fa-play"></span>Twitter</a>
                            </li><li><a href="{{$setting->pinter_link}}"><span class="fa fa-play"></span>Pinterest</a>
                            </li><li><a href="{{$setting->utube_link}}"><span class="fa fa-play"></span>Youtube</a>
                            </li></ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer_item">
                        <h4>Local</h4>
                        <hr>
                        <ul class="list-unstyled footer_contact">
                            <li><a href=""><span class="fa fa-map-marker"></span>{{$setting->address}}</a></li>
                            <li><a href="mailto:{{$setting->email}}"><span class="fa fa-envelope"></span>{{$setting->email}}</a></li>
                            <li><a><span class="fa fa-mobile"></span><p>{{$setting->phone}}</p></a></li>
                            <li><a href="tel:01988300003" class="btn btn-success mb-2" style="background-color: orangered"><i class="fa fa-phone"></i> Call Now</a></li>

                            <!--<li><a><span class="fa fa-whatsapp"></span><p>01988300003</p></a></li>
                            <li><a><img class="fa" src="https://edeal.xyz/img/imo.png"><p>01988300003</p></a></li>
                            <li><a><img class="fa"  src="https://edeal.xyz/img/viber.png"><p>01988300003</p></a></li>-->
                            <li><a><span class="fa fa-skype"></span><p>Edeal.xyz</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Footer top end -->

        <!-- Footer bottom -->
        <div class="footer_bottom text-center">
            <p class="wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Designed and Developed by {{$setting->company_name}} Team . Copyright © <a href="{{url('/')}}">{{$setting->company_name}} </a>{{date('Y')}}. All Rights Reserved
            </p>
        </div><!-- Footer bottom end -->
    </footer>
	<script src="/frontEnd/d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d5419.js?site=5a10aaa4d85f4b0001a53292"
		type="text/javascript" ></script>
	<script src="/frontEnd/js/rentalexoticsbeasts.af38aa331.js"
		type="text/javascript"></script>
	<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous"></script>



    @yield('script')
</body>
</html>
