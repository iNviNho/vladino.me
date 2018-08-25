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

    Route::get('/', "BaseController@home");
    Route::get('/resume', "BaseController@resume");
    Route::get('/contact', "BaseController@contact");

});