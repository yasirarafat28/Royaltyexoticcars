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
                    margin-bottom: 1.6em;
                }

                .tiles {
                    background: url(images/Untjkgnerjgegtitled.png);
                    background-size:100% auto;
                    padding: 30px 30px;;
                    margin: 30px 10px;;
                    color: white;
                }

                .modalparentdiv {
                    background-color: rgba(0,0,0,0.5);
                    padding: 2em 5em;
                    color: white;
                    border-radius: 10px;
                }

                @media screen and (max-width: 479px) {
                    .modalparentdiv {
                        padding: 2em 2em;
                    }
                }

                .button1 {
                    height: 50px;
                    background-color: transparent;
                    padding: 5px;
                    color: white;
                    width: 100%;
                    font-size: 25px;
                    border: 4px solid white;
                    border-radius: 10px;
                }
                .button3 {
                    height: 50px;
                    padding: 5px;
                    width: 400px;
                    font-size: 18px;
                    border: 2px solid white;
                    border-radius: 10px;
                }
            </style>

            @php
                $sliders = \App\Slider::where('type','rental')->where('status','active')->get();
                $brands = App\Model\VehicleBrand::where('status','active')->get();
                $categories = App\Model\VehicleCategory::where('parent_category_id',0)->where('status','active')->get();
                $setting = \App\Model\Setting::first();

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
        <div class="reviews">
            <div class="reviews__item"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5b2542c4a3234f310ba98fdb_logo-youtube-red.svg"
                    alt="TripAdvisor Top Rated Company" class="reviews__logo"><a
                    href="{{$setting->utube_link}}" target="_blank"
                    class="reviews__youtube w-inline-block"><img
                        src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e1258524b55b0f3303c2605_youtube-subscribe.png"
                        srcset="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e1258524b55b0f3303c2605_youtube-subscribe-p-500.png 500w, https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e1258524b55b0f3303c2605_youtube-subscribe.png 1660w"
                        sizes="(max-width: 479px) 20vw, 8vw" alt="" class="reviews__youtube--img"></a>
                <div class="reviews__text">269 videos, 400K subs, 40M views &amp; counting!</div>
                <a href="{{$setting->utube_link}}" target="_blank"
                   id="Watch-Our-Vlog-Link" class="reviews__link">Watch our Vlog!</a>
            </div>
            <div class="reviews__item"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74e9e6fc00011a8e3e_reviews-tripadvisor-light-bg.svg"
                    alt="TripAdvisor Top Rated Company" class="reviews__logo"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a535ce_trip-advisor-stars.svg"
                    alt="" class="reviews__stars">
                <div class="reviews__text">5 star average rating based on <strong>1,550</strong>&nbsp;reviews</div>
                <a href="{{$setting->insta_link}}"
                   target="_blank" id="TripAdvisor-Review-Link" class="reviews__link">Leave a TripAdvisor Review</a>
            </div>
            <div class="reviews__item"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74afc4be0001e0ec84_reviews-google-light-bg.svg"
                    alt="TripAdvisor Top Rated Company" class="reviews__logo"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5360b_google-reviews-stars.svg"
                    alt="" class="reviews__stars">
                <div class="reviews__text">5 star average rating based on <strong>571</strong>&nbsp;reviews</div>
                <a href="{{$setting->tweeet_link}}" target="_blank" id="Google-Review-Link"
                   class="reviews__link">Leave a Google Review</a></div>
            <div class="reviews__item"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74e1788700018e6cd1_reviews-facebook-light-bg-2.svg"
                    alt="TripAdvisor Top Rated Company" class="reviews__logo"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a62817bae7e6500016b012c_stars-facebook.svg"
                    alt="" class="reviews__stars">
                <div class="reviews__text">5 star average rating based on <strong>230</strong> reviews</div>
                <a href="{{$setting->fb_link}}" target="_blank"
                   id="Facebook-Review-Link" class="reviews__link">Leave a Facebook Review</a></div>
            <div class="reviews__item"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a626d74e9e6fc00011a8e3d_reviews-yelp-light-bg.svg"
                    alt="TripAdvisor Top Rated Company" class="reviews__logo"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a10aaa4d85f4b0001a5372b_yelp-reviews-stars.svg"
                    alt="" class="reviews__stars">
                <div class="reviews__text">5 star average rating based on <strong>169</strong> reviews</div>
                <a href="{{$setting->pinter_link}}"
                   target="_blank" id="Yelp-Review-Link" class="reviews__link">Leave a Yelp Review</a></div>
        </div>
        <br>

        <!--<div class="tiles">
            <div class="row">
                <div class="col-sm">

                    <img src="images/bus-64.png" style="width: 150px; height: 150px; float: left; padding: 10px; border: 6px solid white; border-radius: 50%;" alt="">

                </div>
                <div class="col-sm">

                        <div><h4>UNLIMITED MILES</h4></div>
                        <hr style="height: 5px; text-align: left; border-width: 0; color: white; background-color: white;"">
                        <h6>Yes! You get to drive UNLIMITED miles within Nevada.</h6>

                </div>
                <div class="col-sm">

                    <img src="images/us-dollar-64.png" style="width: 150px; height: 150px; float: left; padding: 10px; border: 6px solid white; border-radius: 50%;" alt="">

                </div>
                <div class="col-sm">

                        <div><h4>BEST PRICE</h4></div>
                        <hr style="height: 5px; text-align: left; border-width: 0; color: white; background-color: white;"">
                        <h6>We’ll beat or match any price in town!</h6>

                </div>
                <div class="col-sm">

                    <img src="images/phone-17-64.png" style="width: 150px; height: 150px; float: left; padding: 10px; border: 6px solid white; border-radius: 50%;" alt="">

                </div>
                <div class="col-sm">

                        <div><h4>LOCAL DELIVERY</h4></div>
                        <hr style="height: 5px; text-align: left; border-width: 0; color: white; background-color: white;"">
                        <h6>We’ll deliver to your hotel, airport, casino and Las Vegas area.</h6>

                </div>
            </div>
        </div>-->




        <div class="rentals why-us-section" style="background-image: url(https://img.freepik.com/free-vector/elegant-white-background-with-shiny-lines_1017-17580.jpg?size=626&ext=jpg)">
            <h2 class="home__h2 rental-section-title text-center">Why Chose us?</h2>
            <hr class="center-hr" style="color: #fff !important;">


            <div class="row pt-4 pb-4">
                <div class="col-md-3 col-6 why-us-block">

                    <div class="card ">
                        <div class="card-img pb-3">
                            <img class="mbr-iconfont mbri-users" src="/frontEnd/why-us/custom.png">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">
                                Custom Vehicle</h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                We offer the most aggressive and custom vehicles for rent
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6 why-us-block">

                    <div class="card">
                        <div class="card-img pb-3">

                            <img class="mbr-iconfont mbri-users" src="/frontEnd/why-us/extend-time.png">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">
                                Flexible Time</h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                We understand traffic issues, and we give you 10 minutes additional time on your car rental return.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6 why-us-block">

                    <div class="card ">
                        <div class="card-img pb-3">

                            <img class="mbr-iconfont mbri-users" src="/frontEnd/why-us/cheap.png">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">
                                Cheap in Price
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                We will beat or match any competitor price in town
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6 why-us-block">

                    <div class="card ">
                        <div class="card-img pb-3">

                            <img class="mbr-iconfont mbri-users" src="/frontEnd/why-us/2.png">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title py-3 mbr-fonts-style display-5">
                                Unlimited Miles
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Yes! You get to drive unlimited miles within Nevada
                            </p>
                        </div>
                    </div>

                </div>



            </div>
            <br>
        </div>




        <div class="rentals">

            <!--<h2 class="home__h2 rental-section-title">Browse fleet by Category</h2>
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
            </div>-->

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
                        <h5><strong>Popular Makes</strong></h5>
                        <ul class="list-group brand-list-searchable" id="myList">

                            @forelse($brands??array() as $brand)
                                <li class="list-group-item p-0" style="cursor: pointer">
                                    <span  class="col-md-12 nav__categories--link w-inline-block search-brand-item" data-brandname="{{$brand->name}}" data-slug="{{$brand->slug}}" data-brand="{{$brand->id}}">
                                        <img style="height: 50px !important;width: 50px !important;" src="{{url($brand->photo??'')}}"
                                             alt="" class="nav__categories--img mr-3" onerror="this.src='/no-image.png';" />

                                        <div class="nav__categories--heading">{{ $brand->name }}</div>
                                    </span>
                                </li>
                            @empty
                                <li class="list-group-item brand-search-empty">

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

                    <div class="container model-search-container" style="display: none;">
                        <div class="input-group" >
                            <div class="input-group-prepend">
                                <span class="input-group-text text-center" style="width: 50px;">
                                    <i class="fa fa-search icon ml-auto mr-auto"></i>
                                </span>
                            </div>

                            <input style="height: 47px" class="form-control model-search-input" id="myInput" type="text" placeholder="Search..">

                        </div>
                        <br>
                        <h5><strong>Popular Models</strong></h5>
                        <ul class="list-group model-list-searchable" id="myList">


                                <li class="list-group-item model-search-empty" style="display: none;">

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

    <form action="/vehicles" method="GET" id="custom-search-form">
        <input type="hidden" id="custom-search-brand" name="brand">
        <input type="hidden" id="custom-search-model" name="model">
    </form>
    @include('frontView.popup.auto-first')
