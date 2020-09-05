@extends('layouts.front')
@section('style')

<style>
    .booking .banner {
        padding: 4rem !important;
    }
</style>
<link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }
    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }
    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size:20px;
        margin: 0;
    }
    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
    }
    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }
</style>
@endsection
@section('content')
<div class="inner_page">

    <div class="container " style="margin-top: 10rem !important;">
        <div class="card col-md-10 col-sm-12">
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark">✓</i>
            </div>
            <h1>Thank you</h1>
            <p>We have received your rental request. We will notify you once within few moment!</p>
            <br>


            <a href="/vehicle-checkout-invoice/{{$order->txn_id}}" class="btn btn-success rental__cta--text text-uppercase" style="font-weight: bold;padding: 10px 50px;"> <i class="fa fa-print text-white"> </i> Invoice</a>
        </div>


    </div>
</div>


@endsection
@section('script')

<script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script>
<!--/ calender javascripts -->

@endsection
