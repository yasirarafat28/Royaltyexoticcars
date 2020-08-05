@extends('layouts.front')
@section('content')
    <main class="main">
        <!--<section class="hero">
            <div class="hero__content">
                <div class="card card__hero">
                    <div class="hero__label">Rated #1 for Exotic Car Rentals<br />in Las Vegas on <a
                            href="https://www.tripadvisor.com/Attraction_Review-g45963-d8765047-Reviews-Royalty_Exotic_Cars-Las_Vegas_Nevada.html"
                            id="Hero-TripAdvisor-Link" target="_blank" class="hero__rating--highlight">TripAdvisor</a>
                    </div>
                    <h1 class="hero__h1">Exotic Car Rentals at the lowest prices!</h1>
                    <p class="hero__description">Rental Exotic Beasts has the largest selection of <strong>exotic
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
                    <div style="background-image:url(/frontEnd/5a10aaa4d85f4b0001a5419a_2017-lamborghini-huracan-spyder-orange-exterior-front-angle-royalty-exotic-cars.jpg); width:900px; height:420px;"
                         role="listitem" class="banner__item w-dyn-item mySlides">
                    </div>
                    <div style="background-image:url(/frontEnd/5a10aaa4d85f4b0001a541d8_2015-bentley-continental-gtc-red-car-hero-2-image-royalty-exotic-cars.jpg); width:900px; height:420px;"
                         role="listitem" class="banner__item w-dyn-item mySlides">
                    </div>
                    <div style="background-image:url(/frontEnd/5a10aaa4d85f4b0001a5419a_2017-lamborghini-huracan-spyder-orange-exterior-front-angle-royalty-exotic-cars.jpg); width:900px; height:420px;"
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
                              onmouseover="currentSlide(1)"></span>
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
                              onmouseover="currentSlide(2)"></span>
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
                              onmouseover="currentSlide(3)"></span>
                    </div>
                </div>
            </div>
        </section>-->

        <section>

            <style>
                .carousel-item {
                    height: 550px;
                    min-height: 350px;
                    background: no-repeat center center scroll;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }
            </style>

            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide One - Set the background image for this slide in the line below -->
                        <div class="carousel-item active" style="background-image: url('/frontEnd/img/banner.jpg')">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="hero__content">
                                            <div class="card card__hero slider-left-content" style="">
                                                <div class="text-dark heading">Rated #1 for Exotic Car Rentals<br>in Las Vegas on&nbsp;<a href="https://www.tripadvisor.com/Attraction_Review-g45963-d8765047-Reviews-Royalty_Exotic_Cars-Las_Vegas_Nevada.html" id="Hero-TripAdvisor-Link" target="_blank" class="hero__rating--highlight">TripAdvisor</a>
                                                </div>
                                                <h1 class="hero__h1">Exotic Car Rentals at the lowest prices!</h1>
                                                <p class="lead">Rental Exotic Beasts has the largest selection of <strong>exotic
                                                        cars</strong>, <strong>suvs</strong>, <strong>autocycles</strong> &amp;
                                                    <strong>motorcycles</strong> for rent</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="hero__content">
                                            <div class="card card__cta"><a id="Hero-Call-Button" href="tel:+18669841187" class="hero__cta hero__cta--top w-inline-block">
                                                    <div class="hero__cta--text">Call to Book!</div><img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5356d_contact-white.svg" alt="" class="hero__cta--icon">
                                                </a><a href="https://fareharbor.com/embeds/book/royalty-exotic-cars/" id="Hero-Book-Online-Button" class="hero__cta hero__cta--bottom w-inline-block">
                                                    <div class="hero__cta--text">Book Online!</div><img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a534d4_calendar.svg" alt="" class="hero__cta--icon">
                                                </a></div>
                                            <div class="hero__note">We Beat Competitors's Prices!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('/frontEnd/img/banner2.jpg')">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="hero__content">
                                            <div class="card card__hero slider-left-content" style="">
                                                <div class="text-dark heading">Rated #1 for Exotic Car Rentals<br>in Las Vegas on&nbsp;<a href="https://www.tripadvisor.com/Attraction_Review-g45963-d8765047-Reviews-Royalty_Exotic_Cars-Las_Vegas_Nevada.html" id="Hero-TripAdvisor-Link" target="_blank" class="hero__rating--highlight">TripAdvisor</a>
                                                </div>
                                                <h1 class="hero__h1">Exotic Car Rentals at the lowest prices!</h1>
                                                <p class="lead">Rental Exotic Beasts has the largest selection of <strong>exotic
                                                        cars</strong>, <strong>suvs</strong>, <strong>autocycles</strong> &amp;
                                                    <strong>motorcycles</strong> for rent</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="hero__content">
                                            <div class="card card__cta"><a id="Hero-Call-Button" href="tel:+18669841187" class="hero__cta hero__cta--top w-inline-block">
                                                    <div class="hero__cta--text">Call to Book!</div><img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5356d_contact-white.svg" alt="" class="hero__cta--icon">
                                                </a><a href="https://fareharbor.com/embeds/book/royalty-exotic-cars/" id="Hero-Book-Online-Button" class="hero__cta hero__cta--bottom w-inline-block">
                                                    <div class="hero__cta--text">Book Online!</div><img src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a534d4_calendar.svg" alt="" class="hero__cta--icon">
                                                </a></div>
                                            <div class="hero__note">We Beat Competitors's Prices!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!--<div class="reviews">
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
        </div>-->
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

                <div class="container-fluid text-left">
                    <div class="car-list-content">
                        <div class="row">
                            @for($i=0;$i<8;$i++)
                                <div class=" col-md-3 mb-3 mt-3 col-sm-6">
                                    @include('frontView.partials.vehicle-list')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div id="exotic-car-rentals" class="rentals__section">
                <h3 class="home__h3">Exotic Car Rentals</h3>
                <div class="container-fluid text-left">
                    <div class="car-list-content">
                        <div class="row">
                            @for($i=0;$i<8;$i++)
                                <div class=" col-md-3 mb-3 mt-3 col-sm-6">
                                    @include('frontView.partials.vehicle-list')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div id="sports-car-rentals" class="rentals__section">
                <h3 class="home__h3">Sports Car Rentals</h3>
                <div class="container-fluid text-left">
                    <div class="car-list-content">
                        <div class="row">
                            @for($i=0;$i<8;$i++)
                                <div class=" col-md-3 mb-3 mt-3 col-sm-6">
                                    @include('frontView.partials.vehicle-list')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div id="luxury-car-rentals" class="rentals__section">
                <h3 class="home__h3">Luxury Car Rentals</h3>
                <div class="container-fluid text-left">
                    <div class="car-list-content">
                        <div class="row">
                            @for($i=0;$i<8;$i++)
                                <div class=" col-md-3 mb-3 mt-3 col-sm-6">
                                    @include('frontView.partials.vehicle-list')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div id="suv-rentals" class="rentals__section">
                <h3 class="home__h3">SUV Rentals</h3>
                <div class="container-fluid text-left">
                    <div class="car-list-content">
                        <div class="row">
                            @for($i=0;$i<8;$i++)
                                <div class=" col-md-3 mb-3 mt-3 col-sm-6">
                                    @include('frontView.partials.vehicle-list')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div id="slingshot-rentals" class="rentals__section">
                <h3 class="home__h3">Autocycle Rentals</h3>
                <div class="container-fluid text-left">
                    <div class="car-list-content">
                        <div class="row">
                            @for($i=0;$i<8;$i++)
                                <div class=" col-md-3 mb-3 mt-3 col-sm-6">
                                    @include('frontView.partials.vehicle-list')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>


                <a id="Browse-All-Autocycles-Link" href="/car-rentals"
                         class="rentals__browse--link">Browse all 21 Autocycles</a>
            </div>
            <div id="motorcycle-rentals" class="rentals__section">
                <h3 class="home__h3">Motorcycle Rentals</h3>
                <div class="container-fluid text-left">
                    <div class="car-list-content">
                        <div class="row">
                            @for($i=0;$i<8;$i++)
                                <div class=" col-md-3 mb-3 mt-3 col-sm-6">
                                    @include('frontView.partials.vehicle-list')
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
<!--@section('script')
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
            $(".mySlides:nth-child(1)").mouseover(function() {
                currentSlide(1);
            });
        }
    </script>
@endsection -->
