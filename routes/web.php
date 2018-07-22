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

Route::get('/','HomeController@index');
Route::get('/biography','BiographyController@index');
Route::get('/videos','VideoController@index');
Route::get('/guests','GuestController@index');
Route::get('/episodes','EpisodeController@index');
Route::get('/gallery','GalleryController@index');
//Route::get('/testimonials','TestimonialController@index');

