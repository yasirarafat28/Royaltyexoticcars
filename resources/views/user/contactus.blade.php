@extends('layouts.front')

@section('title')
{{__('messages.contact_us')}}
@stop
@section('content')

    <style>

        .contact-main-box .contact-main-head {
            margin: 50px 0px;
            font-family: 'open sans';
        }

        .contact-main-box .contact-map-details {
            margin-bottom: 100px;
        }

        .contact-main-head h2 {
            display: inline;
            font-size: 24px;
            font-weight: 600;
        }

        .contact-main-head p {
            display: inline;
            float: right;
            margin: 0px;
            font-size: 18px;
            color: #727272;
        }

        .contact-map-details #map {
            height: 356px;
        }

        .contact-map-details .contact-content-box {
            margin: 40px 0px;
        }

        .contact-content-box .contact-content-detail {
            display: inline;
            float: left;
            text-align: center;
            padding: 10px 0px;
            width: 31%;
        }

        .contact-content-box .contact-content-value {
            display: inline-block;
            padding: 10px 23px;
            border-left: 1px solid #d7d7d7;
            width: 69%;
        }

        .contact-content-value p {
            margin: 0;
            font-size: 15px;
            color: #96979d;
            padding-bottom: 2px;
            font-weight: 500;
        }

        .contact-content-detail .call-icon {
            font-size: 20px;
            color: red;
            padding-bottom: 6px;
        }

        .contact-content-detail h3 {
            font-size: 15px;
            color: red;
            margin: 0px;
            font-weight: 600;
        }

        input#contact-form {
            color: #b4b8bb;
            width: 100%;
            padding: 15px;
            font-size: 14px;
            background-color: #f2f2f2;
            border: none;
        }

        .contact-form-box .contact-form-part2 {
            padding: 30px 0px;
        }

        .contact-form-part label {
            font-size: 19px;
            color: #727272;
        }

        textarea#contact-form {
            width: 100%;
            background-color: #f2f2f2;
            height: 100px;
            margin-bottom: 50px;
            padding: 10px 23px;
            font-size: 14px;
            color: #b4b8bb;
            border: none;
        }

        .contact-form-box .contact-form-part3 {
            margin-bottom: 100px;
        }

        .contact-form-part3 .button {
            display: inline;
            background-color: red;
            padding: 12px 58px;
            color: white;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            font-size: 22px;
        }


        .contact-form-part1 textarea {
            height: 150px;
        }

        .form-control {
            width: 100%;
            background-color: #f2f2f2;
            height: 50px;
            padding: 10px 23px;
            font-size: 14px;
            color: #b4b8bb;
            border: none;
        }

        .contactbtn {
            display: inline;
            background-color: red;
            padding: 12px 58px;
            color: white;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            font-size: 22px;
            border: none;
        }
    </style>
<div class="container  extra-top-margin">
   <div class="contact-main-box">

      <div class="contact-main-head">
          <h1 class="text-center">Contact Us</h1>
      </div>
      @if(Session::has('message'))
      <div class="col-sm-12">
         <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
      </div>
      @endif


      <div class="contact-map-details">
         <div class="row">
            <div class="col-lg-7 col-md-6">
               <div id="map"></div>
            </div>
            <div class="col-lg-5 col-md-6">
               <div class="contact-content-box">
                  <div class="contact-content-detail">
                     <h3 style="color: {{site_color()}} !important">
                         <i class="fa fa-phone call-icon" aria-hidden="true" style="color: {{site_color()}} !important"></i>
                         {{__('messages.contact_us')}}</h3>
                  </div>
                  <div class="contact-content-value">
                     <p>{{Session::get('site_phone')}}</p>
                  </div>
               </div>
               <div class="contact-content-box">
                  <div class="contact-content-detail">

                     <h3 style="color: {{site_color()}} !important"><i class="fa fa-map-marker call-icon" aria-hidden="true" style="color: {{site_color()}} !important"></i> {{__('messages.address')}}</h3>
                  </div>
                  <div class="contact-content-value">
                     <p>{{Session::get('site_address')}}</p>
                  </div>
               </div>
               <div class="contact-content-box">
                  <div class="contact-content-detail">

                     <h3 style="color: {{site_color()}} !important"><i class="fa fa-envelope-o call-icon" aria-hidden="true" style="color: {{site_color()}} !important"></i> {{__('messages.email')}}</h3>
                  </div>
                  <div class="contact-content-value">
                     <p>{{Session::get('site_email')}}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="contact-form-box">
         <form action="{{url('storecontact')}}" method="post">
            {{csrf_field()}}
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="contact-form-part">
                     <div class="contact-form-part1">
                        <label>{{__('messages.name')}}</label><br>
                        <input type="text" name="name" placeholder="Name" class="form-control"  id="name" required>
                     </div>
                     <div class="contact-form-part2">
                        <label>{{__('messages.email')}}</label><br>
                        <input type="text" name="email" placeholder="Email"  class="form-control" id="email" required>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="contact-form-part">
                     <div class="contact-form-part1">
                        <label>{{__('messages.subject')}}</label><br>
                        <input type="text"  name="subject" placeholder="Subject" class="form-control" id="subject" reuqired >
                     </div>
                     <div class="contact-form-part2">
                        <label>{{__('messages.phone')}}</label><br>
                        <input type="text"  name="phone" placeholder="Phone" class="form-control" id="phone" required>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-form-part contact-form-part3">
               <div class="contact-form-part1">
                  <label>{{__('messages.message')}}</label><br>
                  <textarea id="message" class="form-control" placeholder="Message" name="message"></textarea>
               </div>
               <div class="col-md-12 mt-2 con-btn text-center">
                  <input type="submit" class="contactbtn" value="{{__('messages.submit')}}" name="btnsubmit" style="background: {{site_color()}} !important">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@stop
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyYM0wdvmHA5KRhEAl1R7rMp28eCHoGlo&callback=initMap" async defer></script>

@php
$setting = setting();

@endphp

<script type="text/javascript">


    var lng = parseFloat('{{$setting->longitude}}');
    var lat = parseFloat('{{$setting->latitude}}');
  var map;
   var zoom = 13;
   var eiffel = {lat: lat, lng: lng};
   function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: eiffel,
      zoom: zoom
    });
    var marker = new google.maps.Marker({
      position: eiffel,
      map: map,
      animation: google.maps.Animation.DROP,
      title: 'Ha Noi Vietnamese'
    })
    marker.addListener('click', function() {
      infowindow.open(map,marker);
    });
    var contentString = '<div id="content">'+
      '<h1>Ha Noi Vietnamese</h1>'+
      '<p>Hanoi is the capital of the Socialist Republic of <b>Vietnam</b>.</p> City for peace'+
      '</div>';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    })
   }
</script>
@stop
