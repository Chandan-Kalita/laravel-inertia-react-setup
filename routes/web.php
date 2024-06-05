<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/home', function () {
    return inertia('Home');
});
Route::get('/about', function () {
    return inertia('About');
});

Route::get('/:id', function ($id) {
    return $id;
    
});