<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\LoginRequest;
use Sentinel;
use Session;
use DataTables;
use App\Model\VehicleCategory;
use App\Model\VehicleBrand;
use App\Model\Vehicle;
use App\Model\VehicleRequirement;
use Image;
use Hash;
class VehicleCategoryController extends Controller {
    public function CategoryIndex($level='l1',$parent_id=0)
    {
        //

        if ($level=='l1') {
            $level = 1;
        }elseif ($level=='l2') {
            $level = 2;
        }elseif ($level=='l3') {
            $level = 3;
        }


        if (!$parent_id){
            $categories = VehicleCategory::where('level',$level)->orderBy('id','DESC')->get();
        }
        else{
            $categories = VehicleCategory::where('level',$level)->where('parent_category_id',$parent_id)->orderBy('id','DESC')->get();
        }

        if ($level==2)
        {
            $parent_categories = VehicleCategory::where('level',$level)->orderBy('id','DESC')->get();
        }elseif ($level==3)
        {
            $parent_categories = VehicleCategory::where('level',$level)->orderBy('id','DESC')->get();
        }
        else
        {
            $parent_categories = array();
        }

        return view('admin/vehicle-categories/index',compact('categories','level','parent_categories','parent_id'));
    }
    public function CategoryStore(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);
        $category = new VehicleCategory();
        $category->name = $request->name;
        $category->priority = $request->priority;
        $category->description = $request->description;
        $category->status = $request->status;



        $category->slug = str_replace([' ','/'],'-',$request->name).'-'.uniqid();
        $category->level = $request->level;



        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = 'category_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/vehicle_category/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;

            $category->photo = $imageUrl;
        }

        if (isset($request->parent_id)) {
            $category->parent_category_id = $request->parent_id;
        }

        $category->save();

        if($request->level==1){

            $require = new VehicleRequirement();
            $require->type = $request->name;
            $require->local_age = '25';
            $require->local_driving_licence = 'United States Drivers License';
            $require->local_insurance = 'Camp/ Collision 100/300/500';
            $require->local_liability_insurance = '99';
            $require->local_property_damage_waiver = '99';
            $require->local_tire_protection = '99';
            $require->local_mechanical_breakdown_coverage = '49';
            $require->local_fuel_credit = '99';
            $require->international_age = '25';
            $require->international_driving_licence = 'International Drivers License';
            $require->international_insurance = '199 Royalty Insurance';
            $require->international_full_coverage_insurance_d1 = '99';
            $require->international_full_coverage_insurance_d2 = '199';
            $require->international_property_damage_waiver = '49';
            $require->international_tire_protection = '99';
            $require->international_mechanical_breakdown_coverage = '49';
            $require->international_fuel_credit = '49';
            $require->category_id = $category->id;
            $require->save();
        }

        return back()->withSuccess('Product Category Successfully Added!');
    }


    public function CategoryUpdate(Request $request)
    {
        //
        $id = $request->id;

        $category = VehicleCategory::find($id);
        $category->name = $request->name;
        $category->priority = $request->priority;
        $category->description = $request->description;

        //$category->slug = str_replace([' ','/'],'-',$request->name).'-'.uniqid();
        $category->status = $request->status;


        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = 'category_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/vehicle_category/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;

            $category->photo = $imageUrl;
        }

        if (isset($request->parent_id)) {
            $category->parent_category_id = $request->parent_id;
        }

        /*$category->save();
        $require = new VehicleRequirement();
        $require->type = $request->name;
        $require->category_id = $request->id;
        $require->local_age = '25';
        $require->local_driving_licence = 'United States Drivers License';
        $require->local_insurance = 'Camp/ Collision 100/300/500';
        $require->local_liability_insurance = '99';
        $require->local_property_damage_waiver = '99';
        $require->local_tire_protection = '99';
        $require->local_mechanical_breakdown_coverage = '49';
        $require->local_fuel_credit = '99';
        $require->international_age = '25';
        $require->international_driving_licence = 'International Drivers License';
        $require->international_insurance = '199 Royalty Insurance';
        $require->international_full_coverage_insurance_d1 = '99';
        $require->international_full_coverage_insurance_d2 = '199';
        $require->international_property_damage_waiver = '49';
        $require->international_tire_protection = '99';
        $require->international_mechanical_breakdown_coverage = '49';
        $require->international_fuel_credit = '49';
        $require->save();*/



        return back()->withSuccess('Product Category Successfully Updated!');
    }

    public function CategoryDelete( $id)
    {
        $review = VehicleCategory::destroy($id);
        $vehicle = Vehicle::where('category_id',$id)->update([
            'category_id' => 0
        ]);
        $sub = VehicleCategory::where('parent_category_id', $id)->delete();
        return back()->withSuccess('Successfully Deleted!');

    }

}
