<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class faqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $faqs = Faq::all();
        return view('admin.faq.index')->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [

            'question' => 'required',
            'description' => 'required'

        ]);
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->description = $request->description;
        $faq->save();
        return back()->withSuccess('FAQ created successfully!');
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
        $faqs = Faq::find($id);
        return view('admin.faq.edit')->with('faqs', $faqs);
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

            'question' => 'required',
            'description' => 'required'

        ]);

        $faqs = Faq::find($id);
        $faqs->question = $request->question;
        $faqs->description = $request->description;

        $faq->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
