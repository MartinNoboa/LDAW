<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\GameController;

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


Route::get('/registrar', function () {
    return view('auth.registrar');
})->name('registrar');

Route::get('/iniciarSesion', function () {
    return view('auth.iniciar');
})->name('iniciar');


Route::get('/newTitle', function () {
    return view('newTitle');
})->name('titulo');




Route::get('/panel', function () {
    return view('panelGestion');
})->name('panel');

Route::get('/ofertas', function () {
    return view('ofertas');
})->name('ofertas');


Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('/panelAdministrativo', function () {
    return view('admin.panel');
})->name('panelAdmin');

Route::post('/title/crear', [TitleController::class, 'create'] )->name('title.crear');

Route::get('/pendientes', [TitleController::class, 'index'])->name('title.index');

Route::put('/title/update/{id}', [TitleController::class, 'aprobar'])->name('titles.aprobar');

Route::delete('/title/eliminar/{id}', [TitleController::class, 'eliminar'])->name('titles.eliminar');



//Games


Route::get('/newGame', [GameController::class, 'index'])->name('newGame');

Route::post('/game/crear', [GameController::class, 'create'] )->name('game.crear');




    

