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
});

Route::get('/characters', function () {
    return view('guests.characters');
});

Route::get('/comics', function () {
    return view('guests.comics');
});

Route::get('/movies', function () {
    return view('guests.movies');
});
