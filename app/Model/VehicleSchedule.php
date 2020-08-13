<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VehicleSchedule extends Model
{
    //

    public function vehicle(){
        return $this->belongsTo('App\Model\Vehicle','vehicle_id');
    }
}
