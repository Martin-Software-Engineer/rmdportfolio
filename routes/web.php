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

Route::get('/', function () {return view('landing.index');});
Route::get('/epondo', function () {return view('landing.epondo');});
Route::get('/dost-pcieerd', function () {return view('landing.dost-pcieerd');});

Route::get('/sent', function () {return view('landing.messagesent');});

// Route::resource('contact', 'ContactController');
Route::resource('contact', 'App\Http\Controllers\ContactController');
// Route::post('/contact', 'App\Http\Controllers\ContactController@store');
