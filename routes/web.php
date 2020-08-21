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

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('about','about');

Route::get('customers','CustomersController@index');
Route::post('customers','CustomersController@store');
Route::get('customers/create','CustomersController@create');
Route::get('customers/{customer}','CustomersController@show');
Route::patch('customers/{customer}','CustomersController@update');
Route::get('customers/{customer}/edit','CustomersController@edit');
