<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FrontController@index');

Route::get('/faqs', 'FrontController@faqs');
Route::get('/car-rentals', 'FrontController@carRentals');

Route::get('/suv-rentals', 'FrontController@suvRentals');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
