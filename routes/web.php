<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/#members', [IndexController::class, 'index'])->name('member');
Route::get('/#live', [IndexController::class, 'index'])->name('live');
Route::get('/#gallery', [IndexController::class, 'index'])->name('gallery');
Route::get('/#merch', [IndexController::class, 'index'])->name('merch');
Route::get('/event', [IndexController::class, 'event'])->name('event');
