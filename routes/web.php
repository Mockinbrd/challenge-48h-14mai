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

Route::get('/home', function () {
    return view('index');
});
Route::get('/tourisme', function () {
    return view('tourisme.index');
});
Route::get('/selections', function () {
    return view('selections.index');
});
Route::get('/restaurant', function () {
    return view('restaurant.index');
});
Route::get('/comparatives', function () {
    return view('comparatives.index');
});
Route::get('/commerces', function () {
    return view('commerces.index');
});
