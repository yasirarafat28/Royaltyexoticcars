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
                              <div class="form-group" style="margin: 20px;">

                                  <label for="fname" class="form-label">Primary Driver's Full Name:</label>
                                  <input class="form-control" type="text" id="fname" name="firstname" placeholder="As it appears on Driver's license">

                              </div>
                              <div class="form-group" style="margin: 20px;">


                                  <label for="lname" class="form-label">Additional Driver's Full Name:</label>
                                  <input type="text" id="lname" name="lastname" class="form-control" placeholder="As it appears on Driver's license">
                              </div>
                              <div class="form-group" style="margin: 20px;">
                                  <label for="country" class="form-label">Country of Residence</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                      <option value="australia">Australia</option>
                                      <option value="canada">Canada</option>
                                      <option value="usa">USA</option>
                                  </select>
                              </div>

                              <div class="form-group" style="margin: 20px;">
                                  <label for="country" class="form-label">Property Damage Waiver ($3,500 Limit)</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                      <option value="australia">$99.00 Yes I would like to buy this property</option>
                                      <option value="canada">$0.00 No I dont want to buy this property</option>
                                  </select>
                              </div>

                              <div class="form-group" style="margin: 20px;">
                                  <label for="country" class="form-label">Tire Protection</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                      <option value="australia">$99.00 Yes I would like to buy this property</option>
                                      <option value="canada">$0.00 No I dont want to buy this property</option>
                                  </select>
                              </div>

                              <div class="form-group" style="margin: 20px;">
                                  <label for="country" class="form-label">Mechanical Break Down Insurance</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                      <option value="australia">$99.00 Yes I would like to buy this property</option>
                                      <option value="canada">$0.00 No I dont want to buy this property</option>
                                      <option value="USA">$0.00 Free I would like to include breakdown coverage at no cost</option>
                                  </select>
                              </div>

                              <div class="form-group" style="margin: 20px;">
                                  <label for="country" class="form-label">Prepaid Gas Credit</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                      <option value="australia">$99.00 Yes I would like to buy this property</option>
                                      <option value="canada">$0.00 No I dont want to buy this property</option>
                                  </select>
                              </div>

                              <div class="form-group" style="margin: 20px;">
                                  <label for="country" class="form-label">Destination Packages</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                  <option value="australia">$349.00 Grand canion test rim Arizona</option>
                                  </select>
                              </div>

                              <div class="form-group" style="margin: 20px;">
                                  <label for="country" class="form-label">Strip Helicopter Tour</label>
                                  <select id="country" name="country" class="form-control selectpicker" data-live-search="true">
                                      <option value="australia">$199.00 - 1 Passenger</option>
                                      <option value="australia">$299.00 - 2 Passenger</option>
                                      <option value="australia">$349.00 - 3 Passenger</option>
                                      <option value="australia">$499.00 - 4 Passenger</option>
                                  </select>
                              </div>
                              
                              <label for="country" class="form-label" style="margin: 20px;">Please read the following agreements carefully:</label>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I am over the age of 25
<span>  <p>All drivers must be over the age of 25.

*Passengers must be at least 4' 9" or weigh more than 40lbs.</p></span></div></label>
                              </div>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I have a valid driver's license
                                  <span>  <p>All drivers must have a valid driver's license from their country of citizenship.

*International driver's must have passport present.</p></span></div></label>
                              </div>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I agree to follow all state and federal laws
<span>  <p>Please drive in a safe, responsible, and legal manner.

*Unsafe operation may result in fines/early termination of rental agreement.</p></span></div></label>
                              </div>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I accept the Unlimited Miles Policy
                                  <span>  <p>All car rentals include unlimited mileage within a 100 mile radius of pickup location.

*Driving outside the 100 mile radius service area is subject to fees.</p></span></div></label>
                              </div>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I accept the Cancellation Policy
*All cancellations are subject to a maximum 50% refund.</div></label>
                              </div>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I accept the Late Returns Policy
                                  <span>  <p>Please ensure you have adequate time for your drive back to the showroom.

*Late returns are subject to $250+proration fee.</p></span></div></label>
                              </div>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I understand that my reservation may change at any time
                                  <span>  <p>Please be aware that car accidents, breakdowns, or other disruptive events can happen at any time.

*We will always do our best to ensure you are in a car of equal or greater value when available.</p></span></div></label>
                              </div>

                              <div class="checkbox" style="margin: 20px; padding: 10px; border: 1px solid black;">
                                  <label style="display: flex; padding: 5px;"> <div><input type="checkbox" value=""></div>  <div style="padding-left: 10px;"> I accept responsibility for injuries and assume all risk
                                  <span>  <p>I hereby waive and release Royalty Exotic Cars, its owners, agents and employees from any liability and/or claim for personal injury, property damage, or death that may arise from my use of this car rental even if such cause can be associated in any way by the acts or failures to act of the Company, or any of its agents, or employees in the inspection, maintenance and/or from other customer's use of this vehicle.</p></span></div></label>
                              </div>

                              <div class="form-group" style="margin: 20px;">
                                  <label for="comment">Customer Notes</label>
                                  <textarea class="form-control" rows="5" id="comment" placeholder="Please include rental specific requests."></textarea>
                              </div>

                          </form>
                          
                          <div class="gidt-card">

                                <label for="fname" class="form-label">Gift card number:</label>
                              
                               <div class="gift" style="display: flex;">
                               
                                    <div class="form-group" style="padding: 5px;">

                                        <input class="form-control" type="text" id="fname" name="firstname" placeholder="As it appears on Driver's license">

                                    </div>

                                    <div class="btnfr" style="padding: 5px;">

                                        <button type="button" class="btn btn-success">Apply</button>

                                    </div>

                                    <div class="btnfr" style="padding: 5px;">

                                        <button type="button" class="btn btn-success">Cancel</button>

                                    </div>

                               </div>

                                <div class="alerttext" style="display: flex; border: 1px solid black; border-radius: 10px; padding: 3px; height: 30px; width: 270px;">

                                    <img src="images/lock-solid.svg" alt="lock-icon" style="height: 12px; width: 13px; margin: 5px;">

                                    <p>Secured with 2048-bit encryption</p>

                                </div>

                          </div>

                      </div>
                  </main>
              </div>

          </div>
      </div>


@endsection
@section('script')

    <script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

@endsection
