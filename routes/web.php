<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index.index');
});


Route::get('/login', function () {
    return view('pages.auth');
});

Route::get('/register', function () {
    return view('pages.register');
});
