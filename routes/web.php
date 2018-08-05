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

Route::get('/', 'HomeController@index');
Route::get('/biography', 'BiographyController@index');
Route::get('/videos', 'VideoController@index');
Route::get('/guests', 'GuestController@index');
Route::get('/episodes', 'EpisodeController@index');
Route::get('/gallery', 'GalleryController@index');
//Route::get('/testimonials','TestimonialController@index');
Route::get('/admin', 'AdminAuth\AuthController@showLogin');
Route::post('/admin', 'AdminAuth\AuthController@login');
Route::get('/c',function(){
    \App\User::create([
        'name' => "pop",
        'email' => "pop@p.com",
        'password' => Hash::make("pop"),
        'photo' => "Hello",
    ]);
    return redirect('/admin');
});
Route::group(['middleware' => ['admin']],function(){
    Route::get('/dashboard','Admin\AdminController@dashboard');
    Route::group(['prefix' => 'dashboard'],function(){
        Route::get('/search','SearchController@index');
        Route::post('/search','SearchController@show');
        Route::resource('personal', 'PersonalController')->except([
            'index'
        ]);
        Route::resource('biography', 'BiographyController')->except([
            'index'
        ]);
        Route::resource('video', 'VideoController')->except([
            'index'
        ]);
        Route::resource('guest', 'GuestController')->except([
            'index'
        ]);
        Route::resource('episode', 'EpisodeController')->except([
            'index'
        ]);
        Route::resource('gallery', 'GalleryController')->except([
            'index'
        ]);
        Route::resource('testimonial', 'TestimonialController')->except([
            'index'
        ]);
    });
    Route::get('/logout','AdminAuth\AuthController@logout');
});
