<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', 'Static_page@about');
Route::get('/contact', 'Static_page@contact');
Route::get('/help', 'Static_page@help');
Route::get('/', 'Static_page@home');
Route::post('/user/create', 'Users@store');
Route::get('/user/create', 'Users@create');
Route::get('/user/{id}', 'Users@show')->middleware('auth');
Route::get('/login', 'SessionsController@login');
Route::post('/login', 'SessionsController@dologin');
Route::get('/logout', 'SessionsController@logout');



// Route::resource('/user', 'Users');
// Route::get('/user/{id}', 'Users@show');

