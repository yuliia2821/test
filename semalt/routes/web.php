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
    return view('welcome');
});

Route::post('/createBids', 'MainController@createBids')->name('createBids');
Route::get('/bids','MainController@bids')->name('bids');
Route::get('/result','MainController@result')->name('result');