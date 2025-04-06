<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('beranda');

Route::get('/wisata', function () {
    return view('wisata');
})->name('wisata');

Route::get('/penginapan', function () {
    return view('penginapan');
})->name('penginapan');

Route::get('/makan', function () {
    return view('makan');
})->name('makan');