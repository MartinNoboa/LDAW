<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model
use App\Models\Title;

class TitleController extends Controller
{
    //

    public function create(Request $request){

        //dd($request);

        $data=[
        'nombre' => $request ->input('nombre'),
        'edicion' => $request ->input('edicion'),
        'version' => $request -> input('version'),
        'descripcion' => $request -> input('descripcion')
        ];

       $result =  Title::newTitle($data);


    }
}
