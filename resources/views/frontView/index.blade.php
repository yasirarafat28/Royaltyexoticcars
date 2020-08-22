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

            <div class="container-fluid p-0">
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
                                                </a><a href="/vehicles" id="Hero-Book-Online-Button" class="hero__cta hero__cta--bottom w-inline-block">
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
        <div class="rentals">
            <h2 class="home__h2 rental-section-title">Browse fleet by Category</h2>
            <hr>
            <div class="rent__nav">
                @foreach($groups??array() as $group)
                    <a id="Browse-Supercar-Rentals-Link" href="/vehicles?category={{$group->slug}}"
                           class="rent__nav--link w-inline-block">
                        <div class="vehicle-group">

                            <img style="width: 100%;" src="{{url($group->photo??'')}}" alt="" onerror="this.src='/no-image.png';" height="150px"/>
                            <div class="rent__nav--label">{{$group->name}}</div>
                        </div>
                    </a>


                @endforeach
            </div>

            @foreach($groups??array() as $group)
                @if(!sizeof($group->vehicles))
                    @continue
                @endif

                <div id="exotic-car-rentals" class="rentals__section">
                    <h3 class="home__h2 rental-section-title">{{$group->name??''}}</h3>
                    <hr>
                    <div class="container-fluid text-left">
                        <div class="car-list-content">
                            <div class="row">
                                @foreach($group->vehicles??array() as $key=>$record)
                                    @if($key>=12)
                                        @break
                                    @endif
                                    <div class=" col-lg-3 col-md-4  col-sm-6 col-6 mb-3 mt-3">
                                        @include('frontView.partials.vehicle-list')
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 text-center">

                            <a id="Browse-All-Motorcycles-Link" href="/vehicles?category={{$group->slug}}" class="btn btn-outline-success view-more-btn ">Browse all {{ucwords($group->name)}}</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
