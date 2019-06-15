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
    Route::get('/post/{slug}', 'FrontendController@post_details')->name('post');

    Route::get('/category/{slug}', 'FrontendController@category_product')->name('category');


    Route::get('/login', 'UsersController@login')->name('login');
    Route::post('/login', 'UsersController@processLogin')->name('processLogin');

    Route::get('/register', 'UsersController@register')->name('register');
    Route::post('/register', 'UsersController@storeUserInfo')->name('storeUserInfo');


    Route::group(['middleware' => 'auth'], function (){

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/logout', 'UsersController@logout')->name('logout');

    });


});


Route::get('/contact', function () {
    return view('frontend.contact.contact');
})->name('contact');
