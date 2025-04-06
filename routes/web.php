<?php

use App\Filament\Resources\TempatMakanResource;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\TempatMakanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;

Route::get('/', function () {
    return view('index');
})->name('beranda');

Route::get('/wisata', [WisataController::class, 'index']);

Route::get('/penginapan', [PenginapanController::class, 'index']);

Route::get('/makan', [TempatMakanController::class, 'index']);