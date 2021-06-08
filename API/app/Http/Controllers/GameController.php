<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\Games;
use App\Models\Console;
use App\Models\Condition;
use App\Models\characteristics_games;

class GameController extends Controller
{
    //
    public function store(Request $request){

        $game = new Games; 
        $game->nombre = $request->nombre;
        $game->title_id = $request->title_id;

        $game->save();

        $game->id;

        return response([
            "success" => true,
            "message" => "El juego ha sido agregado.",
            "id" => $game->id 
        ], 200);

    }
    
}
