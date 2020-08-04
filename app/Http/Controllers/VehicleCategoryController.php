<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Sentinel;
use Session;
use DataTables;
use App\Model\VehicleCategory;
use App\Model\Product;
use App\Model\VehicleBrand;
use Image;
use App\Model\Sepicalcategories;
use Hash;
class VehicleCategoryController extends Controller {
    public function __construct() {
        parent::callschedule();
    }
    public function index(){
        $category=VehicleCategory::where("status",'active')->get();
        $brand=VehicleBrand::where("status",'active')->get();
        return view('admin.vehicle-categories.category')->with("category",$category)->with("brand",$brand);
    }

    public function getallsubcategory(){
        $data=VehicleCategory::where("parent_category","==",0)->where("status",'active')->get();
        return json_encode($data);
    }

    public function categorydatatable(){
        $category =VehicleCategory::orderBy('id','DESC')->where("status",'active')->where('parent_category_id','0')->get();
        return DataTables::of($category)
            ->editColumn('id', function ($category) {
                return $category->id;
            })
            ->editColumn('name', function ($category) {
                return $category->name;
            })
            ->editColumn('action', function ($category) {
                $subcategory=url('admin/subvehiclecategory',array('id'=>$category->id));
                $deleteuser=url('admin/deletevehiclecategory',array('id'=>$category->id));
                $return = '<a onclick="editcategory('.$category->id.')"   rel="tooltip" class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#editcategory"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a onclick="delete_record(' . "'" . $deleteuser. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a><a  href="'.$subcategory.'" rel="tooltip" title="Sub Category" class="m-b-10 m-l-5" data-original-title="Remove"><i class="fa fa-code-fork f-s-25" style="margin-right: 10px;font-size: x-large;color:black"></i></a>';
                return $return;
            })
            ->make(true);
    }

    public function addcategory(Request $request){
        $store=new VehicleCategory();
        $store->name=$request->get("category_name");
        $store->save();
        Session::flash('message',__('messages_error_success.category_add_success'));
        Session::flash('alert-class', 'alert-success');
        return redirect("admin/vehiclecategory");
    }

    public function getcategorybyid($id){
        $data=VehicleCategory::find($id);
        return $data->name;
    }



    public function updatecategory(Request $request){
        $store=VehicleCategory::find($request->get("id"));
        $store->name=$request->get("category_name");
        $store->save();
        Session::flash('message',__('messages_error_success.category_update_success'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function subindex($id){
        $data=VehicleCategory::find($id);
        return view("admin.vehicle-categories.subcategory")->with("parent_id",$id)->with("parent_name",$data->name);
    }

    public function subdatatable($id){
        $category =VehicleCategory::orderBy('id','DESC')->where("status",'active')->where('parent_category_id',$id)->get();
        return DataTables::of($category)
            ->editColumn('id', function ($category) {
                return $category->id;
            })
            ->editColumn('name', function ($category) {
                return $category->name;
            })
            ->editColumn('action', function ($category) {
                $brand=url('admin/vehiclebrand',array('id'=>$category->id));
                $deletesub=url('admin/deletevehiclecategory',array('id'=>$category->id));
                $return = '<a onclick="editcategory('.$category->id.')"  rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#editsubcategory"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a onclick="delete_record(' . "'" . $deletesub. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a><a  href="'.$brand.'" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove"><i class="fa fa-code-fork f-s-25" style="font-size: x-large;color:black"></i></a>';
                return $return;
            })
            ->make(true);
    }

    public function subaddcategory(Request $request){
        $store=new VehicleCategory();
        $store->name=$request->get("name");
        $store->parent_category_id=$request->get("parentid");
        $store->save();
        Session::flash('message',__('messages_error_success.subcat_add_success'));
        Session::flash('alert-class', 'alert-success');
        return redirect("admin/subvehiclecategory/".$store->parent_category_id);
    }

    public function brandindex($id){
        $data=VehicleCategory::find($id);
        $parent=VehicleCategory::find($data->parent_category_id);
        $parent_name=$parent->name;
        $subcategory=$data->name;
        return view("admin.vehicle-categories.brand")->with("subcategoryid",$id)->with("parent_name",$parent_name)->with("subcategory",$subcategory)->with("parent_ids",$parent->id);
    }

    public function branddatatable($id){
        $category =VehicleBrand::orderBy('id','DESC')->where("status",'active')->where('category_id',$id)->get();
        return DataTables::of($category)
            ->editColumn('id', function ($category) {
                return $category->id;
            })
            ->editColumn('name', function ($category) {
                return $category->brand_name;
            })
            ->editColumn('action', function ($category) {
                $brand=url('admin/vehiclebrand',array('id'=>$category->id));
                $del_brand=url('admin/deletevehiclebrand',array('id'=>$category->id));

                $return = '<a onclick="editbrand('.$category->id.')"  rel="tooltip" class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#editbrand"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a onclick="delete_record(' . "'" . $del_brand. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';
                return $return;
            })
            ->make(true);
    }

    public function addbrand(Request $request){
        $store=new VehicleBrand();
        $store->brand_name=$request->get("name");
        $store->category_id=$request->get("category_id");
        $store->save();
        Session::flash('message',__('messages_error_success.brand_add_success'));
        Session::flash('alert-class', 'alert-success');
        return redirect("admin/vehiclebrand/".$store->category_id);
    }

    public function getbrandbyname($id){
        $data=VehicleBrand::find($id);
        return $data->brand_name;
    }

    public function updatebrand(Request $request){
        $store=VehicleBrand::find($request->get("id"));
        $store->brand_name=$request->get("category_name");
        $store->save();
        Session::flash('message',__('messages_error_success.brand_update_success'));
        Session::flash('alert-class', 'alert-success');
        return redirect("admin/vehiclebrand/".$store->category_id);
    }

    public function viewcategory(){
        $category=VehicleCategory::all();
        $brand=VehicleBrand::all();
        return view("admin.VehicleCategory.viewcategory")->with("category",$category)->with("brand",$brand);
    }



    public function deletecategory($id){
        $store=VehicleCategory::find($id);
        $store->is_delete='1';
        $store->save();
        $product=Product::orwhere('category',$id)->orwhere("subcategory",$id)->get();
        foreach ($product as $k) {
            $da=Product::where("id",$k->id)->update(["is_deleted"=>'1']);
        }
        Session::flash('message',__('messages_error_success.category_del'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

    public function deletebrand($id){
        $store=VehicleBrand::find($id);
        $store->is_delete='1';
        $store->save();
        $product=Product::where('brand',$id)->get();
        foreach ($product as $k) {
            $da=Product::where("id",$k->id)->update(["is_deleted"=>'1']);
        }
        Session::flash('message',__('messages_error_success.brand_del'));
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }

}
