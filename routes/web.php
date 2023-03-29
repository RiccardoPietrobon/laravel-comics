<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/comics', function () {
    $comics = config('comicdb'); //accedo al file in cui è inserito l'array
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/description/{$series}', function ($series) {
    $comics = config('comicdb');
    return view('description', compact('comics'));
})->name('description');
