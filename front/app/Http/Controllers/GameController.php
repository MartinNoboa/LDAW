<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\Console;
use App\Models\Condition;
use App\Models\Games;
use App\Models\Characteristic_Games;

class GameController extends Controller
{
    //

    public function index(){

        $titles=Title::aprobados();
        $consoles=Console::getAll();
        $conditions=Condition::getAll();

        //dd($titles);

        return view('newGame', compact('titles'), compact('consoles'))->with('conditions', $conditions);

    }


    public function create(Request $request){
        
        $dtitle = $request ->input('titulo');
        //dd($dtitle);
        $sizetitle = strlen($dtitle);
        $stitle = substr($dtitle, 1, ($sizetitle-1));
        $idtitle = substr($dtitle, 0, 1);


        $dconsole = $request ->input('consola');
        $sizeconsole = strlen($dconsole);
        $idconsole = substr($dconsole, 0, 1);
        $sconsole = substr($dconsole, 1, ($sizeconsole-1));

        $dcondition= $request ->input('condicion');
        $sizecondition = strlen($dcondition);
        $idcondition = substr($dcondition, 0, 1);
        $scondition = substr($dcondition, 1, ($sizecondition-1));
        
        
        
        $data=[
            'title_id' => $idtitle,
            'nombre' => $stitle,
            'idconsole' => $idconsole,
            'consola' => $sconsole,
            'idcondition' => $idcondition,
            'condicion' => $scondition
        ];

        

        $result = Games::crear($data);
        $idgame = $result['id'];
        
        $data1=[
            'game_id' => $idgame,
            'idconsole' => $idconsole,
            'consola' => $sconsole,
            'idcondition' => $idcondition,
            'condicion' => $scondition
        ];
        
        
        
        $characteristic = Characteristic_Games::crear($data1);

        $message="";

        if($result['success']== true && $characteristic['success'] == true){
            $message = $result['message'];
            
        }else{
            $message="Ha ocurrido un error";
        }
        
        return back()->with('mensaje', $message);
       
    }


}
