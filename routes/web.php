<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. 
| Routes ini akan diload oleh RouteServiceProvider.
|
*/

// Hubungi Kami
Route::get('/hubungi', [ContactController::class, 'index'])->name('hubungi');
Route::post('/hubungi/submit', [ContactController::class, 'submit'])->name('hubungi.submit');
Route::post('/hubungi/kirim', [ContactController::class, 'send'])->name('hubungi.kirim');

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Tentang
Route::get('/tentang', function () {
    return view('tentang');
});

// Halaman Layanan
Route::get('/layanan', function () {
    return view('layanan');
});

// Halaman Artikel
Route::get('/artikel', function () {
    return view('artikel');
});
