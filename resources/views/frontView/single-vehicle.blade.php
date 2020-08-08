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
        <h1 class="rental__h1">Lamborghini Aventador </h1>
        <div class="rental__specs">6.5 V12</div>
        <div class="rental__specs rental__specs--spacer">|</div>
        <div class="rental__specs">7-Speed Automatic</div>
        <div class="rental__specs rental__specs--spacer">|</div>
        <div class="rental__specs">750</div>
        <div class="rental__specs">hp</div>
      </div>
      <div class="rental__price">
        <div class="rental__price--block">
          <div class="rental__price--label">4 Hours</div>
          <div>$</div>
          <div>999</div>
        </div>
        <div class="rental__price--block">
          <div class="rental__price--label">8 Hours</div>
          <div>$</div>
          <div>1749</div>
        </div>
        <div class="rental__price--block bookbar__price--block-wide">
          <div class="rental__price--label">24Hr Special!</div>
          <div>$</div>
          <div>1749</div>
          <div class="rental__price--before">
            <div>normally $</div>
            <div>2299</div>
          </div>
        </div>
      </div>
      <div class="rental__cta">
        <div data-ix="display-booking-lightbox-on-click" class="button rental__cta">
          <div class="rental__cta--embed w-embed"><a
              href="/vehicle-booking"
              class="rental__cta--text">
              Book Online
            </a></div>
        </div>
        <div class="interest">
          <div class="interest__wrapper"><img
              src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
              alt="" class="interest__icon" />
            <div class="interest__text"><span class="interest__span">3</span> Active Visitors</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rental__content">
    <div class="container container__small">

      <section id="photos" class="rental__section">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="/frontEnd/5d3f3e9d9f2cd93b57223d57_001-cars.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                      <img src="/frontEnd/5af4d00138c15114e253c7df_2018-mclaren-720s-bright-orange-exterior-front-angle-royalty-exotic-cars.jpg" class="d-block w-100" alt="...">
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
          <!--<div class="car-preview-crousel  owl-theme">
              <div class="single-car-preview item">
                  <img src="/frontEnd/5d3f3e9d9f2cd93b57223d57_001-cars.jpg" alt="JSOFT">
              </div>
              <div class="single-car-preview item">
                  <img src="/frontEnd/5af4d00138c15114e253c7df_2018-mclaren-720s-bright-orange-exterior-front-angle-royalty-exotic-cars.jpg" alt="JSOFT">
              </div>
          </div>-->
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
            <div class="rental__features--text">Lamborghini</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Model</div>
            <div class="rental__features--text">Aventador</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Color</div>
            <div class="rental__features--text">Black</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Class</div>
            <div class="rental__features--text">Supercar</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Body</div>
            <div class="rental__features--text">Coupe</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Seats</div>
            <div class="rental__features--text">2</div>
            <div class="rental__features--text">-seater</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Actual MSRP</div>
            <div>
              <div class="rental__features--text currency">$536,000</div>
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
            <div class="rental__features--text">7-Speed Automatic</div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Horse Power</div>
            <div>
              <div class="rental__features--text">750</div>
              <div class="rental__features--text profile__features--text-label">hp</div>
            </div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Torque</div>
            <div>
              <div class="rental__features--text">509</div>
              <div class="rental__features--text profile__features--text-label">lb-ft</div>
            </div>
          </div>
          <div class="rental__features--block">
            <div class="rental__features--label">Drive Wheel</div>
            <div>
              <div class="rental__features--text">AWD</div>
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
          <p>If there&#x27;s a pecking order among the elite of the supercar elite, the Lamborghini Aventador may be in
            its own category. You wouldn&#x27;t expect anything less than superiority from a 690-horsepower wonder that
            accelerates from 0-60 mph in 2.9 seconds and completes a standing quarter-mile in 10.4 seconds.</p>
          <p>Lamborghini celebrated its 50th anniversary in 2014, and the Aventador represents the Italian carmaker at
            its best. The 6.5-liter V12 has a tremendous personality. Its engine roars in grand tradition and the
            supercar is best defined as a speed demon. Its acceleration is as outrageous as the rest of the 2-door
            coupe&#x27;s specs that include 509 lb-ft of torque and has a top end speed of 216 mph. All-wheel drive is
            standard and the seven-speed automatic transmission features five driving modes.</p>
          <p>The driving experience surprises, particularly on a winding country road with your foot well into the
            accelerator. Part of the Lamborghini&#x27;s signature look is its drastic width. It adds a welcomed,
            pleasing challenge. The Aventador has precise steering on its composed chassis and thus drives pleasingly
            smaller than its monolithic presence.</p>
          <p>The Aventador&#x27;s driving gravitas is further enhanced by its futuristic exterior styling and equally
            aggressive interior control panel reminiscent of a stealth jet.</p>
          <p>For a supercar, the Lamborghini has an extensive laundry list of features for you to enjoy. Consider:
            19-inch front wheels, 20-inch rear wheels, high-performance tires, carbon-ceramic brakes, a deployable rear
            spoiler, and an adjustable-height suspension.</p>
          <p>Plus, there&#x27;s hill-start assist, automatic bi-xenon headlights, LED running lights, heated and power
            folding mirrors, a tilt steering wheel, automatic climate control, leather upholstery, an LCD gauge cluster,
            navigation system, real-time traffic, Bluetooth, an iPod interface and a sound system.</p>
          <p>If you crave mind-blowing speed in a superior driving supercar, the Lamborghini will provide an experience
            like few other vehicles.</p>
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
