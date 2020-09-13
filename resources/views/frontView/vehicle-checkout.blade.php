@extends('layouts.front')
@section('style')

<style>
    .booking .banner {
        padding: 4rem !important;
    }


    .payment-box {
        background-color: #f5f5f5;
        padding: 10px 20px;
        padding-top: 30px;
    }

    .check-order {
        margin-bottom: 30px;
    }

    .payment-text h1 {
        font-family: 'open sans';
        font-size: 20px;
        display: inline-block;
    }

    .payment-text {
        display: inline-block;
        padding-left: 18px;
        width: 94%;
    }

    .check-payment input {
        -webkit-appearance: none;
        border: 1px solid;
        width: 18px;
        height: 18px;
        text-align: center;
        position: relative;
        border-radius: 50%;
        top: 2px;
        cursor: pointer;
        visibility: visible;
    }

    .check-payment {
        margin-bottom: 35px;
    }

    .c-box {
        display: inline-block;
        width: 4%;
        vertical-align: middle;
    }

    .payment-text .pay {
        margin: 0;
        border: 0;
        padding: 0;
    }

    .check-payment input:checked:after {
        content: "";
        width: 10px;
        height: 10px;
        background-color: #000;
        position: absolute;
        top: 3px;
        left: 3px;
        border-radius: 50%;
        border-radius: 50%;
    }

    input:focus {
        outline: 0;
    }

    .place-btn a {
        font-family: 'open sans';
        color: #fff;
        font-weight: 700;
        font-size: 18px;
    }

    .payment-text p {
        font-family: "open sans";
        color: #7f7f7f;
        font-size: 16px;
        margin-top: 10px;
        margin-bottom: 0;
    }

    .place-btn {
        background-color: red;
        text-align: center;
        margin-top: 30px;
    }

    .payment-text .pay{
        display: flex;
    }

    .payment-text .pay a{
        margin: 1px 5px;
    }
    .payment-text{
        vertical-align: middle; !important;
    }


    @media screen and (max-width: 992px) {
        .checkout-container{
            max-width: unset;
        }
    }

    .checkout-sidebar .card{
        border-radius: .5rem !important;
    }
    .checkout-sidebar .card-header{
        background-color: transparent;
    }
    .payment-info-table td{
        width: 50%;
        font-size: 18px;
    }
    .booking-info-table td{
        font-size: 14px !important;
    }
    .checkout-sidebar .card-body td.title{
        font-weight: bold;
        text-align: right;
    }

    .booking{
        background-color: #ddd;
    }
    .booking .checkout-info{
        border: 1px solid #ddd;
        border-radius: 9px;
        background-color: #fff;
    }

</style>
<link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')

    @php
        $payment_method = \App\Model\PaymentMethod::get();



        $pickup_timestamp = date('Y-m-d',strtotime($date)).' '.date("H:i:s",strtotime($schedule->start_time));
        $dropoff_time = false;
        if (isset($_GET['reservation_for']) && $_GET['reservation_for']=='four_hour') {
            $dropoff_time = date('d M, Y h:iA',strtotime($pickup_timestamp." + 4 hours"));
        }elseif (isset($_GET['reservation_for']) && $_GET['reservation_for']=='six_hour') {
            $dropoff_time = date('d M, Y h:iA',strtotime($pickup_timestamp." + 6 hours"));

        }elseif (isset($_GET['reservation_for']) && $_GET['reservation_for']=='eight_hour') {
            $dropoff_time = date('d M, Y h:iA',strtotime($pickup_timestamp." + 8 hours"));
        }
        elseif (isset($_GET['reservation_for']) && $_GET['reservation_for']=='twelve_hour') {
            $dropoff_time = date('d M, Y h:iA',strtotime($pickup_timestamp." + 12 hours"));
        }
        elseif (isset($_GET['reservation_for']) && $_GET['reservation_for']=='full_day') {
            $dropoff_time = date('d M, Y h:iA',strtotime($pickup_timestamp." + 24 hours"));
        }

    @endphp
<div class="rental__hero">

    <div class=" container-md checkout-container extra-top-margin">
    	@include('frontView.partials.vehicle-checkout')


    </div>
</div>


