<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/keanggotaan', function () {
    return view('keanggotaan');
})->name('keanggotaan');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('/dokumen', function () {
    return view('dokumen');
})->name('dokumen');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');