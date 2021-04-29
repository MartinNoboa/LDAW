<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/setup', function () {
    return view('setupFramework.landing');
})->name('atras');


Route::get('/samuel', function () {
    return view('setupFramework.samuel');
})->name('samuel');

Route::get('/martin', function () {
    return view('setupFramework.martin');
})->name('martin');



    


Route::get('/iniciarSesion', function () {
    return view('auth.registrar');
})->name('iniciarSesion');

Route::get('/', function () {
    return view('index');
})->name('landing');


    

