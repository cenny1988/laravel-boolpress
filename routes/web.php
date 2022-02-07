<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'GuestController@home')->name('home');

Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

Route::get('/register', 'GuestController@register') -> name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/post/create', 'HomeController@createPost') -> name('post.createPost');
Route::post('/post/store', 'HomeController@storePost') -> name('post.storePost');