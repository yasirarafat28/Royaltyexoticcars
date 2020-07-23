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

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/faqs', 'FrontController@faqs');
Route::get('/car-rentals', 'FrontController@carRentals');
=======
=======
>>>>>>> 6238f1c377a834c8063c8e418619cd0a7e7ed6ce

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
>>>>>>> 6238f1c377a834c8063c8e418619cd0a7e7ed6ce
=======
>>>>>>> 6238f1c377a834c8063c8e418619cd0a7e7ed6ce
