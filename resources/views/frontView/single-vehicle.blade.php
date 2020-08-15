@extends('layouts.front')
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



    </style>

@endsection
@section('content')
  <div class="rental__hero">
    <div class="rental__header">
      <div class="rental__name">
        <h1 class="rental__h1">{{ $vehicle->name }}</h1>
        <div class="rental__specs">6.5 V12</div>
        <div class="rental__specs rental__specs--spacer">|</div>
        <div class="rental__specs">{{ $vehicle->transmission }}</div>
        <div class="rental__specs rental__specs--spacer">|</div>
        <div class="rental__specs">{{ $vehicle->horse_power }}</div>
        <div class="rental__specs">hp</div>
      </div>
      <div class="rental__price">

        @if($vehicle->four_hour=='yes')
            @if($vehicle->four_hour_discount)
                <div class="rental__price--block bookbar__price--block-wide">
                  <div class="rental__price--label">4Hr Special!</div>
                  <div>$</div>
                  <div>{{ $vehicle->four_hour_discount }}</div>
                  <div class="rental__price--before">
                    <div>normally $</div>
                    <div>{{ $vehicle->four_hour_price }}</div>
                  </div>
                </div>
            @else
                <div class="rental__price--block">
                    <div class="rental__price--label">4 Hours</div>
                    <div>$</div>
                    <div>{{ $vehicle->four_hour_price }}</div>
                </div>
            @endif

        @endif

        @if($vehicle->eight_hour=='yes')

            <div class="rental__price--block bookbar__price--block-wide">
              <div class="rental__price--label">8Hr Special!</div>
              <div>$</div>
              <div>{{ $vehicle->eight_hour_discount }}</div>
              <div class="rental__price--before">
                <div>normally $</div>
                <div>{{ $vehicle->eight_hour_price }}</div>
              </div>
            </div>
        @endif

        @if($vehicle->full_day=='yes')

            <div class="rental__price--block bookbar__price--block-wide">
              <div class="rental__price--label">24Hr Special!</div>
              <div>$</div>
              <div>{{ $vehicle->full_day_discount }}</div>
              <div class="rental__price--before">
                <div>normally $</div>
                <div>{{ $vehicle->full_day_price }}</div>
              </div>
            </div>
        @endif
      </div>
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
  <div class="rental__content">
    <div class="container container__small">

      <section id="photos" class="rental__section">

          @php
           $additional_images = explode(',',$vehicle->additional_image);
          @endphp

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
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
      </section>

        <nav class="rental__nav">
            <!--<a href="#photos" class="rental__nav--link">Photos</a>-->
            <a href="#specs" class="rental__nav--link">Specs</a>
            <a href="#description" class="rental__nav--link">Description</a>
            <a href="#location" class="rental__nav--link">Location</a>
            <a href="#requirements" class="rental__nav--link">Requirements</a>
            <a href="#faqs" class="rental__nav--link">FAQs</a>
        </nav>
      <section id="specs" class="rental__section">
        <h2 class="rental__h2">Style</h2>
        <div class="rentals__features">
          <div class="rental__features--block">
            <div class="rental__features--label">Make</div>
            <div class="rental__features--text">lamborgini</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Model</div>
            <div class="rental__features--text">{{ $vehicle->model }}</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Color</div>
            <div class="rental__features--text">{{ $vehicle->color }}</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Class</div>
            <div class="rental__features--text">{{ $vehicle->vehicle_class }}</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Body</div>
            <div class="rental__features--text">{{ $vehicle->body }}</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Seats</div>
            <div class="rental__features--text">{{ $vehicle->seat }}</div>
            <div class="rental__features--text">-seater</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Actual MSRP</div>
            <div>
              <div class="rental__features--text currency">{{ $vehicle->actual_msrp }}</div>
            </div>
          </div>
        </div>
        <h2 class="rental__h2">Performance</h2>
        <div class="rentals__features last">
          <div class="rental__features--block">
            <div class="rental__features--label">Engine</div>
            <div class="rental__features--text">6.5 V12</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Transmission</div>
            <div class="rental__features--text">{{ $vehicle->transmission }}</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Horse Power</div>
            <div>
              <div class="rental__features--text">{{ $vehicle->horse_power }}</div>
              <div class="rental__features--text profile__features--text-label">hp</div>
            </div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Torque</div>
            <div>
              <div class="rental__features--text">{{ $vehicle->torque }}</div>
              <div class="rental__features--text profile__features--text-label">lb-ft</div>
            </div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Drive Wheel</div>
            <div>
              <div class="rental__features--text">{{ $vehicle->driver_wheel }}</div>
            </div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">0-60mph</div>
            <div>
              <div class="rental__features--text">2.9</div>
              <div class="rental__features--text"> seconds</div>
            </div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">1/4 Mile</div>
            <div>
              <div class="rental__features--text">10.4</div>
              <div class="rental__features--text"> seconds</div>
            </div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Top Speed</div>
            <div class="rental__features--text">220</div>
            <div class="rental__features--text"> mph</div>
          </div>
        </div>
      </section>
      <section id="description" class="rental__section">
        <h2 class="rental__h2">Description</h2>
        <div class="rental__description--long w-richtext">
        {{ $vehicle->description }}
        </div>
      </section>
      <section id="location" class="rental__section">
        <h2 class="rental__h2">Pickup Location</h2><a target="_blank"
          style="background-image:url(_https_/assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a549a4_royalty-exotic-cars-map.html)"
          href="https://www.google.com/maps/place/Royalty+Exotic+Car+Rentals/@36.1109615,-115.1838642,17z/data=!3m1!4b1!4m5!3m4!1s0x80c8c425f445f48d:0x7b51ef32201743d6!8m2!3d36.1109615!4d-115.1816755?hl=en"
          class="rental__location--img w-inline-block"><img
            src="/frontEnd/5a7df00a214ab6000146ef72_placeholder-1920x700.png" alt="" class="placeholder" /></a>
        <address class="profile__location--details">
          <div class="profile__location--address">
            <div>Rental Exotic Beasts (Las Vegas)</div>
            <div>4305 Dean Martin Dr, Suite #120</div>
            <div>9am – 7pm Daily</div><a href="tel:+1-866-984-1187">+1-866-984-1187</a><a
              href="mailto:reservations@rentalexoticsbeasts.com?subject=Can%20you%20please%20help%20me%20find%20my%20rental%20pickup%20location%3F%20%3A)">reservations@rentalexoticsbeasts.com</a>
          </div>
          <div class="profile__location--directions">From Las Vegas BLVD, go West on Flamingo, take a left at Hotel Rio
            Drive, take a right at Dean Martin, and you&#x27;ll see a large Rental Exotic Beasts sign on the right-hand
            side. Call us anytime if you have trouble finding our showroom.</div>
        </address>
      </section>
    </div>
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
@endsection
