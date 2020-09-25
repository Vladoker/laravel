<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', 'FrontController@index')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/contacts', 'FrontController@contacts')->name('contacts');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/article/{slug}', 'BlogController@show')->name('article');
Route::post('/article/{slug}', 'BlogController@store')->name('article');
Route::get('/recipe/{slug}', 'RecipeController@show')->name('recipe');

Route::post('/recipe', 'RecipeController@store')->name('createRecipe');

Route::post('/contacts', 'FrontController@testimonial')->name('createTestimonial');

Route::get('/shop', 'CardController@index');

Route::get('/shop/{slug}', 'CardController@shopDetalis');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('handle-payment', 'PayPalPaymentController@handlePayment')->name('make.payment');
Route::get('cancel-payment', 'PayPalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'PayPalPaymentController@paymentSuccess')->name('success.payment');
