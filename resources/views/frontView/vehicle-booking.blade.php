@extends('layouts.front')
@section('style')

    <style>
        .booking .banner{
            padding: 4rem !important;
        }

    </style>
    <link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">
@endsection
@section('content')
  <div class="rental__hero">

      <div class="container">
          @include('frontView.partials.vehicle-booking')

          </div>
      </div>


@endsection
@section('script')

    <script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

    <script>
        $('#calendar').fullCalendar({
            header: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            defaultDate: "2018-01-12",

            eventClick: function(arg) {
                if (confirm('Do you want to book in ths time?')) {
                    //arg.event.remove()
                    window.location='/vehicle-checkout'
                }
            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {
                //alert(arg);

                //window.location='/vehicle-checkout'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            eventLimit: true, // allow "more" link when too many events
            dayMaxEvents: true,
            events: [
                {
                    title: 'All Day Event',
                    start: '2018-11-01',
                    className: 'b-l b-2x b-greensea'
                },
                {
                    title: 'Long Event',
                    url: '/vehicle-checkout',
                    start: '2018-01-07',
                    end: '2018-01-10',
                    className: 'bg-cyan'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-01-09T16:00:00',
                    className: 'b-l b-2x b-lightred'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-12-16T16:00:00',
                    className: 'b-l b-2x b-success'
                },
                {
                    title: 'Conference',
                    start: '2018-01-11',
                    end: '2018-01-13',
                    className: 'b-l b-2x b-primary'
                },
                {
                    title: 'Meeting',
                    start: '2018-01-12T10:30:00',
                    end: '2018-01-12 T12:30:00',
                    className: 'b-l b-2x b-amethyst'
                },
                {
                    title: 'Lunch',
                    start: '2018-01-12T12:00:00',
                    className: 'b-l b-2x b-primary'
                },
                {
                    title: 'Meeting',
                    start: '2018-01-12T14:30:00',
                    className: 'b-l b-2x b-drank'
                },
                {
                    title: 'Happy Hour',
                    start: '2018-01-12T17:30:00',
                    className: 'b-l b-2x b-lightred'
                },
                {
                    title: 'Dinner',
                    start: '2018-12-12T20:00:00',
                    className: 'b-l b-2x b-amethyst'
                },
                {
                    title: 'Birthday Party',
                    start: '2018-01-13T07:00:00',
                    className: 'b-l b-2x b-primary'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2018-01-28',
                    className: 'b-l b-2x b-greensea'
                }
            ]
        });
    </script>
@endsection