@endsection
@section('script')

    <script>


        $('.search-brand-item').on('click',function (event) {
            event.preventDefault();
            let brand_id = $(this).data('brand');
            let brand_slug = $(this).data('slug');
            let brand_name = $(this).data('brandname');
            $('#custom-search-brand').val(brand_slug);


            $.ajax({
                url: '/get-model-by-brand/'+brand_id,
                type: 'GET',
                data: "",
                success: function (data) {
                    let content='';
                    let modelList = $('.model-list-searchable');
                    modelList.empty();

                    jQuery.each(data, function(index, item) {
                        content = '<li style="cursor: pointer" class="list-group-item p-0">\n' +
                            '                                    <a onclick="searchmodelselect($(this).text())" class="col-md-12 nav__categories--link w-inline-block search-model-item">\n' +
                            '                                        ' +
                            '<div class="nav__categories--heading">'+item+'</div>\n' +
                            '                                    </a>\n' +
                            '                                </li>';

                        modelList.append(content);

                    });
                    let emptycontent  = '<li class="list-group-item model-search-empty" style="display: none;">\n' +
                        '\n' +
                        '                                    <p class="text-danger text-center">\n' +
                        '                                        <strong>Sorry!</strong> No record found!\n' +
                        '                                    </p>\n' +
                        '                                </li>';
                    modelList.append(emptycontent);




                    $('.brand-search-container').hide();
                    //$('.model-search-container').show("slide", { direction: "right" }, 400);
                    $('.model-search-container').show();
                },
                error: function (error) {
                    console.log(error);

                }
            });

        })
    </script>

    <script>
        $(document).ready(function(){
            $(".brand-search-input").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                let norecord = true;
                $(".brand-list-searchable li").filter(function() {
                    if ($(this).text().toLowerCase().indexOf(value) > -1)
                        norecord = false;
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);


                });
                if (norecord){
                    $('.brand-search-empty').show();
                }else{

                    $('.brand-search-empty').hide();
                }
            });
        });

        $(document).ready(function(){
            $(".model-search-input").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                let norecord = true;
                $(".model-list-searchable li").filter(function() {
                    if ($(this).text().toLowerCase().indexOf(value) > -1)
                        norecord = false;

                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);


                });
                if (norecord){
                    $('.model-search-empty').show();
                }else{

                    $('.model-search-empty').hide();
                }
            });
        });

        function searchmodelselect(model){


            $('#custom-search-model').val(model);
            $('#custom-search-form').submit();
        }

    </script>
@endsection
