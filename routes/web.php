<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    //-------------------- Home Routes --------------------------//
    Route::get('/', 'ViewController@index')->name('index');
    Route::get('/players', 'ViewController@team')->name('players');
    Route::get('/fixtures', 'ViewController@fixtures')->name('fixtures');
    Route::get('/tables', 'ViewController@standings')->name('standings');
    Route::get('/blog', 'ViewController@news')->name('news');
    Route::get('/shop-now', 'ViewController@shop')->name('shop');
    Route::get('/club-info', 'ViewController@about')->name('about');
    Route::get('/contact-us', 'ViewController@contact')->name('contact');
});
