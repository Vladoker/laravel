<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $post = App\Models\Post::get();
    dd($post);

    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
