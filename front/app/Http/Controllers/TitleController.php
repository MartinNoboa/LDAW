<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model
use App\Models\Title;

class TitleController extends Controller
{
    //
    public function index(){
        $titles = Title::getTitles();

        return view('juegoPendiente', compact('titles'));

    }

    public function list(){
       
        $titles = Title::getAll();

        return view('titlesList', compact('titles'));

    }

    public function create(Request $request){
        ///dd($request->file('imagen'));

        $request->validate([
            'nombre' => 'required',
            'edicion' => 'required',
            'version' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        //dd($request);
        
        $data=[
        'nombre' => $request ->input('nombre'),
        'edicion' => $request ->input('edicion'),
        'version' => $request -> input('version'),
        'descripcion' => $request -> input('descripcion'),
        'path' => $request ->file('imagen')->store('public')
        ];


        
        //dd($data);
        $result =  Title::newTitle($data);
        $wasSuccessful = $result['success'];
        $message = $result['message'];

        //dd($result);
        return back()->with('mensaje', $message);

    }

    public function aprobar($id){
        
        //dd($id);
        $result = Title::aprobar($id);
        
        $wasSuccessful = $result['0'];
        $message = $result['1'];

        return back()->with('mensaje', $message);
    }
    

    public function eliminar($id){

        //dd($id);
        
        $result = Title::destroy($id);

        $wasSuccessful = $result[0];
        $message = $result[1];

        return back()->with('mensaje', $message);

    }

    public function sugerir(Request $request){

        $request->validate([
            'nombre' => 'required',
            'version' => 'required',
            'edicion' => 'required',
            'descripcion' => 'required',
        ]);

        $datosUsuario = request()->all();
        $result = $this->agregar($datosUsuario);

        return redirect("/panel/games");
    }

    public function agregar(array $data){
        return Title::create([
            'nombre' => $data['nombre'],
            'version' => $data['version'],
            'edicion' => $data['edicion'],
            'aprobado' => 0,
            'descripcion' => $data['descripcion'],
        ]);
    }

}
