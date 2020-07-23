<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('frontView.master');
    }
    public function faqs() {
        return view('frontView.faqs');
    }
    public function carRentals() {
        return view('frontView.las-vegas-nv.car-rentals');
    }
}
