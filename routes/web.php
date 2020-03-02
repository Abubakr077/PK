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

Auth::routes();
Route::get('about-us', function () {
    return view('user/about-us');
})->name('about-us');

Route::get('cart', function () {
    return view('user/cart');
})->name('cart');

Route::get('category', function () {
    return view('user/category');
})->name('category');

Route::get('checkout', function () {
    return view('user/checkout');
})->name('checkout');

Route::get('contact', function () {
    return view('user/contact');
})->name('contact');

Route::get('faq', function () {
    return view('user/faq');
})->name('faq');

Route::get('my-account', function () {
    return view('user/my-account');
})->name('my-account');

Route::get('order-history', function () {
    return view('user/order-history');
})->name('order-history');

Route::get('order-information', function () {
    return view('user/order-information');
})->name('order-information');

Route::get('wishlist', function () {
    return view('user/wishlist');
})->name('wishlist');

Route::get('/product/{product_id?}', 'HomeController@showProduct')->name('product');

Route::post('/addtocart', 'CartController@store')->name('addtocart');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return redirect('/home');
})->name('/');
Route::get('home2', function () {
    return redirect('/home');
})->name('home2');


// admin
Route::get('admin/home',function () {
    return view('admin/home');
})->middleware('auth');

Route::resource('admin/products','ProductController');

