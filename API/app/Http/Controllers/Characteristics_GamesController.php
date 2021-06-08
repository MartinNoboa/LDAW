<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\characteristics_games;
use Illuminate\Support\Facades\DB;


class Characteristics_GamesController extends Controller
{
    //

    public function store(Request $request){
        
        
        $charac= new characteristics_games; 
        $charac->console_id = $request->idconsole;
        $charac->condition_id = $request->idcondition;
        $charac->game_id = $request->game_id;



        $charac->save();

        return response([
            "success" => true,
            "message" => "El juego ha sido agregado."
        ], 200);

    }
}
