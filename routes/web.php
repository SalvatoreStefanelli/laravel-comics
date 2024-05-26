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
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('guests.characters');
})->name('characters');

Route::get('/comics', function () {

    $volumes = config('comics.books');

    return view('guests.comics', compact('volumes'));

    // dd($volumes);
})->name('comics');

Route::get('/movies', function () {
    return view('guests.movies');
})->name('movies');
