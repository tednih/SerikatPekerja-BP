<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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



//Member
// Route::middleware(['auth'])->group(function () {
//     Route::get('/index', [MemberController::class, 'index'])
//         ->name('member.index');

//     Route::get('/laporanKeuangan', [MemberController::class, 'laporanKeuangan'])
//         ->name('member.laporanKeuangan');
// });

Route::middleware('auth')->prefix('member')->name('member.')->group(function () {
    Route::get('/index', [MemberController::class, 'index'])->name('index');

    Route::get('/pkb', fn() => view('member.pkb'))->name('pkb');
    Route::get('/keuangan', fn() => view('member.keuangan'))->name('keuangan');
    Route::get('/pengaduan', fn() => view('member.pengaduan'))->name('pengaduan');
});


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

