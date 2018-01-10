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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/our_hotels', function () {
    return view('our_hotels');
});

Route::get('/vacancies', function () {
    return view('vacancies');
});

Route::get('/vacancy_details', function () {
    return view('vacancy_details');
});

Route::get('/package_card', function () {
    return view('package_card');
});

Route::get('/packages', function () {
    return view('packages');
});

Route::get('/wellness', function () {
    return view('wellness');
});

Route::get('/wellness_card', function () {
    return view('wellness_card');
});

Route::get('/gifts', function () {
    return view('gifts');
});
