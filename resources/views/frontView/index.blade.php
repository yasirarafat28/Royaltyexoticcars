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
                .modal-div {
                    margin-bottom: 10px;
                }
                .modalparentdiv {
                    background-color: rgba(0,0,0,0.5);
                    padding: 5em 2em;
                    color: white;
                    border-radius: 10px;
                }

                .button1 {
                    height: 50px;
                    background-color: transparent;
                    padding: 5px;
                    color: white;
                    width: 200px;
                    font-size: 25px;
                    border: 4px solid white;
                    border-radius: 10px;
                }
                .button3 {
                    height: 50px;
                    padding: 5px;
                    width: 400px;
                    font-size: 25px;
                    border: 4px solid white;
                    border-radius: 10px;
                }
            </style>

            @php
                $sliders = \App\Slider::where('type','rental')->where('status','active')->get();
                $brands = App\Model\VehicleBrand::where('status','active')->get();
                $categories = App\Model\VehicleCategory::where('parent_category_id',0)->where('status','active')->get();

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
                                                    <div class="modalparentdiv">
                                                        <h4 class="animated fadeInDown">Search By</h4>
                                                        <div class="modal-div">
                                                            <button type="button" class="button1 btn-outline-danger" data-toggle="modal" data-target="#exampleModal1">
                                                                Body style
                                                            </button>
                                                        </div>

                                                        <div class="modal-div">
                                                            <button type="button" class="button1 btn-outline-danger" data-toggle="modal" data-target="#exampleModal2">
                                                                Make & Model
                                                            </button>
                                                        </div>


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
                                                    <!--<h1 class="hero__h1 animated fadeInDown">{{$slider->title}}</h1>
                                                    <p class="lead ">{!! $slider->content !!}</p>


                                                    <br>-->
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
                                    <div class=" col-lg-3 col-md-4  col-sm-6   mb-1 mt-1 mobile-nopadding">
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title text-center">Select Body Style</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">


                        <div class="row">
                            @foreach($categories??array() as $group)
                                <div class="col-sm-6 mb-5 rent__nav--link w-inline-block" >

                                    <a href="/vehicles?category={{$group->slug}}"
                                       class="">
                                        <div class="vehicle-group">

                                            <img style="width: 100%;" src="{{url($group->photo??'')}}" alt="" onerror="this.src='/no-image.png';" height="150px"/>
                                            <div class="rent__nav--label">{{$group->name}}</div>
                                        </div>
                                    </a>

                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h4 class="header-title">Select Make and Model</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container brand-search-container">
                        <div class="input-group" >
                            <div class="input-group-prepend">
                                <span class="input-group-text text-center" style="width: 50px;">
                                    <i class="fa fa-search icon ml-auto mr-auto"></i>
                                </span>
                            </div>

                            <input style="height: 47px" class="form-control brand-search-input" id="myInput" type="text" placeholder="Search..">

                        </div>
                        <br>
                        <ul class="list-group brand-list-searchable" id="myList">

                            @forelse($brands??array() as $brand)
                                <li class="list-group-item">
                                    <a href="/vehicles?brand={{ $brand->slug }}" class="col-md-12 nav__categories--link w-inline-block">
                                        <img style="height: 50px !important;width: 50px !important;" src="{{url($brand->photo??'')}}"
                                             alt="" class="nav__categories--img mr-3" onerror="this.src='/no-image.png';" />

                                        <div class="nav__categories--heading">{{ $brand->name }}</div>
                                    </a>
                                </li>
                            @empty
                                <li class="list-group-item">

                                    <p class="text-danger text-center">
                                        <strong>Sorry!</strong> No record found!
                                    </p>
                                </li>
                            @endforelse

                                <li class="list-group-item brand-search-empty" style="display: none;">

                                    <p class="text-danger text-center">
                                        <strong>Sorry!</strong> No record found!
                                    </p>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontView.popup.auto-first')
@endsection
