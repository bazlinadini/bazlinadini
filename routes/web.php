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

// Halaman Utama
Route::get('/', function () {
    return view('/layouts/app');
})->name('home');

// Halaman Login
Route::get('/login', function () {
    return view('login'); // Halaman login
})->name('login');

// Halaman Golongan Index
Route::get('/golongan/index', function () {
    return view('golongan/index');
})->name('index');

// Halaman Pelanggan Index
Route::get('/pelanggan/index', function () {
    return view('pelanggan/index');
})->name('index');

// Halaman Users Index
Route::get('/users/index', function () {
    return view('users/index');
})->name('index');

// Rute Terproteksi dengan Middleware Auth
Route::middleware(['auth'])->group(function () {
    // Halaman Profil
    Route::get('/profil', function () {
        return view('profil'); // Halaman profil user
    })->name('profil');
});