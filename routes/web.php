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

Route::get('/product', function () {
    $comic = config('data.comics');
    return view('guests.product', compact('comic'));
})->name('product');

Route::get('/product0', function () {
    $comic = config('data.comics.0');
    return view('guests.product', compact('comic'));
})->name('product0');

Route::get('/product1', function () {
    $comic = config('data.comics.1');
    return view('guests.product', compact('comic'));
})->name('product1');

Route::get('/product2', function () {
    $comic = config('data.comics.2');
    return view('guests.product', compact('comic'));
})->name('product2');
Route::get('/product3', function () {
    $comic = config('data.comics.3');
    return view('guests.product', compact('comic'));
})->name('product3');

Route::get('/product4', function () {
    $comic = config('data.comics.4');
    return view('guests.product', compact('comic'));
})->name('product4');

Route::get('/product5', function () {
    $comic = config('data.comics.5');
    return view('guests.product', compact('comic'));
})->name('product5');

Route::get('/product6', function () {
    $comic = config('data.comics.6');
    return view('guests.product', compact('comic'));
})->name('product6');

Route::get('/product7', function () {
    $comic = config('data.comics.7');
    return view('guests.product', compact('comic'));
})->name('product7');

Route::get('/product8', function () {
    $comic = config('data.comics.8');
    return view('guests.product', compact('comic'));
})->name('product8');

Route::get('/product9', function () {
    $comic = config('data.comics.9');
    return view('guests.product', compact('comic'));
})->name('product9');

Route::get('/product10', function () {
    $comic = config('data.comics.10');
    return view('guests.product', compact('comic'));
})->name('product10');

Route::get('/product11', function () {
    $comic = config('data.comics.11');
    return view('guests.product', compact('comic'));
})->name('product11');
