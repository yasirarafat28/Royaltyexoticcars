<?php

namespace App\Http\Controllers;


use App\Model\VehicleCategory;
use Illuminate\Http\Request;
use App\Model\VehicleRequirement;

class vehicle_requirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $require = VehicleRequirement::all();
        return view('admin.requirements.index')->with('requires', $require);
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
        $require = VehicleRequirement::find($id);
        return view('admin.requirements.show')->with('require', $require);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $require = VehicleRequirement::find($id);
        $categories = VehicleCategory::where('parent_category_id',0)->where('status','active')->get();
        return view('admin.requirements.update')->with('require', $require)->with('categories',$categories);
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
        $this->validate(request(), [

            'category_id' => 'required',
            'local_age' => 'required',
            'local_driving_licence' => 'required',
            //'local_insurance' => 'required',
            //'local_liability_insurance' => 'required',
            'local_property_damage_waiver' => 'required',
            'local_tire_protection' => 'required',
            'local_mechanical_breakdown_coverage' => 'required',
            'local_fuel_credit' => 'required',
            'international_age' => 'required',
            'international_driving_licence' => 'required',
            //'international_insurance' => 'required',
            //'international_full_coverage_insurance_d1' => 'required',
            //'international_full_coverage_insurance_d2' => 'required',
            'international_property_damage_waiver' => 'required',
            'international_tire_protection' => 'required',
            'international_mechanical_breakdown_coverage' => 'required',
            'international_fuel_credit' => 'required'

        ]);

        $require = VehicleRequirement::find($id);

        $require->category_id = $request->category_id;
        $require->type = $request->type;
        $require->local_age = $request->local_age;
        $require->local_driving_licence = $request->local_driving_licence;
        $require->local_insurance = $request->local_insurance;
        $require->local_liability_insurance = $request->local_liability_insurance;
        $require->local_property_damage_waiver = $request->local_property_damage_waiver;
        $require->local_tire_protection = $request->local_tire_protection;
        $require->local_mechanical_breakdown_coverage = $request->local_mechanical_breakdown_coverage;
        $require->local_fuel_credit = $request->local_fuel_credit;
        $require->international_age = $request->international_age;
        $require->international_driving_licence = $request->international_driving_licence;
        $require->international_insurance = $request->international_insurance;
        $require->international_full_coverage_insurance_d1 = $request->international_full_coverage_insurance_d1;
        $require->international_full_coverage_insurance_d2 = $request->international_full_coverage_insurance_d2;
        $require->international_property_damage_waiver = $request->international_property_damage_waiver;
        $require->international_tire_protection = $request->international_tire_protection;
        $require->international_mechanical_breakdown_coverage = $request->international_mechanical_breakdown_coverage;
        $require->international_fuel_credit = $request->international_fuel_credit;


        $require->save();
        return redirect('admin/vehicle_requirements')->withSuccess('Requirements updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $require = VehicleRequirement::destroy($id);
        return back()->withSuccess('FAQ removed successfully!');
    }
}
