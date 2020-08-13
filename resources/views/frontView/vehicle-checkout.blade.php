@extends('layouts.front')
@section('style')

<style>
    .booking .banner {
        padding: 4rem !important;
    }
</style>
<link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<div class="rental__hero">

    <div class="container">
    	@include('frontView.partials.vehicle-checkout')


    </div>
</div>


@endsection
@section('script')

<script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script>
<!--/ calender javascripts -->

@endsection
