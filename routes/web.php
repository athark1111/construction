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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin','AdminController')->middleware('admin');


Route::get('/contractor','ContractorController@index')->name('contractor')->middleware('contractor');

Route::post('/contractor','ContractorController@index')->name('contractor')->middleware('contractor');


Route::get('/customer','CustomerController@index')->name('customer')->middleware('customer');



//Route::resource('/home', 'UserController');
