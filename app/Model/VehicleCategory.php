<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VehicleCategory extends Model
{


    public function parentcategory(){
        return $this->belongsTo('App\Model\VehicleCategory','parent_category_id');
    }

    public function vehicles(){
        return $this->hasMany('App\Model\Vehicle','category_id');
    }

    public function topvehicles(){
        return $this->hasMany('App\Model\Vehicle','category_id')->limit(5);
    }

}
