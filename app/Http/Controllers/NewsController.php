<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = News::orderBy('created_at','DESC')->get();
        return view('admin.news.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
        ]);

        $posts = new News();
        $posts->title = $request->title;
        $posts->slug = str_replace([' ','/'],'-',$request->title).'-'.uniqid();
        $posts->description = $request->description;
        $posts->status = 'active';
        if ($request->hasFile('feature_image')) {

            $image      = $request->file('feature_image');
            $imageName  = 'category_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/vehicle_brand/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;

            $posts->image = $imageUrl;
        }
        $posts->save();

        return back()->withSuccess('News added successfully!');
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

        $row = News::find($id);
        return view('admin.news.edit',compact('row'));
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
        ]);

        $posts = News::find($id);
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->status = $request->status;
        if ($request->hasFile('feature_image')) {

            $image      = $request->file('feature_image');
            $imageName  = 'category_'.date('ymdhis').'.'.$image->getClientOriginalExtension();
            $path       = 'images/vehicle_brand/';
            $image->move($path, $imageName);
            $imageUrl   = $path . $imageName;

            $posts->image = $imageUrl;
        }
        $posts->save();

        return back()->withSuccess('News saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        News::destroy($id);
        return back()->withSuccess('News removed successfully!');
    }
}
