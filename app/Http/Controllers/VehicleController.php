<?php

namespace App\Http\Controllers;

use App\Model\Taxes;
use App\Model\Vehicle;
use App\Model\VehicleBrand;
use App\Model\VehicleCategory;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vehicles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tab = 1;


        $category=VehicleCategory::where("parent_category_id",0)->where("status",'active')->get();
        $brand=VehicleBrand::where("status",'active')->get();
        $tax=Taxes::all();
        return view('admin.vehicles.create',compact('tab','category','brand','tax'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->category_id = $request->category_id;
        $vehicle->sub_category_id = $request->sub_category_id;
        $vehicle->brand_id = $request->brand_id;
        $vehicle->tax_id = $request->tax_id??0;
        $vehicle->color = $request->color;
        $vehicle->four_hour = $request->four_hour;
        $vehicle->four_hour_price = $request->four_hour_price;
        $vehicle->four_hour_discount = $request->four_hour_discount;
        $vehicle->eight_hour = $request->eight_hour??'no';
        $vehicle->eight_hour_price = $request->eight_hour_price;
        $vehicle->eight_hour_discount = $request->eight_hour_discount;
        $vehicle->full_day = $request->full_day;
        $vehicle->full_day_price = $request->full_day_price;
        $vehicle->full_day_discount = $request->full_day_discount;
        $vehicle->stock = $request->stock;
        $vehicle->available_from = $request->available_from;
        $vehicle->available_to = $request->available_to;
        $vehicle->model = $request->model;
        $vehicle->horse_power = $request->horse_power;
        $vehicle->torque = $request->torque;
        $vehicle->transmission = $request->transmission;
        $vehicle->suspension = $request->suspension;
        $vehicle->clearance = $request->clearance;
        $vehicle->differential = $request->differential;
        $vehicle->gear_ratio = $request->gear_ratio;
        if ($request->hasFile('feature_image')){

            $upload_folder = 'upload';
            $file      = $request->file('feature_image');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = $upload_folder.'/vehicles';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $vehicle->feature_image = $fileUrl;

        }
        $vehicle->save();
        return back()->withSuccess('Vehicle added successfully');
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function getsubcategory($id){
        $data=VehicleCategory::where("parent_category_id",$id)->where("status",'active')->get();
        return json_encode($data);
    }
}
