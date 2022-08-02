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

Route::get('/home', array(
    'as'    => 'index',
    'uses'  => 'Frontend\FrontendController@index'
));

Route::post('/', array(
    'as'    => 'index',
    'uses'  => 'Frontend\FrontendController@index'
));

Route::post('/home', array(
    'as'    => 'index',
    'uses'  => 'Frontend\FrontendController@index'
));

Route::get('/privacy-policy', array(
    'as'    => 'privacyPolicy',
    'uses'  => 'Frontend\FrontendController@privacyPolicy'
));

Route::get('/package', array(
    'as'    => 'package.index',
    'uses'  => 'Frontend\PackageController@index'
));

Route::post('/package', array(
    'as'    => 'package.index',
    'uses'  => 'Frontend\PackageController@index'
));

Route::get('/package/detail/{id}', array(
    'as'    => 'package.show',
    'uses'  => 'Frontend\PackageController@show'
));

Route::get('/booking/{id}', array(
    'as'    => 'booking.show',
    'uses'  => 'Frontend\BookingController@show'
));

Route::get('/booking/detail/{code}', array(
    'as'    => 'booking.detail',
    'uses'  => 'Frontend\BookingController@detail'
));

Route::get('/booking/info/{id}', array(
    'as'    => 'booking.info',
    'uses'  => 'Frontend\BookingController@info'
));

Route::post('/booking/store/{id}', array(
    'as'    => 'booking.store',
    'uses'  => 'Frontend\BookingController@store'
));

Route::get('/search', array(
    'as'    => 'search.index',
    'uses'  => 'Frontend\SearchController@index'
));

//Route::get('/search', array(
//    'as'    => 'search.index',
//    'uses'  => 'Frontend\SearchController@index'
//));

Route::post('/user/find-code', array(
    'as'    => 'user.findCOde',
    'uses'  => 'Frontend\UserController@findCode'
));

Route::post('/payment', array(
    'as'    => 'payment.store',
    'uses'  => 'Frontend\PaymentsController@store'
));

Route::get('/booking/detail/download/{id}', array(
    'as'    => 'booking.downloadPdf',
    'uses'  => 'Frontend\BookingController@downloadPdf'
));

Route::get('/booking/event/generate/pdf/{code}/{history}', array(
    'as'    => 'booking.generatePdfEvent',
    'uses'  => 'Frontend\BookingController@generatePdfEvent'
));
