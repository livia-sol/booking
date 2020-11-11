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
    //return view('welcome');
});

Route::resource('customers', 'CustomersController');
Route::resource('destinations', 'DestinationsController');


Route::get('/vue-js/index', function () {
    return view('vue_js.index');
});