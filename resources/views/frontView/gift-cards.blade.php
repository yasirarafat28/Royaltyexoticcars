@extends('layouts.front')
@section('style')
<style>
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
    }


    @media screen and (max-width: 991px) {

        .gc-body{
            padding: 2em;

        }
    }
    @media screen and (max-width: 768px) {

        .gc-body{
            padding: 1em;

        }
    }

</style>
@endsection
@section('content')

<div class="container-md extra-top-margin mb-5">

    <div class="policy__heading mt-5">
        <h2 class="home__h2 rental-section-title text-center">Gift Cards</h2>
        <hr class="center-hr" style="color: #fff !important;">

      </div>
    <div class="row">

        <div class="col-md-6">
            <div class="g-card">
                <div class="gc-body text-white">
                    <div class="pull-left">
                        <h3 class="home__h2">Gift Card</h3>
                        <h4 class="card-title mbr-fonts-style"> Test Gift Card</h4>
                    </div>
                    <div class="pull-right">
                        <h2 class="home__h2 rental-section-title"><strong>Value:</strong> 10 USD</h2>
                        <h4 class=""><strong>Price:</strong> 10 USD</h2>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="gc-content">

                        <p class="gc-warninng">[Please Note]: Converting to cash is not possible. You can use this card balance for rental and shopping along this site.</p>

                    </div>

                </div>
                <div class="gc-footer pl-3 pr-3 pt-2 pb-2">

                    <div class="row">

                        <div class="col-4">
                            <img src="/logo.png" alt="" class="gc-logo" height="80px">
                        </div>
                        <div class="col-4">
                            <p><strong>Validity: </strong><br> 12 November 2020</p>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#" class="btn btn-outline-danger text-uppercase">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
@endsection
