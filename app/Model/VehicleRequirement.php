<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VehicleRequirement extends Model
{
    //

    public function category(){
        return $this->belongsTo('App\Model\VehicleCategory','category_id');
    }
}
