<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AuthController;

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


/**
 * Rutas para setup del ambiente de desarrollo
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



/** 
 * Rutas para login, logout y registro de usuarios
*/
Route::get('/registrar', function () {
    return view('auth.registrar');
})->name('registrar');
Route::get('login',[AuthController::class,'login'])->middleware('sesionYaIniciada')->name('login');
Route::post('check',[AuthController::class,'check'])->name("auth.check");
Route::get('panel',[AuthController::class,'panel'])->middleware('sesionIniciada');
Route::get('logout',[AuthController::class,'logout'])->name('logout');



Route::get('/newTitle', function () {
    return view('newTitle');
})->name('titulo');



Route::middleware('can:viewPanel')->group(function() {
    Route::get('/panel', function () {
        return view('panelGestion');
    })->name('panel');
});


Route::middleware('can:viewGame')->group(function() {
    Route::get('/ofertas', function () {
        return view('ofertas');
    })->name('ofertas');
    Route::get('/', function () {
        return view('index');
    })->name('landing');
    Route::post('/title/crear', [TitleController::class, 'create'] )->name('title.crear');
    Route::get('/pendientes', [TitleController::class, 'index'])->name('title.index');
    Route::put('/title/update/{id}', [TitleController::class, 'aprobar'])->name('titles.aprobar');
    Route::delete('/title/eliminar/{id}', [TitleController::class, 'eliminar'])->name('titles.eliminar');
    //Games
    Route::get('/panel/games', function () {
        return view('panelGames');
    })->name('panel.games');
    Route::get('/newGame', [GameController::class, 'index'])->name('newGame');
    Route::get('/listGames', [GameController::class, 'gameslist'])->name('listGames');
    Route::post('/game/crear', [GameController::class, 'create'] )->name('game.crear');
    Route::delete('/game/eliminar/{id}', [GameController::class, 'eliminar'])->name('games.eliminar');
});

    

