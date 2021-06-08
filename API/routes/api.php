<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\Characteristics_GamesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('title', TitleController::class);

Route::apiResource('games', GameController::class);

Route::apiResource('console', ConsoleController::class);

Route::apiResource('condition', ConditionController::class);

Route::apiResource('characteristic', Characteristics_GamesController::class);

Route::put('title/aprobar/{id}', [TitleController::class, "aprobar"]);

Route::get('title/aprobados', [TitleController::class, "aprobados"]);

