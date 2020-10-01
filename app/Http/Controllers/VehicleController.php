<?php

namespace App\Http\Controllers;

use App\Model\Taxes;
use App\Model\Vehicle;
use App\Model\VehicleBrand;
use App\Model\VehicleCategory;
use App\Model\VehicleSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $records = Vehicle::orderBy('created_at','DESC')->get();
        return view('admin.vehicles.index',compact('records'));
    }



    public function vehicledatatable (){
        $category =Vehicle::with('category')->orderBy('created_at','DESC')->get();
        return DataTables::of($category)
            ->editColumn('id', function ($category) {
                return $category->id;
            })
            ->editColumn('thumbnail', function ($category) {
                return $category->feature_image;
            })
            ->editColumn('name', function ($category) {
                return $category->name;
            })
            ->editColumn('category', function ($category) {
                return $category->category->name??'N/A';
            })
            ->editColumn('price', function ($category) {
                return $category->four_hour_price;
            })
            ->editColumn('action', function ($category) {
                $editoption=url('admin/vehicles/'.$category->id.'/edit');
                $showoption=url('vehicle/'.base64_encode($category->id).'/'.$category->slug);
                $scheduleoption=url('admin/vehicle-schedules/?vehicle_id='.$category->id);
                $deletecatlog=url('admin/deletevehicle',array('id'=>$category->id));
                if($category->status=='1'){
                    $color="green";
                }
                else{
                    $color="red";
                }
                $return = '<a  href="'.$editoption.'" rel="tooltip"  class="m-b-10 m-l-5 text-dark" data-original-title="Remove"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a  href="'.$showoption.'" rel="tooltip"  class="m-b-10 m-l-5 text-dark" data-original-title="Show"><i class="fa fa-eye f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a  href="'.$scheduleoption.'" rel="tooltip"  class="m-b-10 m-l-5 text-dark" data-original-title="Schedule"><i class="fa fa-code-fork  f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a onclick="delete_record(' . "'" . $deletecatlog. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5 text-dark" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';
                return $return;
            })
            ->make(true);
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
        $taxes=Taxes::all();
        return view('admin.vehicles.create',compact('tab','category','brand','taxes'));
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
            'tax_id'=>'required',
            'description'=>'required',
        ]);

        if ($request->four_hour=='yes')
        {
            $this->validate($request,[
                'four_hour_price'=>'required',
            ]);
        }

        if ($request->six_hour=='yes')
        {
            $this->validate($request,[
                'six_hour_price'=>'required',
            ]);
        }

        if ($request->eight_hour=='yes')
        {
            $this->validate($request,[
                'eight_hour_price'=>'required',
            ]);
        }

        if ($request->twelve_hour=='yes')
        {
            $this->validate($request,[
                'twelve_hour_price'=>'required',
            ]);
        }

        if ($request->full_day=='yes')
        {
            $this->validate($request,[
                'full_day_price'=>'required',
            ]);
        }
        if ($request->four_hour !='yes' && $request->eight_hour !='yes' && $request->full_day !='yes'){
            return back()->withErrors('You must select a price type!');
        }

        $vehicle = new Vehicle();
        $vehicle->type = $request->type;
        $vehicle->name = $request->name;
        $vehicle->slug = str_replace([' ','/'],'-',$request->name).'-'.uniqid();
        $vehicle->description = $request->description;
        $vehicle->category_id = $request->category_id;
        $vehicle->sub_category_id = $request->sub_category_id;
        $vehicle->brand_id = $request->brand_id;
        $vehicle->tax_id = $request->tax_id??0;
        $vehicle->four_hour = $request->four_hour;
        $vehicle->four_hour_price = $request->four_hour_price;
        $vehicle->four_hour_discount = $request->four_hour_discount??0;
        $vehicle->six_hour = $request->six_hour;
        $vehicle->six_hour_price = $request->six_hour_price;
        $vehicle->six_hour_discount = $request->six_hour_discount??0;
        $vehicle->eight_hour = $request->eight_hour??'no';
        $vehicle->eight_hour_price = $request->eight_hour_price;
        $vehicle->eight_hour_discount = $request->eight_hour_discount??0;
        $vehicle->twelve_hour = $request->twelve_hour;
        $vehicle->twelve_hour_price = $request->twelve_hour_price;
        $vehicle->twelve_hour_discount = $request->twelve_hour_discount??0;
        $vehicle->full_day = $request->full_day;
        $vehicle->full_day_price = $request->full_day_price;
        $vehicle->full_day_discount = $request->full_day_discount??0;
        $vehicle->stock = $request->stock??0;
        $vehicle->available_from = $request->available_from;
        $vehicle->available_to = $request->available_to;

        $vehicle->vehicle_class = $request->vehicle_class;
        $vehicle->color = $request->color;
        $vehicle->model = $request->model;
        //$vehicle->body = $request->body;
        $vehicle->seat = $request->seat;
        //$vehicle->actual_msrp = $request->actual_msrp;
        $vehicle->horse_power = $request->horse_power;
        $vehicle->torque = $request->torque;
        $vehicle->transmission = $request->transmission;
        $vehicle->suspension = $request->suspension;
        //$vehicle->clearance = $request->clearance;
        //$vehicle->differential = $request->differential;
        //$vehicle->gear_ratio = $request->gear_ratio;
        $vehicle->cylinders = $request->cylinders;
        $vehicle->engine = $request->engine;
        $vehicle->fuel_type = $request->fuel_type;
        $vehicle->highway_mpg = $request->highway_mpg;
        $vehicle->city_mpg = $request->city_mpg;


        if ($request->hasFile('model_image')){

            $upload_folder = 'upload';
            $file      = $request->file('model_image');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = $upload_folder.'/vehicles/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $vehicle->model_image = $fileUrl;

        }

        if ($request->hasFile('feature_image')){

            $upload_folder = 'upload';
            $file      = $request->file('feature_image');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = $upload_folder.'/vehicles/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $vehicle->feature_image = $fileUrl;

        }


        //$adddata=explode(",",$store->additional_image);

        if($request->get("additional_img")!=""){
            $add_img=array();
            $data=$request->get("additional_img");

            foreach (array_filter($data) as $k) {
                if(strstr($k,"http")==""){
                    $data1 =$k;
                    list($type, $data1) = explode(';', $data1);
                    list(, $data1)      = explode(',', $data1);
                    $file_name='/upload/vehicles/'.uniqid() . '.png';
                    $full_path = public_path() . $file_name;
                    $data = base64_decode($data1);
                    file_put_contents($full_path, $data);
                    $add_img[]=$file_name;
                }
                else{
                    $arr=explode("/",$k);
                    $add_img[]=$arr[count($arr)-1];
                }
            }
            if(!empty(array_filter($add_img))){
                $vehicle->additional_image=implode(',',$add_img);
            }

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
        $vehicle = Vehicle::find($id);
        return view('admin.vehicles.show',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);


        $category=VehicleCategory::where("parent_category_id",0)->where("status",'active')->get();
        $subcategory=VehicleCategory::where("parent_category_id",$vehicle->category_id)->where("status",'active')->get();
        $brand=VehicleBrand::where("status",'active')->get();

        $taxes=Taxes::all();
        return view('admin.vehicles.edit',compact('vehicle','category','brand','taxes','subcategory'));
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
        ]);

        if ($request->four_hour=='yes')
        {
            $this->validate($request,[
                'four_hour_price'=>'required',
            ]);
        }

        if ($request->six_hour=='yes')
        {
            $this->validate($request,[
                'six_hour_price'=>'required',
            ]);
        }

        if ($request->twelve_hour=='yes')
        {
            $this->validate($request,[
                'twelve_hour_price'=>'required',
            ]);
        }

        if ($request->eight_hour=='yes')
        {
            $this->validate($request,[
                'eight_hour_price'=>'required',
            ]);
        }

        if ($request->full_day=='yes')
        {
            $this->validate($request,[
                'full_day_price'=>'required',
            ]);
        }
        if ($request->four_hour !='yes' &&$request->eight_hour !='yes' && $request->full_day !='yes'){
            return back()->withErrors('You must select a price type!');
        }

        $vehicle = Vehicle::find($id);
        $vehicle->type = $request->type;
        $vehicle->name = $request->name;
        $vehicle->slug = str_replace([' ','/'],'-',$request->name).'-'.uniqid();
        $vehicle->description = $request->description;
        $vehicle->category_id = $request->category_id;
        $vehicle->sub_category_id = $request->sub_category_id;
        $vehicle->brand_id = $request->brand_id;
        $vehicle->tax_id = $request->tax_id??0;
        $vehicle->color = $request->color;
        $vehicle->four_hour = $request->four_hour;
        $vehicle->four_hour_price = $request->four_hour_price;
        $vehicle->four_hour_discount = $request->four_hour_discount??0;
        $vehicle->six_hour = $request->six_hour;
        $vehicle->six_hour_price = $request->six_hour_price;
        $vehicle->six_hour_discount = $request->six_hour_discount??0;
        $vehicle->eight_hour = $request->eight_hour??'no';
        $vehicle->eight_hour_price = $request->eight_hour_price;
        $vehicle->eight_hour_discount = $request->eight_hour_discount??0;
        $vehicle->twelve_hour = $request->twelve_hour;
        $vehicle->twelve_hour_price = $request->twelve_hour_price;
        $vehicle->twelve_hour_discount = $request->twelve_hour_discount??0;
        $vehicle->full_day = $request->full_day;
        $vehicle->full_day_price = $request->full_day_price;
        $vehicle->full_day_discount = $request->full_day_discount??0;
        $vehicle->stock = $request->stock??0;
        $vehicle->available_from = $request->available_from;
        $vehicle->available_to = $request->available_to;



        $vehicle->vehicle_class = $request->vehicle_class;
        $vehicle->color = $request->color;
        $vehicle->model = $request->model;
        //$vehicle->body = $request->body;
        $vehicle->seat = $request->seat;
        //$vehicle->actual_msrp = $request->actual_msrp;
        $vehicle->horse_power = $request->horse_power;
        $vehicle->torque = $request->torque;
        $vehicle->transmission = $request->transmission;
        $vehicle->suspension = $request->suspension;
        //$vehicle->clearance = $request->clearance;
        //$vehicle->differential = $request->differential;
        //$vehicle->gear_ratio = $request->gear_ratio;
        $vehicle->cylinders = $request->cylinders;
        $vehicle->engine = $request->engine;
        $vehicle->fuel_type = $request->fuel_type;
        $vehicle->highway_mpg = $request->highway_mpg;
        $vehicle->city_mpg = $request->city_mpg;


        if ($request->hasFile('model_image')){

            $upload_folder = 'upload';
            $file      = $request->file('model_image');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = $upload_folder.'/vehicles/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $vehicle->model_image = $fileUrl;

        }


        if ($request->hasFile('feature_image')){

            $upload_folder = 'upload';
            $file      = $request->file('feature_image');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = $upload_folder.'/vehicles/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $vehicle->feature_image = $fileUrl;

        }

        if($request->get("additional_img")!=""){
            $add_img=array();
            $data=$request->get("additional_img");

            foreach (array_filter($data) as $k) {
                if(strstr($k,"http")==""){
                    $data1 =$k;
                    list($type, $data1) = explode(';', $data1);
                    list(, $data1)      = explode(',', $data1);
                    $file_name='/upload/vehicles/'.uniqid() . '.png';
                    $full_path = public_path() . $file_name;
                    $data = base64_decode($data1);
                    file_put_contents($full_path, $data);
                    $add_img[]=$file_name;
                }
                else{

                    $add_img[]=str_replace(url(''),'',$k);
                }
            }
            if(!empty(array_filter($add_img))){
                $vehicle->additional_image=implode(',',$add_img);
            }

        }

        $vehicle->save();
        return back()->withSuccess('Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::destroy($id);
        $schedule = VehicleSchedule::where('vehicle_id', $id)->delete();
        return back()->withSuccess('Vehicle removed successfully!');
    }

    public function getsubcategory($id){
        $data=VehicleCategory::where("parent_category_id",$id)->where("status",'active')->get();
        return json_encode($data);
    }
}
