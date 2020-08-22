@extends('layouts.front')

@php

$setting = setting();

@endphp
@section('style')
    <style>
        .carousel-item img{
            width: 100%;
            height: 475px !important;
        }

        .carousel-control-prev:hover, .carousel-control-next:hover{
            background: rgba(0,0,0,0.5) !important;
        }
        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            margin-bottom: 0px;
            left: 0;
            z-index: 15;
            margin-left: 0px;
            margin-right: 0px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 0;
            list-style: none;
            background: rgba(0,0,0,0.5) !important;
            height: 40px;
        }


        .carousel-indicators li {
            margin-top: auto;
            margin-bottom: auto;
        }















        .detail-product-text ul {
            list-style: none;
            padding-left: 0px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .detail-product {
            margin-top: 50px;
        }

        .detail-product-head h2 {
            font-family: 'Open Sans';
            font-weight: 700;
            font-size: 30px;
            line-height: 34px;

            margin-bottom: 10px;
        }

        .detail-product-head p {
            font-family: 'open sans';
            font-weight: 700;
            display: inline-block;
            color: #727272;
            font-size: 20px;
            padding-top: 3px;
            margin-bottom: 6px;
        }
        .detail-review-star .fa-star:before {
            color: #f07f13;
        }
        .detail-product-text .detail-review-box {
            margin-top: 0px;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .detail-review-box .detail-review-star {
            display: inline-block;
            float: left;
        }

        .detail-review-box .detail-review-people p {
            color: #96979d;
            padding-left: 20px;
            display: inline-block;
            margin-bottom: 0px;
        }

        .detail-content p {
            color: #96979d;
            font-size: 18px;
            font-family: 'open sans';
        }

        .detail-product-text .detail-qty-button {
            padding: 10px;
            border: 2px solid #f07f13;
            border-radius: 1000px;
            display: inline-block;
            margin-top: 35px;
        }
        .detail-info .detail-information {
            padding: 4px 0px;
        }

        .detail-information h2 {
            font-size: 16px;
            display: inline-block;
        }

        .detail-information h4 {
            font-size: 16px;
            color: #727272;
            /* padding: 0px 5px;*/
            display: inline-block;
        }

        .vehicle-price hr{
            margin: 2px 0px;
        }

        .vehicle-price .title{
            font-size: 16px !important;
            font-weight: bold;
        }




    </style>

@endsection
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-7">
        @php
            $additional_images = explode(',',$vehicle->additional_image);
        @endphp

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators mx-auto">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @foreach($additional_images??array() as $key=>$image)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key+1}}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url($vehicle->feature_image??'')}}" class="d-block w-100" alt="...">
                </div>

                @foreach($additional_images??array() as $key=>$image)
                    <div class="carousel-item">
                        <img src="{{url($image??'')}}" class="d-block w-100" alt="...">
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
    <div class="col-sm-5">

        <div class="detail-product-text">
            <div class="detail-product-head">
                <input type="hidden" name="productname" id="productname" value="Heckle chain">
                <h2 class="home__h2">{{$vehicle->name}}</h2>
                <br>
                <div class="d-flex">

                    @if($vehicle->four_hour=='yes')
                        <div class="vehicle-price mr-5">
                            <h4 class="title">4 Hrs Price</h4>
                            <hr>

                            @if($vehicle->four_hour_discount)
                                <h5 class="td1">${{number_format($vehicle->four_hour_discount,1)}}
                                    <small><s id="order_price">${{number_format($vehicle->four_hour_price,1)}}</s></small>
                                </h5>
                            @else
                                <h5 class="td1">${{number_format($vehicle->four_hour_discount,1)}}
                                </h5>
                            @endif

                        </div>
                    @endif

                    @if($vehicle->eight_hour=='yes')
                        <div class="vehicle-price mr-5">
                            <h4 class="title">8 Hrs Price</h4>
                            <hr>

                            @if($vehicle->eight_hour_discount)
                                <h5 class="td1">${{number_format($vehicle->eight_hour_discount,1)}}
                                    <small><s id="order_price">${{number_format($vehicle->eight_hour_price,1)}}</s></small>
                                </h5>
                            @else
                                <h5 class="td1">${{number_format($vehicle->eight_hour_discount,1)}}
                                </h5>
                            @endif

                        </div>
                    @endif

                    @if($vehicle->full_day=='yes')
                        <div class="vehicle-price mr-5">
                            <h4 class="title">24 Hrs Price</h4>
                            <hr>

                            @if($vehicle->full_day_discount)
                                <h5 class="td1">${{number_format($vehicle->full_day_discount,1)}}
                                    <small><s id="order_price">${{number_format($vehicle->full_day_price,1)}}</s></small>
                                </h5>
                            @else
                                <h5 class="td1">${{number_format($vehicle->full_day_discount,1)}}
                                </h5>
                            @endif

                        </div>
                    @endif


                </div>
            </div>
            <br>
            <div>
                {{ substr(strip_tags($vehicle->description),0,100) }} <a href="#information">Read More</a>
            </div>

            <div class="detail-info">
                <div class="detail-information">
                    <h2>Category :</h2>
                    <h4>{{$vehicle->category->name??''}}</h4>
                </div>
                <div class="detail-information">
                    <h2>Brand :</h2>
                    <h4>{{$brand->name}}</h4>
                </div>
            </div>

            <div class="detail-info">
                <ul class="car-info-list d-flex">
                    <li>{{$vehicle->model}}</li>
                    <li>{{$vehicle->body}}</li>
                    <li>{{$vehicle->vehicle_class}}</li>
                    <li>{{$vehicle->transmission}}</li>
                </ul>
            </div>
            <br>

            <div class="rental__cta">
                <div data-ix="display-booking-lightbox-on-click" class="button rental__cta">
                    <div class="rental__cta--embed w-embed">
                        <a href="/vehicle-booking/{{base64_encode($vehicle->id)}}"  class="rental__cta--text">
                            Book Online
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
  </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4 vehicle-spec">
            <h4>About</h4>
            <hr>

            <div class="tech-info-table">
                <table class="table table-bordered table-hover">
                    <tbody><tr>
                        <th>Class</th>
                        <td>Compact</td>
                    </tr>
                    <tr>
                        <th>Fuel</th>
                        <td>Petrol</td>
                    </tr>
                    <tr>
                        <th>Doors</th>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th>GearBox</th>
                        <td>Automatic</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>

        <div class="col-sm-4 vehicle-spec">
            <h4>Style</h4>
            <hr>

            <div class="tech-info-table">
                <table class="table table-bordered table-hover">
                    <tbody><tr>
                        <th>Class</th>
                        <td>Compact</td>
                    </tr>
                    <tr>
                        <th>Fuel</th>
                        <td>Petrol</td>
                    </tr>
                    <tr>
                        <th>Doors</th>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th>GearBox</th>
                        <td>Automatic</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>

        <div class="col-sm-4 vehicle-spec">
            <h4>Performance</h4>
            <hr>

            <div class="tech-info-table">
                <table class="table table-bordered table-hover">
                    <tbody><tr>
                        <th>Class</th>
                        <td>Compact</td>
                    </tr>
                    <tr>
                        <th>Fuel</th>
                        <td>Petrol</td>
                    </tr>
                    <tr>
                        <th>Doors</th>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th>GearBox</th>
                        <td>Automatic</td>
                    </tr>
                    </tbody></table>
            </div>
        </div>

    </div>
</div>
<!--
<div class="container">
        <div class="descriptiondiv" style="display:flex; justify-content: space-between;">
          <div class="aboutdiv">
            <h2 class="rental__h2">About</h2>
            <ul class="list-group list-group-flush">

                <div class="rental__features--block">
                  <div class="rental__features--label"><h4>Make</h4></div>
                  <div class="rental__features--text">{{ $brand->name }}</div>
                </div>

              @if( $vehicle->model)

                <div class="rental__features--block">
                  <div class="rental__features--label"><h4>Model</h4></div>
                  <div class="rental__features--text">{{ $vehicle->model }}</div>
                </div>

              @endif
              @if( $vehicle->vehicle_class)

                <div class="rental__features--block">
                  <div class="rental__features--label"><h4>Class</h4></div>
                  <div class="rental__features--text">{{ $vehicle->vehicle_class }}</div>
                </div>

              @endif
              @if( $vehicle->type)
              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Type</h4></div>
                <div class="rental__features--text">{{ $vehicle->type }}</div>
              </div>
              @endif
              @if( $vehicle->actual_msrp)
                <div class="rental__features--block">
                  <div class="rental__features--label"><h4>Actual MSRP</h4></div>
                  <div>
                    <div class="rental__features--text currency">${{ $vehicle->actual_msrp }}</div>
                  </div>
                </div>
              @endif
            </ul>

          </div>

          <div class="stylediv">
            <h2 class="rental__h2">Style</h2>
            <ul class="list-group list-group-flush">
              @if( $vehicle->color)

                <div class="rental__features--block">
                  <div class="rental__features--label"><h4>Color</h4></div>
                  <div class="rental__features--text">{{ $vehicle->color }}</div>
                </div>

              @endif

              @if( $vehicle->body)

                <div class="rental__features--block">
                  <div class="rental__features--label"><h4>Body</h4></div>
                  <div class="rental__features--text">{{ $vehicle->body }}</div>
                </div>

              @endif
              @if( $vehicle->seat)

                <div class="rental__features--block">
                  <div class="rental__features--label"><h4>Seats</h4></div>
                  <div class="rental__features--text">{{ $vehicle->seat }}-seater</div>
                </div>

              @endif
              @if( $vehicle->type)
              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Type</h4></div>
                <div class="rental__features--text">{{ $vehicle->type }}</div>
              </div>
              @endif

            </ul>
          </div>

          <div class="performdiv">
            <h2 class="rental__h2">Performance</h2>
            <ul class="list-group list-group-flush">
              @if( $vehicle->suspension)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Suspension</h4></div>
                <div class="rental__features--text">{{ $vehicle->suspension }}</div>
              </div>

              @endif
              @if( $vehicle->horse_power)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Horse Power</h4></div>
                <div>
                  <div class="rental__features--text">{{ $vehicle->horse_power }}</div>
                  <div class="rental__features--text profile__features--text-label">hp</div>
                </div>
              </div>

              @endif
              @if( $vehicle->torque)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Torque</h4></div>
                <div>
                  <div class="rental__features--text">{{ $vehicle->torque }}</div>
                  <div class="rental__features--text profile__features--text-label">lb-ft</div>
                </div>
              </div>

              @endif
              @if( $vehicle->gear_ratio)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Gear Ratio</h4></div>
                <div>
                  <div class="rental__features--text">{{ $vehicle->gear_ratio }}</div>
                </div>
              </div>

              @endif

            </ul>
          </div>

          <div class="availabilitydiv">
            <h2 class="rental__h2">Availability</h2>
            <ul class="list-group list-group-flush">
              @if( $vehicle->stock)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>In stock</h4></div>
                <div>
                  <div class="rental__features--text">{{ $vehicle->stock }} vehicle</div>
                </div>
              </div>

              @endif
              @if( $vehicle->differential)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Differential</h4></div>
                <div>
                  <div class="rental__features--text">{{ $vehicle->differential }}</div>
                </div>
              </div>

              @endif
              @if( $vehicle->clearence)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Clearence</h4></div>
                <div>
                  <div class="rental__features--text">{{ $vehicle->clearence }}</div>
                </div>
              </div>

              @endif
              @if( $vehicle->transmission)

              <div class="rental__features--block">
                <div class="rental__features--label"><h4>Transmission</h4></div>
                <div class="rental__features--text">{{ $vehicle->transmission }}</div>
              </div>

              @endif
            </ul>
          </div>
        </div>
</div>-->
<div class="container">
        <h2 class="rental__h2">Description</h2>
        <div class="rental__description--long w-richtext">
          {!! $vehicle->description !!}
        </div>
</div>
<div class="container">
  <h2 class="rental__h2">Pickup Location</h2>
  <div class="form-group row googlemap">
    <div class="col-sm-12">
      <div id="map-canvas" style="height: 500px"></div>
    </div>
  </div>
  <address class="profile__location--details">
    <div class="profile__location--address">
      <div>Rental Exotic Beasts</div>
      <div>{{ $setting->company_name }}</div>
      <div>{{ $setting->address }}</div>
      <div>9am – 7pm Daily</div><a href="tel:+1-866-984-1187">{{ $setting->phone }}</a><a
        href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
    </div>
  </address>
</div>
  <!-- Modal -->
  <div class="modal fade" id="BookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="container p-0">

              </div>
          </div>
      </div>
  </div>


@endsection
@section('script')

    <script src="//maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyCyYM0wdvmHA5KRhEAl1R7rMp28eCHoGlo"  type="text/javascript"></script>



    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $(".car-preview-crousel").owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 2000,
                nav: true,
                dots: true,
                dotsEach: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn'
            });
        });
    </script>


    <script>
        function initialize() {

            var mylong = parseFloat('{{$setting->longitude}}');
            var mylat = parseFloat('{{$setting->latitude}}');

            var myLatlng = {lat: mylat, lng: mylong };
            var mapDiv = document.getElementById('map-canvas');
            var map = new google.maps.Map(mapDiv, {
                center: myLatlng,
                zoom: 20,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var branchName = 'Rental Exotic Beasts';

            var dictionary = { lat: mylat, lng: mylong, name: branchName };

            var myLatLng = {lat: dictionary.lat, lng: dictionary.lng};

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                label: dictionary.name,
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
