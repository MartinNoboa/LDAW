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

Route::get('/ejemplo', function () {
    return view('landing');
})->name('atras');


Route::get('/samuel', function () {
    return view('samuel');
})->name('samuel');

Route::get('/martin', function () {
    return view('martin');
})->name('martin');



Route::get('/laravel', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
