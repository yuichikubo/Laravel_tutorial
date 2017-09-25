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
Route::get('/signup', 'Users@signup');

