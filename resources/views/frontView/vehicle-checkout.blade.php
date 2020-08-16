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
        background-color: #f07f13;
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

</style>
<link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')

    @php
        $payment_method = \App\Model\PaymentMethod::get();

    @endphp
<div class="rental__hero">

    <div class="container">
    	@include('frontView.partials.vehicle-checkout')


    </div>
</div>


@endsection
@section('script')

<script src="/assets/plugins/fullcalendar/fullcalendarscripts.bundle.js"></script>
<!--/ calender javascripts -->


<script>
    $('.btn-coupon-apply').on('click',function (event) {
        event.preventDefault();
        var that = $(this);
        that.button('loading');
        that.attr('disabled');
        $('#couponError').hide();
        $('#couponSuccess').hide();

        var formData = $('#CouponApplyForm').serialize();

        $.ajax({
            type: "POST",
            url: "{{ route('VehicleCouponApply') }}",
            data: {
                '_token' : "{{csrf_token()}}",
                'coupon_code' : $('#coupon_code').val(),
                'vehicle_id' : "{{$vehicle->id}}",
                'total' : $('#grand_total').val(),
            },
            success:function(data) {
                that.prop("disabled", false);
                console.log(data);
                if (data==='not_available'){
                    that.html("Apply");
                    $('#couponError').text('Entered coupon is not available now!').show();
                }else if (data.status==='voucher_error'){
                    that.html("Apply");
                    $('#couponError').text(data.message).show();
                }else{
                    that.html("Applied");

                    $('#couponSuccess').text(data.message).show();
                    window.location.reload();
                }
            },

            error: function (xhr) {

                console.log(xhr);
                that.prop("disabled", false);
                that.html("Apply");
                var errors = xhr.responseJSON.errors;
                console.log(errors);
                if ($.isEmptyObject(errors) === false) {
                    $.each(errors, function (key, value) {
                        $('#couponError')
                            .text(value).show();
                    });


                }
            },

        });



    });
</script>
@endsection
