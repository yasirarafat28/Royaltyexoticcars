<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Slider::orderBy('created_at','DESC')->get();
        return view('admin.sliders.index',compact('records'));

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
            'status'=>'required',
            'type'=>'required',
            'photo'=>'required|mimes:jpg,jpeg,png,bmp',
        ]);

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->content = $request->description;
        $slider->status = $request->status;
        $slider->type = $request->type;

        if ($request->hasFile('photo')){

            $upload_folder = 'upload';
            $file      = $request->file('photo');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = $upload_folder.'/slider/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $slider->photo = $fileUrl;

        }
        $slider->save();

        return back()->withSuccess('Slider added successfully!');
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
            'status'=>'required',
            'type'=>'required',
        ]);

        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->content = $request->description;
        $slider->status = $request->status;
        $slider->type = $request->type;

        if ($request->hasFile('photo')){

            $upload_folder = 'upload';
            $file      = $request->file('photo');
            $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $path       = $upload_folder.'/slider/';

            $file->move($path, $fileName);
            $fileUrl   = $path . $fileName;
            $slider->photo = $fileUrl;

        }
        $slider->save();

        return back()->withSuccess('Slider added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);

        return back()->withSuccess('Slider removed successfully!');
    }
}
