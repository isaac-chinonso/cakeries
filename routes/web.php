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

Route::get('/login', 'Frontend\PageController@login')->name('login');

Route::get('/register', 'Frontend\PageController@register');

Route::post('/sigin', 'Auth\UserController@signin')->name('signin');

Route::get('/logout', 'Auth\UserController@logout')->name('logout');

Route::post('/savelogin', 'Auth\UserController@savelogin')->name('savelogin');

Route::group(['middleware' => 'web', 'prefix' => 'cake', 'before' => 'cake'], function () {

    Route::get('/allcakes', 'Frontend\PageController@allcake');

    Route::get('/wedding', 'Frontend\PageController@wedding');

    Route::get('/men', 'Frontend\PageController@men');

    Route::get('/specialevent', 'Frontend\PageController@specialevent');

    Route::get('/boy', 'Frontend\PageController@boy');

    Route::get('/cupcake', 'Frontend\PageController@cupcake');

    Route::get('/girl', 'Frontend\PageController@girl');

    Route::get('/lady', 'Frontend\PageController@lady');
});

Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('/manage-account', 'Frontend\PostController@myaccount')->name('myaccount');

    Route::get('/my-order', 'Frontend\PostController@myorder');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\PageController@admindashboard')->name('admindashboard');

    Route::get('/categories', 'Admin\PageController@admincategories');

    Route::post('/save-category', 'Admin\PostController@savecategory');

    Route::post('/update-category/{id}', 'Admin\PostController@updatecategory')->name('updatecategory');

    Route::get('/delete-category/{id}', 'Admin\PostController@deletecategory')->name('deletecategory');

    Route::get('/users', 'Admin\PageController@adminusers');

    Route::get('/orders', 'Admin\PageController@adminorder');

    Route::get('/products', 'Admin\PageController@adminproduct');

    Route::get('/archived-products', 'Admin\PageController@archivedproduct');

    Route::post('/save-product', 'Admin\PostController@saveproduct');

    Route::get('/delete-product/{id}', 'Admin\PostController@deleteproduct')->name('deleteproduct');

    Route::get('/activate-product/{id}', 'Admin\PostController@activateproduct')->name('activateproduct');

    Route::get('/deactivate-product/{id}', 'Admin\PostController@deactivateproduct')->name('deactivateproduct');

});
