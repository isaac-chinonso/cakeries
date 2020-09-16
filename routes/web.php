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

Route::get('/', 'Frontend\PageController@index');

Route::get('/about', 'Frontend\PageController@about');

Route::get('/testimonials', 'Frontend\PageController@testimonial');

Route::get('/contact', 'Frontend\PageController@contact');

Route::get('/single-cake-view', 'Frontend\PageController@singlecake');

Route::get('/signin', 'Frontend\PageController@signin');

Route::get('/register', 'Frontend\PageController@register');

Route::get('/manage-account', 'Frontend\PageController@myaccount');

Route::get('/my-order', 'Frontend\PageController@myorder');

Route::group([ 'middleware' => 'web', 'prefix' => 'cake', 'before' => 'cake' ], function(){

    Route::get('/allcakes', 'Frontend\PageController@allcake');

    Route::get('/wedding', 'Frontend\PageController@wedding');

    Route::get('/men', 'Frontend\PageController@men');

    Route::get('/specialevent', 'Frontend\PageController@specialevent');

    Route::get('/boy', 'Frontend\PageController@boy');

    Route::get('/cupcake', 'Frontend\PageController@cupcake');

    Route::get('/girl', 'Frontend\PageController@girl');

    Route::get('/lady', 'Frontend\PageController@lady');

});

Route::group([ 'middleware' => 'web', 'prefix' => 'admin', 'before' => 'admin' ], function(){

    Route::get('/dashboard', 'Admin\PageController@admindashboard');

});