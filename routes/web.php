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

Route::get('/', 'Frontend\PageController@index')->name('homepage');

Route::get('/about', 'Frontend\PageController@about');

Route::get('/testimonials', 'Frontend\PageController@testimonial');

Route::get('/contact', 'Frontend\PageController@contact');

Route::get('/product-details/{id}/{slug?}', 'Frontend\PageController@productdetails')->name('productdetails')->where('slug', '[\w\d\-\_]+');

Route::get('/add-to-cart/{product}', 'Frontend\CartController@addtocart')->name('addtocart');

Route::get('/cart', 'Frontend\CartController@cart');

Route::get('/delete/{id}', 'Frontend\CartController@removeItem')->name('deleteitem');

Route::get('/login', 'Frontend\PageController@login')->name('login');

Route::get('/register', 'Frontend\PageController@register');

Route::post('/sigin', 'Auth\UserController@signin')->name('signin');

Route::get('/logout', 'Auth\UserController@logout')->name('logout');

Route::post('/savelogin', 'Auth\UserController@savelogin')->name('savelogin');

Route::group(['middleware' => 'web', 'prefix' => 'cake', 'before' => 'cake'], function () {

    Route::get('/allcakes', 'Frontend\PageController@allcake');

    Route::get('/wedding-cakes', 'Frontend\PageController@wedding');

    Route::get('/men-cakes', 'Frontend\PageController@men');

    Route::get('/specialevent-cakes', 'Frontend\PageController@specialevent');

    Route::get('/boy-cakes', 'Frontend\PageController@boy');

    Route::get('/cupcake', 'Frontend\PageController@cupcake');

    Route::get('/girl-cakes', 'Frontend\PageController@girl');

    Route::get('/lady-cakes', 'Frontend\PageController@lady');
});

Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('/manage-account', 'Frontend\PostController@myaccount')->name('myaccount');

    Route::post('/update-profile', 'Frontend\PostController@updateprofile');

    Route::get('/cake', 'Frontend\PageController@cakedetails');

    Route::get('/place-order', 'Frontend\PageController@placeorder');

    Route::post('/save-order', 'Frontend\PostController@saveorder');

    Route::get('/my-order', 'Frontend\PostController@myorder')->name('myorder');

});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\PageController@admindashboard')->name('admindashboard');

    Route::get('/categories', 'Admin\PageController@admincategories');

    Route::post('/save-category', 'Admin\PostController@savecategory');

    Route::post('/update-category/{id}', 'Admin\PostController@updatecategory')->name('updatecategory');

    Route::get('/delete-category/{id}', 'Admin\PostController@deletecategory')->name('deletecategory');

    Route::get('/users', 'Admin\PageController@adminusers');

    Route::get('/orders', 'Admin\PageController@adminorder');

    Route::get('/accept-order/{id}', 'Admin\PostController@acceptorder')->name('acceptorder');

    Route::get('/delete-order/{id}', 'Admin\PostController@deleteorder')->name('deleteorder');

    Route::get('/products', 'Admin\PageController@adminproduct');

    Route::get('/archived-products', 'Admin\PageController@archivedproduct');

    Route::get('/featured-products', 'Admin\PageController@featuredproduct');

    Route::post('/save-product', 'Admin\PostController@saveproduct');

    Route::get('/delete-product/{id}', 'Admin\PostController@deleteproduct')->name('deleteproduct');

    Route::get('/activate-product/{id}', 'Admin\PostController@activateproduct')->name('activateproduct');

    Route::get('/deactivate-product/{id}', 'Admin\PostController@deactivateproduct')->name('deactivateproduct');

    Route::get('/set-featured-product/{id}', 'Admin\PostController@setfeatured')->name('setfeatured');

});
