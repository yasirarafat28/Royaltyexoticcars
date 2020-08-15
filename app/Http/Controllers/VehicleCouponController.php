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

        $vehicles = Vehicle::where('status','active')->orderBy('name','ASC')->get();
        $records = Vehicle_coupon::where(function ($q) use($request){
            if (isset($request->status) && $request->status){
                if ($request->status=='expired'){
                    $q->where('end_at','<=',date('Y-m-d H:i:s'));
                }else{
                    $q->where('status',$request->status);
                }
            }
            if(isset($request->q)   && $request->q){

                $q->where('code', 'LIKE', '%' . $request->q . '%');
            }
        })->orderBy('created_at','DESC')->paginate(25);
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
            'title'=>'required',
            'code'=>'required|unique:vehicle_coupons',
            'discount_type'=>'required',
            'discount'=>'required',
            'item_id'=>'required',
        ]);

        $coupon = new Vehicle_coupon();
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->item_id = $request->item_id;
        $coupon->discount_type = $request->discount_type;
        $coupon->discount = $request->discount;
        if ($request->start_at)
        {
            $coupon->start_at = date('Y-m-d H:i:s',strtotime($request->start_at));

        }
        if ($request->end_at){

            $coupon->end_at = date('Y-m-d H:i:s',strtotime($request->end_at));
        }

        $coupon->note = $request->note;
        $coupon->status = $request->status;
        $coupon->max_discount_amount = $request->max_discount_amount??0;
        $coupon->min_required_amount = $request->min_required_amount??0;
        $coupon->save();
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

        $vehicles = Vehicle::orderBy('name','ASC')->get();
        $item = Vehicle_coupon::find($id);
        return view('admin.vehicleCoupon.edit',compact('vehicles','item'));
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
            'title'=>'required',
            'code'=>'required|unique:vehicle_coupons,code,'.$id,
            'discount_type'=>'required',
            'discount'=>'required',
            'item_id'=>'required',
        ]);

        $coupon = Vehicle_coupon::find($id);
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->item_id = $request->item_id;
        $coupon->discount_type = $request->discount_type;
        $coupon->discount = $request->discount;
        $coupon->start_at = $request->start_at;
        $coupon->end_at = $request->end_at;
        $coupon->note = $request->note;
        $coupon->status = $request->status;
        $coupon->max_discount_amount = $request->max_discount_amount??0;
        $coupon->min_required_amount = $request->min_required_amount??0;
        $coupon->save();
        return back()->withSuccess('Vehicle saved successfully!');
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
        return back()->withSuccess('Vehicle removed successfully!');
    }
}
