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
            color: red;
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
            border: 2px solid red;
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
<div class="container extra-top-margin">
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
                <div class="d-flex flex-wrap">

                    @if($vehicle->four_hour=='yes')
                        <div class="vehicle-price mr-5">
                            <h4 class="title">4 Hrs Price</h4>
                            <hr>

                            @if($vehicle->four_hour_discount)
                                <h5 class="td1">${{number_format($vehicle->four_hour_discount,1)}}
                                    <small><s id="order_price">${{number_format($vehicle->four_hour_price,1)}}</s></small>
                                </h5>
                            @else
                                <h5 class="td1">${{number_format($vehicle->four_hour_price,1)}}
                                </h5>
                            @endif

                        </div>
                    @endif

                    @if($vehicle->six_hour=='yes')
                        <div class="vehicle-price mr-5">
                            <h4 class="title">6 Hrs Price</h4>
                            <hr>

                            @if($vehicle->six_hour_discount)
                                <h5 class="td1">${{number_format($vehicle->six_hour_discount,1)}}
                                    <small><s id="order_price">${{number_format($vehicle->six_hour_price,1)}}</s></small>
                                </h5>
                            @else
                                <h5 class="td1">${{number_format($vehicle->six_hour_price,1)}}
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
                                <h5 class="td1">${{number_format($vehicle->eight_hour_price,1)}}
                                </h5>
                            @endif

                        </div>
                    @endif


                    @if($vehicle->twelve_hour=='yes')
                        <div class="vehicle-price mr-5">
                            <h4 class="title">12 Hrs Price</h4>
                            <hr>

                            @if($vehicle->twelve_hour_discount)
                                <h5 class="td1">${{number_format($vehicle->twelve_hour_discount,1)}}
                                    <small><s id="order_price">${{number_format($vehicle->twelve_hour_price,1)}}</s></small>
                                </h5>
                            @else
                                <h5 class="td1">${{number_format($vehicle->twelve_hour_price,1)}}
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
                                <h5 class="td1">${{number_format($vehicle->full_day_price,1)}}
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
                <div class="p-1 detail-information">
                    <h2>Category :</h2>
                    <h4>{{$vehicle->category->name??''}}</h4>
                </div>
                <div class="p-1 detail-information">
                    <h2>Brand    	&nbsp;	&nbsp;	&nbsp;:</h2>
                    <h4>{{$brand->name}}</h4>
                </div>
            </div>

            <div class="detail-info">
                <ul class="car-info-list d-flex">
                    <li>{{$brand->name}}</li>
                    <li>{{$vehicle->model}}</li>
                    <li>{{$vehicle->vehicle_class}}</li>
                    <li>{{$vehicle->color}}</li>
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
                    <tbody>
                    @if( $vehicle->type)
                    <tr>
                        <th>Type</th>
                        <td>{{$vehicle->type}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->driver_wheel)
                    <tr>
                        <th>Driver Wheel</th>
                        <td>{{$brand->driver_wheel}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->suspension)
                    <tr>
                        <th>Suspension</th>
                        <td>{{$vehicle->suspension}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->clearance)
                    <tr>
                        <th>Clearence</th>
                        <td>{{$vehicle->clearance}}</td>
                    </tr>
                    @endif
                    </tbody>
                  </table>
            </div>
        </div>

        <div class="col-sm-4 vehicle-spec">
            <h4>Style</h4>
            <hr>

            <div class="tech-info-table">
                <table class="table table-bordered table-hover">
                    <tbody>
                    @if( $vehicle->color)
                    <tr>
                        <th>Color</th>
                        <td>{{$vehicle->color}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->seat)
                    <tr>
                        <th>Seat</th>
                        <td>{{$vehicle->seat}}-seater</td>
                    </tr>
                    @endif
                    @if( $vehicle->actual_msrp)
                    <tr>
                        <th>Actual Price</th>
                        <td>${{$vehicle->actual_msrp}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->category->name)
                    <tr>
                        <th>Body</th>
                        <td>{{$vehicle->category->name}}</td>
                    </tr>
                    @endif
                    </tbody></table>
            </div>
        </div>

        <div class="col-sm-4 vehicle-spec">
            <h4>Performance</h4>
            <hr>

            <div class="tech-info-table">
                <table class="table table-bordered table-hover">
                    <tbody>
                    @if( $vehicle->horse_power)
                    <tr>
                        <th>Horse Power</th>
                        <td>{{$vehicle->horse_power}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->torque)
                    <tr>
                        <th>Tourque</th>
                        <td>{{$vehicle->torque}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->gear_ratio)
                    <tr>
                        <th>Gear Ratio</th>
                        <td>{{$vehicle->gear_ratio}}</td>
                    </tr>
                    @endif
                    @if( $vehicle->transmission)
                    <tr>
                        <th>Transmission</th>
                        <td>{{$vehicle->transmission}}</td>
                    </tr>
                    @endif
                    </tbody></table>
            </div>
        </div>

    </div>
</div>

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
