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

Route::namespace('Frontend')->group(function (){

    Route::get('/', 'FrontendController@index')->name('home');
    Route::get('/post/{slug}', 'FrontendController@post_details');

    Route::get('/category/{slug}', 'FrontendController@category_product');

    Route::get('/login', 'FrontendController@login')->name('login');
    Route::get('/register', 'FrontendController@register')->name('register');

});


Route::get('/contact', function () {
    return view('frontend.contact.contact');
});
