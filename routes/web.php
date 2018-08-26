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

Route::prefix("{locale?}")->middleware("locale")->group(function () {

    Route::get('/', "BaseController@home")->name("home");
    Route::get('/resume', "BaseController@resume")->name("resume");
    Route::get('/contact', "BaseController@contact")->name("contact");
    Route::get('/contact/thankyou', "BaseController@contactThankYou")->name("contact");
    Route::post('/contact/submit', "BaseController@contactSubmit");

});