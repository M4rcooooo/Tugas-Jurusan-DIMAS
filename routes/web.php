<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('beranda');   
})->name('beranda');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/data-guru', function () {
    return view('data-guru');
})->name('data-guru');
Route::get('/mata-pelajaran', function () {
    return view('mata-pelajaran');
})->name('mata-pelajaran');
Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

