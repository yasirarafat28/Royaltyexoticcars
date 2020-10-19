<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiftCardPackage;

class GiftCardPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $records = GiftCardPackage::where(function ($q) use($request){
            if (isset($request->status) && $request->status){
                $q->where('status',$request->status);
            }
            if(isset($request->q)   && $request->q){

                $q->where('code', 'LIKE', '%' . $request->q . '%');
            }
        })->orderBy('created_at','DESC')->paginate(25);
        return view("admin.gift-card-packages.index",compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gift-card-packages.create');
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
            'code'=>'required|unique:gift_card_packages',
            'price'=>'required',
            'equivalent_amount'=>'required',
        ]);

        $coupon = new GiftCardPackage();
        $coupon->name = $request->name;
        $coupon->code = $request->code;
        $coupon->price = $request->price;
        $coupon->equivalend_amount = $request->equivalent_amount;
        if ($request->start_at)
        {
            $coupon->start_at = date('Y-m-d H:i:s',strtotime($request->start_at));

        }
        if ($request->end_at){

            $coupon->end_at = date('Y-m-d H:i:s',strtotime($request->end_at));
        }

        $coupon->note = $request->note;
        $coupon->status = $request->status;
        $coupon->save();
        return back()->withSuccess('Gift Card created successfully!');
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

        $item = GiftCardPackage::find($id);
        return view('admin.gift-card-packages.edit',compact('item'));
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
            'name'=>'required',
            'code'=>'required|unique:gift_card_packages,code,'.$id,
            'price'=>'required',
            'equivalent_amount'=>'required',
        ]);

        $coupon = GiftCardPackage::find($id);
        $coupon->name = $request->name;
        $coupon->code = $request->code;
        $coupon->price = $request->price;
        $coupon->equivalend_amount = $request->equivalent_amount;
        if ($request->start_at)
        {
            $coupon->start_at = date('Y-m-d H:i:s',strtotime($request->start_at));

        }
        if ($request->end_at){

            $coupon->end_at = date('Y-m-d H:i:s',strtotime($request->end_at));
        }

        $coupon->note = $request->note;
        $coupon->status = $request->status;
        $coupon->save();
        return back()->withSuccess('Gift Card saved successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GiftCardPackage::destroy($id);
        return back()->withSuccess('Gift Card  removed successfully!');
    }
}
