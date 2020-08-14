<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Vehicle_coupon;
use App\Model\Vehicle;

class VehicleCouponController extends Controller
{

    //
    public function index(Request $request)
    {
        $records = Vehicle_coupon::where(function ($q) use($request){
            if (isset($request->vehicle_id) && is_numeric($request->vehicle_id)){
                $q->where('vehicle_id',$request->vehicle_id);
            }
        })->get();
        $vehicles = Vehicle::where('status','active')->get();
        return view("admin.vehicleCoupon.default",compact('records','vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicleCoupon.addVcoupon');
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
            'code'=>'required',
            'name'=>'required',
            'value'=>'required',
        ]);

        $item  = new vehicle_coupon();
        $item->name = $request->name;
        $item->code = $request->code;
        $item->discount_type = $request->discount_type;
        $item->value = $request->value;
        $item->free_shipping = $request->free_shipping;
        $item->start_date = $request->start_date;
        $item->end_date = $request->end_date;
        $item->status = $request->status;
        $item->vehicle_id = $request->product;
        $item->categories = $request->category;
        $item->uses_limit_per_customer = $request->per_coupon;

        $item->save();
        return back()->withSuccess('Coupon created successfully!');
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
        $this->validate($request,[
            'start_time'=>'required',
            'four_hour'=>'required',
            'eight_hour'=>'required',
            'full_day'=>'required',
            'status'=>'required',
        ]);

        $item  = vehicle_coupon::find($id);

        $item->name = $request->name;
        $item->code = $request->code;
        $item->discount_type = $request->discount_type;
        $item->value = $request->value;
        $item->free_shipping = $request->free_shipping;
        $item->start_date = $request->start_date;
        $item->end_date = $request->end_date;
        $item->status = $request->status;
        $item->vehicle_id = $request->product;
        $item->categories = $request->category;
        $item->uses_limit_per_customer = $request->per_coupon;

        $item->save();
        return back()->withSuccess('Schedule saved successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        vehicle_coupon::destroy($id);
        return back()->withSuccess('Schedule removed successfully!');
    }
}
