<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PetaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/gempa', function () {
    return view('gempa');
});

Route::get('/peta_stunting', function () {
    return view('peta_stunting');
});

Route::get('/data_stunting', function () {
    return view('data_stunting');
});