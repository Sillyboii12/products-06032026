<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    echo "<h1>About this page</h1>";
});

Route::get('/info', function(){
    return view('products.info');
});