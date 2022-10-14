<?php

use App\Http\Controllers\DialisisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TravelingController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('_layouts.guest');
})->name('home');

Route::get('home', [HomeController::class, 'index'])->middleware('auth')->name('home.index');

Route::resource('users', UsersController::class)->middleware('auth', 'admin');
Route::resource('pasien', PasienController::class)->middleware('auth', 'admin');
Route::resource('traveling', TravelingController::class)->middleware('auth', 'admin');
Route::get('dialisis/otomatis/{id}', [DialisisController::class, 'otomatis'])->name('dialisis.otomatis');
Route::resource('dialisis', DialisisController::class)->middleware('auth', 'admin');

require __DIR__ . '/auth.php';
