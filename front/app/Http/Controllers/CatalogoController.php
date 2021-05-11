<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;

class CatalogoController extends Controller
{
    public function index(){
        //$catalogo=Catalogo::juegos();
        $catalogo=Catalogo::titulos();
        //dd($catalogo);
        return view('index')->with('catalogo',$catalogo);
    }
}
