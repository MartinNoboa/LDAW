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

    public function index(){

        $games=Games::all();
        return $games;
    }

    public function destroy($id){
        $game = Games::find($id);

        if(!$game){
            return response([
                "id" => null,
                "success" => false,
                "message" => "No existe un titulo con el id $id."
            ], 400);
        }
        
        $game->delete();
        
        return response([
            "id" => $id,
            "success" => true,
            "message" => "El título ha sido eliminado."
        ], 200);
    }
    
}
