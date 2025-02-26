<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/coachings', function () {
    return view('coachings');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/apply', function () {
    return view('apply');
});

Route::get('/visas', function () {
    return view('visas');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});