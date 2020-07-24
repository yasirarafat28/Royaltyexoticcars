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
    public function suvRentals() {
        return view('frontView.las-vegas-nv.suv-rentals');
    }
    public function bugattiRentals() {
        return view('frontView.las-vegas-nv.bugatti-rentals');
    }
    public function lamborghiniRentals() {
        return view('frontView.las-vegas-nv.lamborghini-rentals');
    }

    public function carRentalsLamborghiniAventador() {
        return view('frontView.car-rentals.lamborghini-aventador');
    }
    public function team() {
        return view('frontView.team');
    }
    public function teamMembers() {
        return view('frontView.team.houston');
    }
}
