<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleCheckout extends Model
{
    //


    public function stats()
    {
        return $this->hasMany('App\OrderStatus','order_id');

    }

    

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle','vehicle_id');

    }
}
