<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VehicleCategory extends Model
{


    public function parentcategory(){
        return $this->belongsTo('App\Model\VehicleCategory','parent_category_id');
    }

}
