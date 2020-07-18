<?php

use Illuminate\Support\Facades\Route;
use App\Models\Offer;

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
    $offers = Offer::orderBy('created_at', 'desc')
    ->limit(7)
    ->get();

    return view('home' , [
    'offers' => $offers
    ]);
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/offer', 'OfferController@index')->name('offer');
Route::get('/listoffer', 'OfferController@showlist')->name('showlist');
Route::get('/listdemand', 'DemandController@index')->name('listdemand');
Route::get('/adddemand', 'DemandController@add')->name('adddemand');
Route::resource('offer', 'OfferController');
Route::resource('demand', 'DemandController');


