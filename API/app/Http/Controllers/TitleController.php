<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    //

    public function index(){
        
        $titles = Title::where('aprobado', '0')->get();
        return $titles;
    }

    public function show(){

        $titles = Title::where('aprobado', '1')->get();
        return $titles;
    }

  
    public function store(Request $request){
         
        $title = new Title; 
        $title->nombre = $request->nombre;
        $title->edicion = $request->edicion;
        $title->version = $request->version;
        $title->aprobado = 0;
        $title->descripcion = $request->descripcion;
        $title->path = $request->path;
        
        $title->save();
        
        

        return response([
            "id" => $title->id,
            "worker" => $title,
            "success" => true,
            "message" => "El titulo ha sido agregado."
        ], 200);

    }


    public function aprobar($id)
    {
        //
        
        $title = Title::find($id);
        
        if(!$title){
            return response([
                "id" => null,
                "success" => false,
                "message" => "No existe un titulo con el id $id."
            ], 400);
        }

        
        $title->aprobado = 1;
        $title->save();

        return response([
            "id" => $id,
            "success" => true,
            "message" => "El titulo ha sido aprobado con exito."
        ], 200);
    }
 
    public function destroy($id){

        $title = Title::find($id);

        if(!$title){
            return response([
                "id" => null,
                "success" => false,
                "message" => "No existe un titulo con el id $id."
            ], 400);
        }

        $title->delete();

        return response([
            "id" => $id,
            "success" => true,
            "message" => "El título ha sido eliminado."
        ], 200);
    }
}
