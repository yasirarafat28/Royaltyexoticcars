@extends('layouts.front')
@section('content')
    <main class="main">


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

            @php
            $sliders = \App\Slider::where('type','rental')->where('status','active')->get();

            @endphp

            @if(sizeof($sliders))

                <div class="container-fluid p-0">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($sliders??array() as $key=>$slider)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{$key==0?'active':''}}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" role="listbox">

                            @foreach($sliders??array() as $key=>$slider)
                                <div class="carousel-item {{$key==0?'active':''}}" style="background-image: url({{url($slider->photo??'/')}})">
                                    <div class="carousel-caption">
                                        <div class="row">

                                            <div class="col-md-6 offset-md-6">

                                                <div class="hero__content">
                                                    <h1 class="hero__h1 animated fadeInDown">{{$slider->title}}</h1>
                                                    <p class="lead ">{!! $slider->content !!}</p>

                                                    
                                                    <br>
                                                    <div class="rental__cta">
                                                        <div data-ix="display-booking-lightbox-on-click" class="button rental__cta">
                                                            <div class="rental__cta--embed w-embed">
                                                                <a href="/vehicles" class="rental__cta--text text-uppercase">
                                                                    Book Now
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
            @endif
        </section>
        <br>
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
                                    <div class=" col-lg-3 col-md-4  col-sm-6  mb-3 mt-3">
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


    @include('frontView.popup.auto-first')
@endsection
