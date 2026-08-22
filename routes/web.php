<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('beranda');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/data-guru', function () {
    return view('data-guru');
});
Route::get('/mata-pelajaran', function () {
    return view('mata-pelajaran');
});
Route::get('/contact', function () {
    return view('contact');
});
