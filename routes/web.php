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
/* TEST ROUTES */
Route::get('/test', function () {
    return view('test');
});

Auth::routes(['verify' => true]);

/* Products Routes */
Route::get ('/shop', 'ProductController@index' )->name('products.index');
Route::get ('/shop/{slug}', 'ProductController@show')->name('products.show');
Route::get('/search', 'ProductController@search')->name('products.search');

/* Cart Routes */
Route::group(['middleware' => ['verified']], function() {
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::post('/cart/add', 'CartController@store')->name('cart.store');
    Route::patch('/cart/{rowId}', 'CartController@update')->name('cart.update');
    Route::delete('/cart/{rowId}', 'CartController@destroy')->name('cart.destroy');
    Route::post('/coupon', 'CartController@storeCoupon')->name('cart.store.coupon');
    Route::delete('/coupon', 'CartController@destroyCoupon')->name('cart.destroy.coupon');
});


/* Checkout Routes */
Route::group(['middleware' => ['verified']], function() {
    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
    Route::get('/checkoutsuccess', 'CheckoutController@orderConfirmed')->name('checkout.success');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

/* Customers routes */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/myorders', 'HomeController@showOrders')->name('auth.users.orders');
Route::get('/home/myinfos', 'HomeController@showCustomerInfos')->name('auth.users.infos');
Route::get('/home/myaddress', 'HomeController@showCustomerAddress')->name('auth.users.addresses');

