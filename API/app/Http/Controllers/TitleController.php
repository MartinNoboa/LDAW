<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    //

    public function store(Request $request){
        
        
        $title->nombre = $request->nombre;
        $title->edicion = $request->edicion
        $title->version = $request->version;
        $title->aprobado = '0';
        $title->descripcion = $request->descripcion
        $title->path = $request->path
        
        $title->save;


        return $title;

        return response([
            "id" => $id,
            "worker" => $worker,
            "success" => true,
            "message" => "El empleado ha sido eliminado."
        ], 200);




    }
}
