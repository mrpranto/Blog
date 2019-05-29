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
    return view('frontend.home.home');
});



Route::get('/post', function () {
    return view('frontend.post.post-details');
});



Route::get('/login', function () {
    return view('frontend.auth.login');
});



Route::get('/register', function () {
    return view('frontend.auth.registration');
});

Route::get('/contact', function () {
    return view('frontend.contact.contact');
});
