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
    $comics = config('data.comics');

    return view('guests.welcome', compact('comics'));
})->name('home');

Route::get('/product-1', function () {
    $comic = config('data.comics.0');
    return view('guests.product-1', compact('comic'));
})->name('product-1');
