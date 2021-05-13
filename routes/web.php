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

Route::get('/comic/{id}', function($id) {
    $comic= config('comics');
    return view('page')->with('comic', $comic[$id]);
})->name('comic');

Route::get('/comics', function () {
    $database = config('comics');
    return view('comics')->with('comics', $database);
})->name('comics');


