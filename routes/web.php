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

/*/////////////////////////////////////*/
/*//////////FRONTEND ROUTES///////////*/
Route::get('/', function () {
    return view('user/home');
});

Route::get('/aboutus', function () {
    return view('user/aboutus');
});

Route::get('/our_hotels', function () {
    return view('user/our_hotels');
});

Route::get('/vacancies', function () {
    return view('user/vacancies');
});

Route::get('/vacancy_details', function () {
    return view('user/vacancy_details');
});

Route::get('/package_card', function () {
    return view('user/package_card');
});

Route::get('/packages', function () {
    return view('user/packages');
});

Route::get('/wellness', function () {
    return view('user/wellness');
});

Route::get('/wellness_card', function () {
    return view('user/wellness_card');
});

Route::get('/gifts', function () {
    return view('user/gifts');
});

Route::get('/meetings', function () {
    return view('user/meetings');
});

Route::get('/weddings', function () {
    return view('user/weddings');
});

Route::get('/events', function () {
    return view('user/events');
});

Route::get('/hotel', function () {
    return view('user/hotel');
});

Route::get('/conference', function () {
    return view('user/conference');
});

Route::get('/layout', function (){
   return view('layouts/admin');
});
/*/////////////////////////////////////*/
/*///////////BACKEND ROUTES///////////*/
Route::prefix('/admin')->group(function (){

    Route::group(['middleware'  => 'auth'], function(){
        Route::get('/customers', function (){
            return view('admin/customers');
        });
    });

    Auth::routes();

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});





