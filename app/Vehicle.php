<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    public function category(){
        return $this->belongsTo('App\Model\VehicleCategory','category_id');
    }

    public function subcategory(){
        return $this->belongsTo('App\Model\VehicleCategory','sub_category_id');
    }

    public function brand(){
        return $this->belongsTo('App\Model\VehicleBrand','brand_id');
    }

    public function tax(){
        return $this->belongsTo('App\Model\Taxes','tax_id');
    }
}
