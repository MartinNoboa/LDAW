<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model
use App\Models\Title;

class TitleController extends Controller
{
    //
    public function create(Request $request){
        ///dd($request->file('imagen'));
        
        $data=[
        'nombre' => $request ->input('nombre'),
        'edicion' => $request ->input('edicion'),
        'version' => $request -> input('version'),
        'descripcion' => $request -> input('descripcion'),
        'path' => $request ->file('imagen')->store('public')
        ];


        
        //dd($data);
        $result =  Title::newTitle($data);

        //dd($result);
        return back()->with('mensaje', 'Titulo agregado!');

    }

    public function eliminar($id){

        $result = Title::destroy($id);

        $wasSuccessful = $result[0];
        $message = $result[1];

    }

}
