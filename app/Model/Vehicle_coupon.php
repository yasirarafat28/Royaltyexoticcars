<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle_coupon extends Model
{
    protected $table='vehicle_coupons';

    public static function CheckCouponDiscountAmount($vehicle_id,$code,$TotalCarted = 0){
        $VoucherDiscount = 0;
        $finalDiscount = 0;

        $dt = date('Y-m-d');
        $item = Vehicle::find($vehicle_id);
        if (!$item){
            return 0;
        }

        $voucher_data = Vehicle_coupon::whereRaw('"' . $dt . '" between `start_at` and `end_at`')->where('code', $code)->first();
        if ($voucher_data){

            if ($voucher_data->min_required_amount){
                if ($TotalCarted>=$voucher_data->min_required_amount){
                    if ($voucher_data->discount_type=='flat'){
                        $VoucherDiscount = $voucher_data->discount;
                    }else{
                        $VoucherDiscount = $TotalCarted*($voucher_data->discount/100);
                    }
                }
            }else{
                if ($voucher_data->discount_type=='flat'){
                    $VoucherDiscount = $voucher_data->discount;
                }else{
                    $VoucherDiscount = $TotalCarted*($voucher_data->discount/100);
                }
            }

            if ($voucher_data->max_discount_amount){
                if ($voucher_data->max_discount_amount<$VoucherDiscount){
                    $finalDiscount = $voucher_data->max_discount_amount;
                }else{
                    $finalDiscount = $VoucherDiscount;
                }

            }else{
                $finalDiscount = $VoucherDiscount;
            }
        }

        return $finalDiscount;

    }
}
