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
                              <button class="btn btn-dark" type="button" ng-toggle="leaveFlyout" ng-toggle-group="ben-flyouts" ng-toggle-group-closeable="" ng-toggle-auto-close="" ng-mx-click="click-leave-flyout" aria-expanded="false">

                                  <span class="visually-hidden"> Choose a different date or time</span>
                              </button>
                          </div>
                      </div>
                      <div class="pull-left">
                          <button class="btn btn-outline-info" type="button" ng-toggle="secureFlyout" ng-toggle-group="ben-flyouts" ng-toggle-group-closeable="" ng-toggle-auto-close="" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" id="icon-svg-lock" class="icon-svg-lock" width="11" height="14" viewBox="0 0 11.02 14" ng-svg="icon-svg-lock">
                                  <path d="M7.66,3.88a2.15,2.15,0,0,0-4.3,0v2h4.3Z" style="fill:none"></path><path d="M9.39,5.85v-2a3.88,3.88,0,0,0-7.76,0v2A1.72,1.72,0,0,0,0,7.56v4.73A1.72,1.72,0,0,0,1.71,14h7.6A1.72,1.72,0,0,0,11,12.29V7.56A1.71,1.71,0,0,0,9.39,5.85Zm-6-2a2.15,2.15,0,0,1,4.3,0v2H3.36Z"></path>
                              </svg>
                              Secured
                          </button>
                      </div>
                  </header>
                  <main class="card-body booking">
                      <div class="container p-3">
                          <div class="row">
                              <div class="col-md-6">
                                  <h2 class="title text-info mb-5">You're Booking :</h2>
                                  <div class="d-flex">
                                      <div class="mr-5">
                                          <div class="thumbnail">
                                              <img class="thumbimg" src="/frontEnd/5af4be5feee5104947ba2c94_2018-ferrari-488-spyder-white-exterior-front-angle-royalty-exotic-cars.jpg" width="150px">
                                          </div>
                                      </div>
                                      <div>
                                          <h3>2018 Jeep Wrangler - White</h3>
                                          Thursday, August 27th 2020 @ 10am - 2pm
                                      </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                      <br>
                      <div class="container">
                          <h2 class="text-center text-success"><strong>Online Booking Agreement</strong></h2>
                          <form action="/action_page.php">
                              <div class="form-group">

                                  <label for="fname" class="form-label">Primary Driver's Full Name:</label>
                                  <input class="form-control" type="text" id="fname" name="firstname" placeholder="As it appears on Driver's license">

                              </div>
                              <div class="form-group">


                                  <label for="lname" class="form-label">Additional Driver's Full Name:</label>
                                  <input type="text" id="lname" name="lastname" class="form-control" placeholder="As it appears on Driver's license">
                              </div>
                              <div class="form-group">


                                  <label for="country" class="form-label">Country of Residence</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                      <option value="australia">Australia</option>
                                      <option value="canada">Canada</option>
                                      <option value="usa">USA</option>
                                  </select>
                              </div>

                              <label for="country">Property Damage Waiver ($3,500 Limit)</label>
                              <select id="country" name="country">
                                  <option value="australia">$99.00 Yes I would like to buy this property</option>
                                  <option value="canada">$0.00 No I dont want to buy this property</option>
                              </select>

                              <label for="country">Tire Protection</label>
                              <select id="country" name="country">
                                  <option value="australia">$99.00 Yes I would like to buy this property</option>
                                  <option value="canada">$0.00 No I dont want to buy this property</option>
                              </select>

                              <label for="country">Mechanical Break Down Insurance</label>
                              <select id="country" name="country">
                                  <option value="australia">$99.00 Yes I would like to buy this property</option>
                                  <option value="canada">$0.00 No I dont want to buy this property</option>
                              </select>

                              <label for="country">Prepaid Gas Credit</label>
                              <select id="country" name="country">
                                  <option value="australia">$99.00 Yes I would like to buy this property</option>
                                  <option value="canada">$0.00 No I dont want to buy this property</option>
                              </select>

                              <label for="country">Destination Packages</label>
                              <select id="country" name="country">
                                  <option value="australia">$99.00 Yes I would like to buy this property</option>
                                  <option value="canada">$0.00 No I dont want to buy this property</option>
                              </select>

                              <div style="width: 100%; height: 45px; margin: auto; border: 1px solid lightgrey; padding: 8px; font-size: 0.8em; float: left;">
                                  <input type="checkbox" id="fname"><span> I am over the age of 25 </span>
                                  All drivers must be over the age of 25.
                                  *Passengers must be at least 4' 9" or weigh more than 40lbs.
                              </div>

                              <div style="width: 100%; height: 45px; margin: auto; border: 1px solid lightgrey; padding: 8px; font-size: 0.8em; float: left;">
                                  <input type="checkbox" id="fname">I have a valid driver's license
                                  All drivers must have a valid driver's license from their country of citizenship.
                                  *International driver's must have passport present.
                              </div>

                              <div style="width: 100%; height: 45px; margin: auto; border: 1px solid lightgrey; padding: 8px; font-size: 0.8em; float: left;">
                                  <input type="checkbox" id="fname">I agree to follow all state and federal laws
                                  Please drive in a safe, responsible, and legal manner.

                                  *Unsafe operation may result in fines/early termination of rental agreement.
                              </div>

                              <label for="country" style="margin-top: 6px;">How did you hear about us originally?</label>
                              <select id="country" name="country">
                                  <option value="australia">Organic</option>
                                  <option value="canada">Social</option>
                                  <option value="usa">Location</option>
                              </select>

                          </form>
                      </div>
                  </main>
              </div>

          </div>
      </div>


@endsection
@section('script')

    <script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

@endsection
