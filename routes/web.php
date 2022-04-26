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

Route::get('/', array(
    'as'    => 'index',
    'uses'  => 'Frontend\FrontendController@index'
));

Route::get('/package', array(
    'as'    => 'package.index',
    'uses'  => 'Frontend\PackageController@index'
));

Route::get('/package/detail/{id}', array(
    'as'    => 'package.show',
    'uses'  => 'Frontend\PackageController@show'
));

Route::get('/booking', array(
    'as'    => 'booking.index',
    'uses'  => 'Frontend\BookingController@index'
));
