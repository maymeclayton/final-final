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

Route::resource('products', 'ProductController')->middleware('auth');

// Route::resource('profile', 'ProfileController')->middleware('auth');

Route::get('/profile', 'ProfileController@edit')->middleware('auth');

Route::put('/profile', 'ProfileController@update')->middleware('auth');

Route::get('/messages/{product_number}', 'MessageController@edit')->middleware('auth');

Route::post('/messages/{product_number}', 'MessageController@store')->middleware('auth');

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/cart', function(){
    return view('cart');
});

// Route::get('/products', function(){
//     $products = \App\Product::get();
//     return view('products.index', compact('products'));
// });

Route::get('/products/details', function(){
    $products = \App\Product::find($id);
    return view('products.details', compact('products'));
});

route::get('/products/consign', function(){
    return view('products.consign');
});

Route::get('membership/user', function(){
  return view('membership.user');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
