<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/hubungi', [ContactController::class, 'index'])->name('hubungi');
Route::post('/hubungi/submit', [ContactController::class, 'submit'])->name('hubungi.submit');
Route::post('/hubungi/kirim', [ContactController::class, 'send'])->name('hubungi.kirim');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/hubungi', function () {
    return view('hubungi');
});