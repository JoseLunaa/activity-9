<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();