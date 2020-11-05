<?php

use App\Http\Controllers\BookingController;
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

Route::get('/booking', 'BookingController@booking')->name('show.booking')->middleware('contractor');

Route::get('/contractor','ContractorController@index')->name('contractor.index')->middleware('contractor');
Route::get('/contractor/create','ContractorController@create')->name('contractor.create')->middleware('contractor');
Route::post('/contractor/add','ContractorController@store')->name('contractor.store')->middleware('contractor');
Route::get('/contractor/{id}/edit','ContractorController@edit')->name('contractor.edit')->middleware('contractor');
Route::put('/contractor/update/{id}','ContractorController@update')->name('contractor.update')->middleware('contractor');
Route::delete('/contractor/delete/{id}','ContractorController@destroy')->name('contractor.destroy')->middleware('contractor');
Route::get('/profile','ContractorController@showProfile')->name('constructor.profile')->middleware('contractor');
Route::put('/contractor/profile/{id}','ContractorController@updateProfile')->name('contractor.profile.update')->middleware('contractor');

Route::get('/customer','CustomerController@index')->name('customer')->middleware('customer');
Route::get('/customer/city','CustomerController@getAreas')->name('get.areas');
Route::get('/customer/constructors','CustomerController@getConstructor')->name('get.constructors');
Route::get('/customer/services','CustomerController@getServices')->name('get.services');
Route::post('/customer/booking','CustomerController@store')->name('booking.store');
