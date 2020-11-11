@extends('layouts.front')
@section('style')
<style>
    .gc-container{
        margin-bottom: 10px !important;
    }
    .g-card{
        border: 1px solid #ddd;
        border-radius: 20px;
        height: 300px;
        background-image: url('/images/gift-card.jpg');
        background-size: cover;
    }
    .gc-body{
        height: 70% !important;
        padding: 4em;

    }
    .gc-footer{
        height: 30% !important;
        background-image: url('/images/giftcard-footer.jpg');
        border-radius: 0px 0px 15px 15px;
        background-image: url('/images/giftcard-footer.jpg');
        background-size: cover;

    }

    .gc-footer .row .col-4{
        margin-top: auto;
        margin-bottom: auto;
    }

    hr.center-hr::before{
    }

    .gc-warninng{
        bottom: 0;
        font-size: .9em;
    }


    @media screen and (max-width: 1200px) {
        .gc-body{
            height: 70% !important;
            padding: 2em;

        }
    }
    @media screen and (max-width: 991px) {

        .gc-body{
            padding: 2em;

        }


        .g-card{
            height: 250px;
        }

        .gc-body{
            padding: 1em;

        }

        .gc-body .home__h2 {
            font-size: 1em;
        }
        .gc-body .card-title {
            font-size: 1em;
        }
    }


    @media screen and (max-width: 320px) {
        .gc-body .home__h2 {
            font-size: 0.8em;
        }
        .gc-body .card-title {
            font-size: 0.8em;
        }
    }

</style>

@endsection
@section('content')

<div class="container-md extra-top-margin mb-5">

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif


    <div class="policy__heading mt-5">
        <h2 class="home__h2 rental-section-title text-center">Gift Cards</h2>
        <hr class="center-hr" style="color: #fff !important;">

      </div>
    <div class="row">
        @foreach ($cards??array() as $card)
            <div class="col-md-6 gc-container">
                <div class="g-card">
                    <div class="gc-body text-white">
                        <div class="pull-left">
                            <h3 class="home__h2">Gift Card</h3>
                            <h4 class="card-title mbr-fonts-style"> {{$card->name}}</h4>
                        </div>
                        <div class="pull-right">
                            <h2 class="home__h2 rental-section-title"><strong>Value:</strong> {{$card->equivalend_amount}} USD</h2>
                            <h4 class="card-title"><strong>Price:</strong> {{number_format($card->price,2)}} USD</h4>
                        </div>
                        <div class="clearfix"></div>
                        <div class="gc-content mt-2">

                            <p class="gc-warninng">[Please Note]: Converting to cash is not possible. You can use this card balance for rental and shopping along this site.</p>

                        </div>

                    </div>
                    <div class="gc-footer pl-3 pr-3 pt-2 pb-2">

                        <div class="row">

                            <div class="col-6">
                                <img src="/logo.png" alt="" class="gc-logo" height="80px">
                            </div>
                            <!--<div class="col-4">
                                <p><strong>Expiration date: </strong><br> Never expired</p>
                            </div>-->
                            <div class="col-6 text-right">
                                <a href="#" data-package="{{base64_encode($card->id)}}" class="btn btn-outline-danger text-uppercase buy-now-btn"  >Buy Now</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        @endforeach


    </div>
</div>

<form action="{{route('buyGiftCard')}}" id="checkout-form" method="POST">
    @csrf
    <input type="hidden" class="package_id" name="package_id">


    <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="{{Session::get('stripe_key')}}"
    data-amount=""
    data-id="stripid"
    data-name="{{__('messages.site_name')}}"
    data-label="{{__('messages.place_order')}}"
    data-description=""
    data-image="{{asset('logo.png')}}"
    data-locale="auto"></script>
</form>


<style>

    .stripe-button-el{
        visibility: hidden !important;
    }

</style>
@endsection
@section('script')

<script>
    $('.buy-now-btn').on('click',function(event){
        event.preventDefault();
        let package = $(this).data('package');
        $(this).text('Processing...');

        $('#checkout-form .package_id').val(package);
        $('.stripe-button-el').click();
    });
</script>

@endsection
