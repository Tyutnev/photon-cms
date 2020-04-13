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
    return view('welcome');
});

Route::get('/login', 'SiteController@login')->middleware('guest');
Route::get('/registration', 'SiteController@registration')->middleware('guest');
Route::get('/logout', 'SessionController@logout')->middleware('auth');

Route::group(['prefix' => 'session'], function() {
    Route::post('start', 'SessionController@start')->middleware('guest');
});
