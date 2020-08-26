<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontController@index')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/contacts', 'FrontController@contacts')->name('contacts');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/article/{slug}', 'BlogController@show')->name('article');

Route::get('/404', function(){ return view('404'); })->name('404');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
