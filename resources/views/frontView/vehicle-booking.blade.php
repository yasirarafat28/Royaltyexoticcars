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
          <div class="card">

                  <header class="card-header">
                      <div class="pull-right">
                          <!-- ngIf: lightframe.isLightframe() || backUrl --><div class="ben-flyout-wrap" ng-if="lightframe.isLightframe() || backUrl">
                              <button class="btn btn-outline-secondary" type="button" ng-toggle="leaveFlyout" ng-toggle-group="ben-flyouts" ng-toggle-group-closeable="" ng-toggle-auto-close="" ng-mx-click="click-leave-flyout" aria-expanded="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" id="icon-x" class="icon-x" width="14" height="14" viewBox="0 0 14 14" ng-svg="icon-x">
                                      <polygon points="14 1.75 12.25 0 7 5.25 1.75 0 0 1.75 5.25 7 0 12.25 1.75 14 7 8.75 12.25 14 14 12.25 8.75 7 14 1.75"></polygon>
                                  </svg>
                                  <span class="visually-hidden">Close</span>
                              </button>
                          </div>
                      </div>
                      <ul class="pull-left">
                          <button class="btn btn-outline-info" type="button" ng-toggle="secureFlyout" ng-toggle-group="ben-flyouts" ng-toggle-group-closeable="" ng-toggle-auto-close="" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" id="icon-svg-lock" class="icon-svg-lock" width="11" height="14" viewBox="0 0 11.02 14" ng-svg="icon-svg-lock">
                                  <path d="M7.66,3.88a2.15,2.15,0,0,0-4.3,0v2h4.3Z" style="fill:none"></path><path d="M9.39,5.85v-2a3.88,3.88,0,0,0-7.76,0v2A1.72,1.72,0,0,0,0,7.56v4.73A1.72,1.72,0,0,0,1.71,14h7.6A1.72,1.72,0,0,0,11,12.29V7.56A1.71,1.71,0,0,0,9.39,5.85Zm-6-2a2.15,2.15,0,0,1,4.3,0v2H3.36Z"></path>
                              </svg>
                              Secured
                          </button>
                      </ul>
                  </header>
                  <main class="card-body booking">
                      <div class="container-full" style="margin: -18px -18px 0px -18px !important;">
                          <div class="tr" style="margin: 0px -18px -18px 0px -18px !important;">
                              <div class="banner text-white" style="background-image: url(&quot;https://cdn.filestackcontent.com/WBxW3lGeQYUJz247087w/convert?cache=true&amp;compress=true&amp;quality=90&amp;w=1000&amp;fit=max&amp;filter=blur&amp;blurAmount=3&quot;);">
                                  <h1>2017 Indian Chieftain (White)</h1>
                                  <p >Starting at $249 | 4 or 24 Hour Rental Options</p>
                              </div>
                          </div>
                      </div>
                      <br>

                      <div class="container-fluid">
                          <div id="calendar"></div>

                      </div>
                  </main>
              </div>

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
                if (confirm('You want to book in ths time?')) {
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
