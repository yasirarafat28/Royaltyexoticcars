<?php

namespace App\Http\Controllers;

use App\Model\Vehicle;
use App\Model\VehicleSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VehicleScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $records = VehicleSchedule::where(function ($q) use($request){
            if (isset($request->vehicle_id) && is_numeric($request->vehicle_id)){
                $q->where('vehicle_id',$request->vehicle_id);
            }
        })->get();
        $vehicles = Vehicle::where('status','active')->get();
        return view('admin.vehicle-schedules.index',compact('records','vehicles'));
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
        $this->validate($request,[
            'vehicle_id'=>'required',
            'start_time'=>'required',
            'four_hour'=>'required',
            'six_hour'=>'required',
            'eight_hour'=>'required',
            'twelve_hour'=>'required',
            'full_day'=>'required',
        ]);

        $item  = new VehicleSchedule();
        $item->vehicle_id = $request->vehicle_id;
        $item->start_time = $request->start_time;
        $item->register_number = $request->register_number;
        $item->color = $request->color;
        $item->four_hour = $request->four_hour;
        $item->six_hour = $request->six_hour;
        $item->eight_hour = $request->eight_hour;
        $item->twelve_hour = $request->twelve_hour;
        $item->full_day = $request->full_day;
        $item->save();
        return back()->withSuccess('Schedule created successfully!');
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
            'six_hour'=>'required',
            'eight_hour'=>'required',
            'twelve_hour'=>'required',
            'full_day'=>'required',
            'status'=>'required',
        ]);

        $item  = VehicleSchedule::find($id);
        $item->start_time = $request->start_time;
        $item->register_number = $request->register_number;
        $item->color = $request->color;
        $item->four_hour = $request->four_hour;
        $item->six_hour = $request->six_hour;
        $item->eight_hour = $request->eight_hour;
        $item->twelve_hour = $request->twelve_hour;
        $item->full_day = $request->full_day;
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
        VehicleSchedule::destroy($id);
        return back()->withSuccess('Schedule removed successfully!');
    }
}
