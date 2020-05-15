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
Route::get('/artisans', function () {
    return view('artisans.index');
});
Route::get('/selections', function () {
    return view('selections.index');
});
Route::get('/restaurants', function () {
    return view('restaurants.index');
});
Route::get('/comparatives', function () {
    return view('comparatives.index');
});
Route::get('/commerces', function () {
    return view('commerces.index');
});
Route::get('/selections/lequatriememur', function () {
    return view('selections.showlequatriememur');
});
Route::get('/restaurants/français', function () {
    return view('restaurants.français');
});
Route::get('/restaurants/italien', function () {
    return view('restaurants.italien');
});
Route::get('/restaurants/asiatique', function () {
    return view('restaurants.asiatique');
});
