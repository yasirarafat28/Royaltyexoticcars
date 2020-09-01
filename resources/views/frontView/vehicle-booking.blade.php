@extends('layouts.front')
@section('style')

    <style>
        .booking .banner{
            padding: 4rem !important;
        }

        .fc-day-grid-event .fc-content {
            color: #4c5d76;
            font-size: 15px;
            font-weight: 400;
        }
        .fc-event, .fc-event-dot {
            background-color: transparent !important;
            padding: 10px !important;
        }.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
             float: unset;
         }
        .fc-day-top{
            font-size: 22px;
            font-weight: 600;
            text-align: center !important;
        }

        .schedule-title{
            font-size: 14px !important;
        }
        .schedule-offer{
            font-size: 13px;
        }
        p.schedule-offer{
            margin: 0px !important;
        }
        .fc-day-grid-event .fc-content {
             white-space: normal !important;
             overflow: hidden;
         }

    </style>
    <link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">
@endsection
@section('content')
  <div class="rental__hero">

      <div class="container mt-5">
          @include('frontView.partials.vehicle-booking')

          </div>
      </div>




@endsection
@section('script')
    <script src="/frontEnd/d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d5419.js?site=5a10aaa4d85f4b0001a53292"
            type="text/javascript" ></script>

    <script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

    <script>


        function getView() {
            return $(window).width() < 765 ? 'listMonth':'month'
        }
        console.log($(window).width());



        $('#calendar').fullCalendar({

            timeZone: 'UTC',
            header: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            defaultView: getView(),

            defaultDate: "{{date("Y-m-d")}}",

            eventClick: function(arg) {

            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {
                //alert(arg);

                //window.location='/vehicle-checkout'
            },
            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            eventLimit: false, // allow "more" link when too many events
            dayMaxEvents: true,
            events: [
                @foreach($dates??array() as $date)
                    @foreach($schedules??array() as $schedule)

                    @php
                    $checkoutUrl =  url('/vehicle-checkout',array(
                                'vehicle'=>base64_encode($vehicle->id),
                                'schedule'=>base64_encode($schedule->id),
                                'date'=>base64_encode($date),
                            ));

                    @endphp
                        {
                            title: '<span style="color: #0a6ece;" class="schedule-time">{{date("h:i a",strtotime($schedule->start_time))}}</span>\n' +
                                '  <span class="schedule-title">{{$schedule->vehicle->name??null}} - ({{$schedule->color}}) -  ({{$schedule->register_number}})</span>\n' +
                                '    @if($schedule->four_hour=="yes"&& $schedule->vehicle->four_hour=='yes')<a href="{{$checkoutUrl}}?reservation_for=four_hour">  <p style="color: red;"  class="schedule-offer"> 4 Hrs Rental  </p> </a> @endif ' +
                                '    @if($schedule->six_hour=="yes"&& $schedule->vehicle->six_hour=='yes')<a href="{{$checkoutUrl}}?reservation_for=six_hour">  <p style="color: red;"  class="schedule-offer"> 6 Hrs Rental  </p> </a> @endif ' +
                                '    @if($schedule->eight_hour=="yes"&& $schedule->vehicle->eight_hour=='yes')<a href="{{$checkoutUrl}}?reservation_for=eight_hour">  <p style="color: red;"  class="schedule-offer"> 8 Hrs Rental  </p> </a> @endif ' +
                                '    @if($schedule->twelve_hour=="yes"&& $schedule->vehicle->twelve_hour=='yes')<a href="{{$checkoutUrl}}?reservation_for=twelve_hour">  <p style="color: red;"  class="schedule-offer"> 12 Hrs Rental  </p> </a> @endif ' +
                                '    @if($schedule->full_day=="yes"&& $schedule->vehicle->full_day=='yes')<a href="{{$checkoutUrl}}?reservation_for=full_day">  <p style="color: red;"  class="schedule-offer"> 24 Hrs Rental  </p> </a> @endif ',
                            start: "{{$date}}",
                            className: 'b-l b-2x b-greensea',
                            url: "{{$checkoutUrl}}",
                        },
                    @endforeach
                @endforeach
            ],

            eventRender: function (event, element) {
                if (getView()==='month')
                    element.find('.fc-title').html(event.title);
                else
                    element.find('.fc-list-item-title').html(event.title);
                //
            }
        });
    </script>
@endsection
