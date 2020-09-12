<div class="card checkout-card">

    <header class="card-header">
        <div class="pull-right">
        </div>
        <div class="pull-left">

            <a class="btn btn-dark" href="/vehicle-booking/{{base64_encode($vehicle->id)}}">

                <span class="visually-hidden"> Choose a different schedule</span>
            </a>
        </div>
    </header>
    <main class="card-body booking">
        <div class="row">

            <div class="col-sm-8 checkout-main-section">


                <div class="p-3 mb-3 checkout-info">

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


                        <div class="form-group" style="display: {{isset($_GET['reservation_for'])?'block':'block'}}">
                            <label for="fname" class="form-label">Reservation for

                                <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                 data-original-title="It is required that the name of your booking matches your Identification Card and Payment Card at time of check-in."></i> :
                                </label>
                            <div class="input-group">
                                <select required name="rental_type" id="rental_type" class="form-control no-appearance booking-option">
                                    <option value="">Select an Option</option>
                                    @if($schedule->four_hour=='yes' && $schedule->vehicle->four_hour=='yes')
                                        <option {{isset($_GET['reservation_for']) && $_GET['reservation_for']=='four_hour'?'selected':''}} value="four_hour" data-cost="{{$vehicle->four_hour_discount?$vehicle->four_hour_discount:$vehicle->four_hour_price}}">4Hrs Rental</option>
                                    @endif
                                    @if($schedule->six_hour=='yes' && $schedule->vehicle->six_hour=='yes')
                                        <option {{isset($_GET['reservation_for']) && $_GET['reservation_for']=='six_hour'?'selected':''}} value="six_hour" data-cost="{{$vehicle->six_hour_discount?$vehicle->six_hour_discount:$vehicle->six_hour_price}}" >6Hrs Rental</option>
                                    @endif
                                    @if($schedule->eight_hour=='yes' && $schedule->vehicle->eight_hour=='yes')
                                        <option {{isset($_GET['reservation_for']) && $_GET['reservation_for']=='eight_hour'?'selected':''}} value="eight_hour" data-cost="{{$vehicle->eight_hour_discount?$vehicle->eight_hour_discount:$vehicle->eight_hour_price}}" >8Hrs Rental</option>
                                    @endif
                                    @if($schedule->twelve_hour=='yes' && $schedule->vehicle->twelve_hour=='yes')
                                        <option {{isset($_GET['reservation_for']) && $_GET['reservation_for']=='twelve_hour'?'selected':''}} value="twelve_hour" data-cost="{{$vehicle->twelve_hour_discount?$vehicle->twelve_hour_discount:$vehicle->twelve_hour_price}}" >12Hrs Rental</option>
                                    @endif
                                    @if($schedule->full_day=='yes' && $schedule->vehicle->full_day=='yes')
                                        <option {{isset($_GET['reservation_for']) && $_GET['reservation_for']=='full_day'?'selected':''}} value="full_day" data-cost="{{$vehicle->full_day_discount?$vehicle->full_day_discount:$vehicle->full_day_price}}">24Hrs Rental</option>
                                    @endif
                                </select>
                                <div class="input-group-append">
                                    <span class="input-group-text">$  &nbsp;<span id="rental-cost-append"> 0.00</span></span>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">

                            <label for="fname" class="form-label">Primary Driver's Full Name:
                                <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                 data-original-title="It is required that the name of your booking matches your Identification Card and Payment Card at time of check-in."></i>
                            </label>
                            <input class="form-control" type="text" id="fname" name="primary_driver_name"
                                   placeholder="As it appears on Driver's license" required>


                        </div>
                        <div class="form-group">


                            <label for="lname" class="form-label">Additional Driver's Full Name: <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                data-original-title="Rentals are limited to 2 drivers."></i></label>
                            <input type="text" id="lname" name="additional_driver_name" class="form-control"
                                   placeholder="As it appears on Driver's license">

                        </div>
                        <div class="form-group">
                            <label for="country" class="form-label">Country of Residence</label>
                            <select id="country" name="country" class="form-control selectpicker"
                                    data-live-search="true" required>

                                @foreach (App\Model\Country::get() as $country)
                                    <option {{$country->iso3=='USA'?'selected':''}} value="{{$country->iso3??'USA'}}">{{ucfirst($country->nicename??'USA')}}</option>

                                @endforeach
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


                                    <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                     data-original-title="All drivers must be over the age of 25.

                                     *Passengers must be at least 4' 9inch <br> or weigh more than 40lbs."></i>

                                </div>
                            </label>
                        </div>

                        <div class="checkbox checkbox-with-content" >
                            <label style="display: flex; padding: 5px;">
                                <div><input type="checkbox" value="" name="licence_agreement" required></div>
                                <div style="padding-left: 10px;"> I have a valid driver's license

                                    <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                     data-original-title="All drivers must have a valid driver's license from their country of
                                     citizenship.
                                     <br>

                                     *International driver's must have passport present."></i>

                                </div>
                            </label>
                        </div>

                        <div class="checkbox checkbox-with-content" >
                            <label style="display: flex; padding: 5px;">
                                <div><input type="checkbox" value="" name="law_agreement" required></div>
                                <div style="padding-left: 10px;"> I agree to follow all state and federal laws

                                    <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                     data-original-title="Please drive in a safe, responsible, and legal manner.
                                     <br>

                                     *Unsafe operation may result in fines/early termination of rental agreement."></i>

                                </div>
                            </label>
                        </div>

                        <div class="checkbox checkbox-with-content" >
                            <label style="display: flex; padding: 5px;">
                                <div><input type="checkbox" value="" name="mile_policy_agreement" required></div>
                                <div style="padding-left: 10px;"> I accept the Unlimited Miles Policy


                                    <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                     data-original-title="All car rentals include unlimited mileage within a 100 mile radius of pickup
                                     location.
                                     <br>

                                     *Driving outside the 100 mile radius service area is subject to fees."></i>

                                </div>
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

                                    <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                     data-original-title="Please ensure you have adequate time for your drive back to the showroom.

                                     <br>
                                     *Late returns are subject to $250+proration fee."></i>

                                </div>
                            </label>
                        </div>

                        <div class="checkbox checkbox-with-content" >
                            <label style="display: flex; padding: 5px;">
                                <div><input type="checkbox" value="" name="reservation_change_agreement" required></div>
                                <div style="padding-left: 10px;"> I understand that my reservation may change at any
                                    time

                                    <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top"
                                     data-original-title="Please be aware that car accidents, breakdowns, or other disruptive events
                                     can happen at any time.

                                     <br>
                                     *We will always do our best to ensure you are in a car of equal or greater
                                     value when available."></i>

                                </div>
                            </label>
                        </div>

                        <div class="checkbox checkbox-with-content col-md-12" >
                            <label style="display: flex; padding: 5px;">
                                <div><input type="checkbox" name="risk_agreement" value="" required></div>
                                <div style="padding-left: 10px;" > I accept responsibility for injuries and assume all
                                    risk

                                    <i class="info-tooltip fa fa-question-circle  text-danger" data-toggle="tooltip" data-animation="true" data-placement="top" data-original-title="I hereby waive and release Royalty Exotic Cars, its owners, agents and
                                    employees from any liability and/or claim for personal injury, property
                                    damage, or death that may arise from my use of this car rental even if such
                                    cause can be associated in any way by the acts or failures to act of the
                                    Company, or any of its agents, or employees in the inspection, maintenance
                                    and/or from other customer's use of this vehicle."></i>
                                </div>
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="comment">Customer Notes</label>
                            <textarea class="form-control" rows="5" id="comment"
                                      placeholder="Please include rental specific requests." name="note"></textarea>
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

                    </form>
                </div>

            </div>

            <div class="col-sm-4 checkout-sidebar">
                <div class="card">
                    <!--<div class="card-header">


                        <h2 class="home__h2 text-danger">You are booking:</h2>
                    </div>-->
                    <div class="card-body">

                        <h2 class="home__h2"><a href="/vehicle/{{base64_encode($vehicle->id)}}/{{ $vehicle->slug }}">{{ $vehicle->name }}</a></h2>

                        <div class="single-car-thumb">
                            <img src="{{url($vehicle->feature_image??'')}}"  onerror="this.src='/no-image.png';">
                        </div>


                        <div class="single-car-info">

                            <div class="rentals__header">
                                <img src="{{url($vehicle->brand->photo??'')}}" width="50px" height="50px" alt="{{$vehicle->brand->name??'}}" class="rentals__logo" title="{{$vehicle->brand->name??'}}">

                                <div class="trending__embed w-embed">
                                    <div class="rentals__label">{{ $vehicle->category->name??'' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>



                <div class="card">
                    <div class="card-header">
                        <h2 class="home__h2 text-danger">Booking Information</h2>
                    </div>
                    <div class="card-body p-0">

                        <table class="table booking-info-table">
                            <tbody>
                            <tr>
                                <td class="title text-muted" style="width: 30% !important;">Pick Up</td>
                                <!--<td>{{date("l, F d Y @ h:iA",strtotime($pickup_timestamp))}}</td>-->
                                <td>{{date("d M, Y h:iA",strtotime($pickup_timestamp))}}</td>
                            </tr>
                            <tr>
                                <td class="title text-muted">Drop Off</td>
                                <td class="dropoff-time-text">{{$dropoff_time}}</td>
                            </tr>
                            <tr>
                                <td class="title text-muted">Rent for</td>
                                <td class="rent-for-text">
                                    @if(isset($_GET['reservation_for']) && $_GET['reservation_for']=='four_hour')
                                        4 Hour Offer
                                    @elseif(isset($_GET['reservation_for']) && $_GET['reservation_for']=='six_hour')
                                        6 Hour Offer
                                    @elseif(isset($_GET['reservation_for']) && $_GET['reservation_for']=='eight_hour')
                                        8 Hour Offer
                                    @elseif(isset($_GET['reservation_for']) && $_GET['reservation_for']=='twelve_hour')
                                        12 Hour Offer
                                    @elseif(isset($_GET['reservation_for']) && $_GET['reservation_for']=='full_day')
                                        24 Hour Offer
                                    @endif

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>



                <div class="card">
                    <div class="card-header">
                        <h2 class="home__h2 text-danger">Gift Card</h2>
                    </div>
                    <div class="card-body">

                        <div class="gidt-card">

                            <label for="fname" class="form-label">Gift card number:</label>

                            <div class="gift" style="display: flex;">
                                <div class="input-group">

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
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h2 class="home__h2 text-danger">Pay Now</h2>
                    </div>
                    <div class="card-body p-0">

                        <table class="table payment-info-table">
                            <tbody>
                            <tr>
                                <td class="title text-muted">Subtotal</td>
                                <td>$ <span id="subtotal-text">0.00</span></td>
                            </tr>
                            <tr>
                                <td class="title text-muted">Taxes</td>
                                <td>$ <span id="tax-text">0.00</span></td>
                            </tr>
                            <tr>
                                <td class="title text-muted">Discount</td>
                                <td>$ <span id="discount-text">0.00</span></td>
                            </tr>
                            <tr>
                                <td class="title text-muted">Grand Total</td>
                                <td>$ <span id="total-text">0.00</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
            <br>
            <br>


            <a href="#"  class="button text-white col-sm-6 offset-sm-3 mt-5" style="display: block;"  id="stripe-submit"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</a>

        </div>
    </main>
</div>

<style>

    .stripe-button-el{
        visibility: hidden !important;
    }

</style>
