<?php

namespace App\Http\Controllers;

use App\VehicleCheckout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $records = VehicleCheckout::where(function ($q) use($request){
            if (isset($request->status) && $request->status){
                $q->where('status',$request->status);
            }
            if (isset($request->date_from) && $request->date_from){
                $q->where(DB::raw('date(created_at)'),'>=',$request->date_from);
            }
            if (isset($request->date_to) && $request->date_to){
                $q->where(DB::raw('date(created_at)'),'<=',$request->date_to);
            }

        })->where('status','!=','temporary')->orderBy('created_at','DESC')->paginate(25);
        return view('admin.vehicle-order.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $order = VehicleCheckout::find($id);
        return view('admin.vehicle-order.show',compact('order'));
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


        $order = VehicleCheckout::find($id);

        $order->total                   = $request->total;
        $order->tax                     = $request->tax;
        $order->discount                = $request->discount;
        $order->grand_total             = $request->grand_total;
        $order->note             = $request->note;
        $order->save();

        return back()->withSuccess('Reservation order saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VehicleCheckout::destroy($id);
        return back()->withSuccess('Reservation order removed successfully!');
    }
}