@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){

            $('#reservation_for').val($(this).val());
            let cost = $('#rental_type option:selected').data('cost');
            if (isNaN(cost)){
                $('#online-booking-container').hide();
                $('#online-booking-error-container').show();
                $('#rental-cost-append').text('0.00');
                $('#rental_cost').val(0);
            }else{
                $('#online-booking-container').show();
                $('#online-booking-error-container').hide();

                $('#rental-cost-append').text(parseFloat(cost).toFixed(2));
                $('#rental_cost').val(cost);
            }

            calculation();

        });

        $('#stripe-submit').on('click',function (event) {
            event.preventDefault();
            console.log('test');
            let form = $( "#checkout-form" );
            form.validate({
                rules: {},
                messages: {},
                errorElement : 'label',
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        if (element.attr("type") === "checkbox" ) {

                            error.insertAfter($(element).closest('label'));
                        }else{
                            error.insertAfter($(element).closest('div'));
                        }
                    }
                }
            });
            //console.log(form.valid());
            if (form.valid()){
                $(this).text('Processing...').attr('disabled','disabled');
                $('.stripe-button-el').click();
            }
        });

        function orderpaymentOption(option){

            if (option==='paypal')
            {
                $('#paypal-submit').show();
                $('#stripe-submit').hide();
            }else{
                $('#paypal-submit').hide();
                $('#stripe-submit').show();
            }

        }

        $('#rental_type').on('change',function (event) {
            event.preventDefault();
            let reservation_for = $(this).val();
            $('#reservation_for').val(reservation_for);
            let cost = $('#rental_type option:selected').data('cost');
            if (isNaN(cost)){
                $('#online-booking-container').hide();
                $('#online-booking-error-container').show();
                $('#rental-cost-append').text('0.00');
                $('#rental_cost').val(0);
            }else{


                if (reservation_for==='four_hour'){
                    let dropoff_time = add_hours(new Date('{{date("Y-m-d H:i:s",strtotime($pickup_timestamp))}}'), 4);
                    $('.dropoff-time-text').text(moment(dropoff_time).format('DD MMM, YYYY hh:mmA'));
                    $('.rent-for-text').text('4 Hours Offer');
                }else if (reservation_for==='six_hour'){
                    let dropoff_time = add_hours(new Date('{{date("Y-m-d H:i:s",strtotime($pickup_timestamp))}}'), 6);
                    $('.dropoff-time-text').text(moment(dropoff_time).format('DD MMM, YYYY hh:mmA'));
                    $('.rent-for-text').text('6 Hours Offer');
                }else if (reservation_for==='eight_hour'){
                    let dropoff_time = add_hours(new Date('{{date("Y-m-d H:i:s",strtotime($pickup_timestamp))}}'), 8);
                    $('.dropoff-time-text').text(moment(dropoff_time).format('DD MMM, YYYY hh:mmA'));
                    $('.rent-for-text').text('8 Hours Offer');
                }else if (reservation_for==='twelve_hour'){
                    let dropoff_time = add_hours(new Date('{{date("Y-m-d H:i:s",strtotime($pickup_timestamp))}}'), 12);
                    $('.dropoff-time-text').text(moment(dropoff_time).format('DD MMM, YYYY hh:mmA'));
                    $('.rent-for-text').text('12 Hours Offer');
                }else if (reservation_for==='full_day'){
                    let dropoff_time = add_hours(new Date('{{date("Y-m-d H:i:s",strtotime($pickup_timestamp))}}'), 24);
                    $('.dropoff-time-text').text(moment(dropoff_time).format('DD MMM, YYYY hh:mmA'));
                    $('.rent-for-text').text('24 Hours Offer');
                }

                $('#online-booking-container').show();
                $('#online-booking-error-container').hide();

                $('#rental-cost-append').text(parseFloat(cost).toFixed(2));
                $('#rental_cost').val(cost);
            }

            calculation();
        });

        $('#country').on('change',function (event) {
            event.preventDefault();

            let type = $(this).val();
            let vehicle_id = $('#vehicle_id').val();

            $.ajax({
                url: '{{ route('getCheckoutUpgradeItems') }}',
                type: 'GET',
                data: {
                    "country": type,
                    "vehicle_id": vehicle_id,
                },
                success: function (data) {
                    $('#upgrade-items').html(data);
                },
                error: function (error) {
                    console.log(error);

                }
            });
            /*if (type==='usa'){
                $('#international_full_coverage_insurance').closest('.form-group').hide();
                $('#liability_insurance').closest('.form-group').show();
            }else if (type==='international'){
                $('#international_full_coverage_insurance').closest('.form-group').show();
                $('#liability_insurance').closest('.form-group').hide();
            }*/

        });

        $('#international_full_coverage_insurance').on('change',function (event) {
            calculation();
        });

        $('#liability_insurance').on('change',function (event) {
            calculation();
        });

        $('#property_damage_waiver').on('change',function (event) {
            calculation();
        });

        $('#tire_protection').on('change',function (event) {
            calculation();
        });

        $('#mechanical_breakdown_coverage').on('change',function (event) {
            calculation();
        });

        $('#fuel_credit').on('change',function (event) {
            calculation();
        });

        function calculation(){
            let rental_cost = parseFloat($('#rental_cost').val());

            let international_full_coverage_insurance = parseFloat($('#international_full_coverage_insurance option:selected').val()??0);
            let liability_insurance = parseFloat($('#liability_insurance option:selected').val()??0);
            let property_damage_waiver = parseFloat($('#property_damage_waiver option:selected').val()??0);
            let tire_protection = parseFloat($('#tire_protection option:selected').val()??0);
            let mechanical_breakdown_coverage = parseFloat($('#mechanical_breakdown_coverage option:selected').val()??0);
            let fuel_credit = parseFloat($('#fuel_credit option:selected').val()??0);



            let discount = parseFloat($('#discount_total').val());



            let sub_total = rental_cost + international_full_coverage_insurance
                +liability_insurance + property_damage_waiver + tire_protection + mechanical_breakdown_coverage + fuel_credit;
            let tax_rate = parseFloat("{{$vehicle->tax->rate??0}}");
            let tax = sub_total*tax_rate/100;
            let grand_total = sub_total+tax - discount;


            $('#sub_total').val(sub_total.toFixed(2));
            //$('#discount_total').text(discount.toFixed(2));
            $('#tax_total').val(tax.toFixed(2));
            $('#grand_total').val(grand_total.toFixed(2));

            if(!rental_cost){
                $('#subtotal-text').text('0.00');
                $('#discount-text').text('0.00');
                $('#tax-text').text('0.00');
                $('#total-text').text('0.00');

            }else{

                $('#subtotal-text').text(sub_total.toFixed(2));
                $('#discount-text').text(discount.toFixed(2));
                $('#tax-text').text(tax.toFixed(2));
                $('#total-text').text(grand_total.toFixed(2));
            }

        }
    </script>


    <script>
        $('#btn-coupon-apply').on('click',function (event) {
            event.preventDefault();
            var that = $(this);
            that.text('Processing...').attr('disabled');
            $('#couponError').hide();
            $('#couponSuccess').hide();

            $.ajax({
                type: "POST",
                url: "{{ route('VehicleCouponApply') }}",
                data: {
                    '_token' : "{{csrf_token()}}",
                    'code' : $('#coupon_code').val(),
                    'vehicle_id' : "{{$vehicle->id}}",
                    'total' : $('#sub_total').val(),
                },
                success:function(data) {
                    console.log(data);
                    that.prop("disabled", false);
                    if (data==='not_available'){
                        that.html("Apply");
                        $('#couponError').text('Entered coupon is not available now!').show();
                    }else if (data.status==='voucher_error'){
                        that.html("Apply");
                        $('#couponError').text(data.message).show();
                    }else{
                        that.html("Applied");

                        $('#couponSuccess').text(data.message).show();
                        //window.location.reload();
                        $('#discount_total').val(data.amount);
                        calculation();
                    }
                },

                error: function (xhr) {
                    that.prop("disabled", false);
                    that.html("Apply");
                    let errors = xhr.responseJSON.errors;
                    console.log(xhr);
                    if ($.isEmptyObject(errors) === false) {
                        $.each(errors, function (key, value) {
                            $('#couponError')
                                .text(value).show();
                        });


                    }else{

                        $('#couponError')
                            .text('Something went wrong. Please try again later!').show();
                    }
                },

            });



        });
    </script>

    <script>
        function add_hours(dt, hours) {
            return new Date(dt.getTime() + hours*60000*60);
        }

        function formatted_date(d){

            var curr_day = d.getDate();
            var curr_month = d.getMonth();
            var curr_year = d.getFullYear();

            var curr_hour = d.getHours();
            var curr_min = d.getMinutes();
            var curr_sec = d.getSeconds();

            curr_month++ ; // In js, first month is 0, not 1
            year_2d = curr_year.toString().substring(2, 4);
            return curr_day + " " + curr_month + " " + year_2d;
        }


    </script>
@endsection
