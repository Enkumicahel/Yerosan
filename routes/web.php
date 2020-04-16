<?php

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


Route::get('/', function () {
    return view('welcome');
});

// Route::domain('{account}.myapp.com')->group(function () {
Route::prefix('admin')->group(function () {
	Route::get('/', function () {
	    return view('admin.pages.index');
	});
});

Route::prefix('hotel')->group(function () {
	Route::get('/', function () {
	    return view('hotel.pages.index');
	});
	Route::get('/aboutus', function () {
	    return view('hotel.pages.aboutus');
	});
	Route::get('/contactus', function () {
	    return view('hotel.pages.contactus');
	});
});

Route::prefix('dairyfarm')->group(function () {
	Route::get('/', function () {
	    return view('dairyfarm.pages.index');
	});
	Route::get('/contactus', function () {
	    return view('dairyfarm.pages.contactus');
	});
});

Route::prefix('coffee')->group(function () {
	Route::get('/', function () {
	    return view('coffee.pages.index');
	});
	Route::get('/contactus', function () {
	    return view('coffee.pages.contactus');
	});
});

Route::post('/contactus', 'MailController@contact');