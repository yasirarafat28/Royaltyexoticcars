<div class="card checkout-card">

    <header class="card-header">
        <div class="pull-right">
            <!-- ngIf: lightframe.isLightframe() || backUrl -->
            <div class="ben-flyout-wrap" ng-if="lightframe.isLightframe() || backUrl">
                <a class="btn btn-dark" href="/vehicle-booking/{{base64_encode($vehicle->id)}}">

                    <span class="visually-hidden"> Choose a different schedule</span>
                </a>
            </div>
        </div>
        <div class="pull-left">
            <button class="btn btn-outline-info" type="button" ng-toggle="secureFlyout"
                    ng-toggle-group="ben-flyouts" ng-toggle-group-closeable="" ng-toggle-auto-close=""
                    aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" id="icon-svg-lock"
                     class="icon-svg-lock" width="11" height="14" viewBox="0 0 11.02 14" ng-svg="icon-svg-lock">
                    <path d="M7.66,3.88a2.15,2.15,0,0,0-4.3,0v2h4.3Z" style="fill:none"></path>
                    <path
                        d="M9.39,5.85v-2a3.88,3.88,0,0,0-7.76,0v2A1.72,1.72,0,0,0,0,7.56v4.73A1.72,1.72,0,0,0,1.71,14h7.6A1.72,1.72,0,0,0,11,12.29V7.56A1.71,1.71,0,0,0,9.39,5.85Zm-6-2a2.15,2.15,0,0,1,4.3,0v2H3.36Z">
                    </path>
                </svg>
                Secured
            </button>
        </div>
    </header>
    <main class="card-body booking">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-12 checkout-header mb-5">
                    <h2 class="home__h2 text-info">You're Booking :</h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="mr-5">
                            <div class="thumbnail">
                                <img class="thumbimg"
                                     src="{{url($vehicle->feature_image??'')}}"
                                     width="150px">
                            </div>
                        </div>
                        <div>
                            <h3 class="home__h2">{{$vehicle->name}} - {{ucfirst($schedule->color)}}</h3>
                            {{date("l, F d Y",strtotime($date))}} @ {{date("h:ia",strtotime($schedule->start_time))}}
                        </div>

                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="input-group">
                        <select name="rental_type" id="rental_type" class="form-control no-appearance booking-option">
                            <option value="">Select an Option</option>
                            @if($schedule->four_hour=='yes' && $schedule->vehicle->four_hour=='yes')
                                <option value="four_hour" data-cost="{{$vehicle->four_hour_discount?$vehicle->four_hour_discount:$vehicle->four_hour_price}}">4Hrs Rental</option>
                            @endif
                            @if($schedule->six_hour=='yes' && $schedule->vehicle->six_hour=='yes')
                                <option value="six_hour" data-cost="{{$vehicle->six_hour_discount?$vehicle->six_hour_discount:$vehicle->six_hour_price}}" >6Hrs Rental</option>
                            @endif
                            @if($schedule->eight_hour=='yes' && $schedule->vehicle->eight_hour=='yes')
                                <option value="eight_hour" data-cost="{{$vehicle->eight_hour_discount?$vehicle->eight_hour_discount:$vehicle->eight_hour_price}}" >8Hrs Rental</option>
                            @endif
                            @if($schedule->twelve_hour=='yes' && $schedule->vehicle->twelve_hour=='yes')
                                <option value="twelve_hour" data-cost="{{$vehicle->twelve_hour_discount?$vehicle->twelve_hour_discount:$vehicle->twelve_hour_price}}" >12Hrs Rental</option>
                            @endif
                            @if($schedule->full_day=='yes' && $schedule->vehicle->full_day=='yes')
                                <option value="full_day" data-cost="{{$vehicle->full_day_discount?$vehicle->full_day_discount:$vehicle->full_day_price}}">24Hrs Rental</option>
                            @endif
                        </select>
                        <div class="input-group-append">
                            <span class="input-group-text">$  &nbsp;<span id="rental-cost-append"> 0.00</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container online-booking-container" id="online-booking-container" style="display: none;">
            <h2 class="text-center text-success"><strong>Online Booking Agreement</strong></h2>
            <form action="{{route('checkoutstore',$vehicle->id)}}" id="checkout-form" method="POST">
                {{csrf_field()}}

                <input type="hidden" name="rental_cost" id="rental_cost">

                <input type="hidden" name="reservation_for" id="reservation_for" value="four_hour">
                <input type="hidden" name="discount" id="discount_total" value="0">
                <input type="hidden" name="sub_total" id="sub_total" value="0">
                <input type="hidden" name="grand_total" id="grand_total" value="0">
                <input type="hidden" name="tax_total" id="tax_total" value="0">
                <input type="hidden" name="vehicle_id" id="vehicle_id" value="{{$vehicle->id}}">
                <input type="hidden" name="reservation_time" id="reservation_time" value="{{date('Y-m-d H:i:s',strtotime($date.' '.$schedule->start_time))}}">
                <input type="hidden" name="vehicle_id" id="vehicle_id" value="{{$vehicle->id}}">
                <input type="hidden" name="schedule_id" id="vehicle_id" value="{{$schedule->id}}">
                <input type="hidden" name="payment_method" value="stripe">

                <div class="form-group">

                    <label for="fname" class="form-label">Primary Driver's Full Name:</label>
                    <input class="form-control" type="text" id="fname" name="primary_driver_name"
                           placeholder="As it appears on Driver's license" required>

                    <small id="passwordHelpBlock" class="form-text text-muted">
                        *It is required that the name of your booking matches your Identification Card and Payment Card at time of check-in.
                    </small>

                </div>
                <div class="form-group">


                    <label for="lname" class="form-label">Additional Driver's Full Name:</label>
                    <input type="text" id="lname" name="additional_driver_name" class="form-control"
                           placeholder="As it appears on Driver's license">

                    <small id="passwordHelpBlock" class="form-text text-muted">
                        *Rentals are limited to 2 drivers.
                    </small>
                </div>
                <div class="form-group">
                    <label for="country" class="form-label">Country of Residence</label>
                    <select id="country" name="country" class="form-control selectpicker"
                            data-live-search="true" required>
                        <option value="usa">USA</option>
                        <option value="international"> International & Canada </option>
                    </select>
                </div>
                <div id="upgrade-items">
                    @include('frontView.partials.vehicle-checkout-item-upgradation')
                </div>

                <label for="country" class="form-label" style="margin: 20px;">Please read the following
                    agreements carefully:</label>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" value="" name="age_agreement" required></div>
                        <div style="padding-left: 10px;"> I am over the age of 25
                            <span>
                                        <p style="font-weight: normal; font-size: 90%;">All drivers must be over the age of 25.

                                            *Passengers must be at least 4' 9" or weigh more than 40lbs.</p>
                                    </span></div>
                    </label>
                </div>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" value="" name="licence_agreement" required></div>
                        <div style="padding-left: 10px;"> I have a valid driver's license
                            <span>
                                        <p style="font-weight: normal; font-size: 90%;">All drivers must have a valid driver's license from their country of
                                            citizenship.

                                            *International driver's must have passport present.</p>
                                    </span></div>
                    </label>
                </div>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" value="" name="law_agreement" required></div>
                        <div style="padding-left: 10px;"> I agree to follow all state and federal laws
                            <span>
                                        <p style="font-weight: normal; font-size: 90%;">Please drive in a safe, responsible, and legal manner.

                                            *Unsafe operation may result in fines/early termination of rental agreement.
                                        </p>
                                    </span></div>
                    </label>
                </div>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" value="" name="mile_policy_agreement" required></div>
                        <div style="padding-left: 10px;"> I accept the Unlimited Miles Policy
                            <span>
                                        <p style="font-weight: normal; font-size: 90%;">All car rentals include unlimited mileage within a 100 mile radius of pickup
                                            location.

                                            *Driving outside the 100 mile radius service area is subject to fees.</p>
                                    </span></div>
                    </label>
                </div>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" value="" name="cancellation_agreement" required></div>
                        <div style="padding-left: 10px;"> I accept the Cancellation Policy
                            *All cancellations are subject to a maximum 50% refund.</div>
                    </label>
                </div>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" value="" name="late_return_agreement" required></div>
                        <div style="padding-left: 10px;"> I accept the Late Returns Policy
                            <span>
                                        <p  style="font-weight: normal; font-size: 90%;">Please ensure you have adequate time for your drive back to the showroom.

                                            *Late returns are subject to $250+proration fee.</p>
                                    </span></div>
                    </label>
                </div>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" value="" name="reservation_change_agreement" required></div>
                        <div style="padding-left: 10px;"> I understand that my reservation may change at any
                            time
                            <span>
                                        <p style="font-weight: normal; font-size: 90%;">Please be aware that car accidents, breakdowns, or other disruptive events
                                            can happen at any time.

                                            *We will always do our best to ensure you are in a car of equal or greater
                                            value when available.</p>
                                    </span></div>
                    </label>
                </div>

                <div class="checkbox checkbox-with-content" >
                    <label style="display: flex; padding: 5px;">
                        <div><input type="checkbox" name="risk_agreement" value="" required></div>
                        <div style="padding-left: 10px;"> I accept responsibility for injuries and assume all
                            risk
                            <span>
                                        <p style="font-weight: normal; font-size: 90%;">I hereby waive and release Royalty Exotic Cars, its owners, agents and
                                            employees from any liability and/or claim for personal injury, property
                                            damage, or death that may arise from my use of this car rental even if such
                                            cause can be associated in any way by the acts or failures to act of the
                                            Company, or any of its agents, or employees in the inspection, maintenance
                                            and/or from other customer's use of this vehicle.</p>
                                    </span></div>
                    </label>
                </div>

                <div class="form-group">
                    <label for="comment">Customer Notes</label>
                    <textarea class="form-control" rows="5" id="comment"
                              placeholder="Please include rental specific requests." name="note"></textarea>
                </div>

                <div class="middle-container row" style="padding: 5px;border: 1px solid #ddd; border-radius: 10px; margin: 1px; justify-content: space-between;">

                    <div class="gidt-card col-md-6">

                        <label for="fname" class="form-label">Gift card number:</label>

                        <div class="gift" style="display: flex;">
                                <div class="form-group">

                                    <input class="form-control" type="text" name="coupon_code" id="coupon_code"
                                           placeholder="Enter your Gift card number here">

                                </div>

                                <div class="btnfr ml-2">

                                    <button type="button" id="btn-coupon-apply" class="btn btn-success">Apply</button>

                                </div>

                        </div>


                        <div class="alerts">

                            <div class="alert alert-danger col-md-12" style="display: none;" id="couponError"></div>
                            <div class="alert alert-primary col-md-12" style="display: none;" id="couponSuccess"></div>
                        </div>

                    </div>

                    <div class="cashf col-md-6">

                        <div class="subtot" style="display: flex; justify-content: space-between;">

                            <p>Subtotal</p>
                            <p>$ <span id="subtotal-text">0.00</span></p>

                        </div>

                        <div class="subtot" style="display: flex; justify-content: space-between;">

                            <p>Discount</p>
                            <p>$ <span id="discount-text">0.00</span></p>

                        </div>

                        <div class="taxest" style="display: flex; justify-content: space-between;">

                            <p>Taxes & Fees</p>
                            <p>$ <span id="tax-text">0.00</span></p>

                        </div>

                        <div class="tot" style="display: flex; color: blue; justify-content: space-between;">

                            <p style="padding: 5px;">Total</p>
                            <h3>$ <span id="total-text">0.00</span></h3>

                        </div>

                    </div>

                </div>

                <div class="row" style="display: flex; justify-content: space-between; margin-top: 20px;">

                    <div class="col-sm-6">

                        <p class="text-uppercase"><i class="fa fa-user icon"></i> contact</p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                            <i class="fa fa-user icon"></i>
                                    </span>
                            </div>

                            <input class="form-control" type="text" placeholder="Full Name" name="name" required>
                        </div>
                        <div class="errorTxt"></div>

                        <div class="input-group" >
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                            <i class="fa fa-phone icon"></i>
                                    </span>
                            </div>

                            <input class="form-control" type="text" placeholder="Phone number" name="phone" required>
                        </div>
                        <div class="errorTxt"></div>

                        <div class="input-group" >
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope icon"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Email" name="email" required>
                        </div>
                        <div class="errorTxt"></div>

                        <div class="input-group" >
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-globe icon"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Address" name="address" required>
                        </div>
                        <div class="errorTxt"></div>

                    </div>


                    <div class="col-sm-6">
                        <div class="logodiv" style="display: flex;">

                            <img src="/images/lock-solid.svg" alt="lock-icon"
                                 style="height: 12px; width: 13px; margin: 5px;">

                            <p class="text-uppercase">Payment Method</p>

                        </div>

                        <div class="payment-box">
                            @if($payment_method[0]->status=='1' && false)
                                <div class="check-payment">
                                    <div class="c-box">
                                        <input type="radio" required name="payment_method" checked id="payment_method_1" value="paypal" onclick="orderpaymentOption(this.value)">
                                    </div>
                                    <div class="payment-text">
                                        <div class="pay">
                                            <a href="#"><img src="{{asset('Ecommerce/images/pay-1.jpg')}}"></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($payment_method[1]->status=='1')
                                <div class="check-payment">
                                    <div class="c-box">
                                        <input type="radio" name="payment_method" checked required id="payment_method_2" value="stripe" onclick="orderpaymentOption(this.value)">
                                    </div>
                                    <div class="payment-text">
                                        <div class="pay">
                                            <!--<a href="#"><img src="{{asset('Ecommerce/images/pay-2.jpg')}}"></a>
                                            <a href="#"><img src="{{asset('Ecommerce/images/pay-3.jpg')}}"></a>
                                            <a href="#"><img src="{{asset('Ecommerce/images/pay-4.jpg')}}"></a>-->
                                            <a href="#"><img src="/stripe_credit-card-logos.png"></a>
                                        </div>
                                    </div>
                                </div>

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
                            @endif
                        </div>
                    </div>

                </div>

                <!--<div class="form-group" style="margin-top: 20px;">
                    <p style="text-align: center;">
                        <button type="submit" class="button " id="paypal-submit"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button>
                        <a href="#"  class="button text-white" onclick="event.preventDefault();$('.stripe-button-el').click();" style="display: block;"  id="stripe-submit"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</a>
                    </p>
                </div>-->
                <br>
                <div class="form-group col-md-6 offset-md-3">
                    <a href="#"  class="button text-white" style="display: block;"  id="stripe-submit"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</a>

                </div>

            </form>



        </div>


        <div class="error-error" id="online-booking-error-container" style="padding: 100px 10px; display: block;">
            <h2>Please select a reservation package.</h2>
            <div>Please call us at <a href="tel:{{setting()->phone}}">{{setting()->phone}}</a>.</div>
        </div>
    </main>
</div>

<style>

    .stripe-button-el{
        visibility: hidden !important;
    }

</style>
