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

Route::get('/about', function(){
    return view('about');
});

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/membership/register', function(){
    return view('membership.register');
});

Route::get('/products', function(){
    return view('products.index');
});

Route::get('/products/details', function(){
    return view('products.details');
});

Route::get('membership/user', function(){
  return view('membership.user');

});
