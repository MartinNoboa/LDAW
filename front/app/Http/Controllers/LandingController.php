<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\Title;

class LandingController extends Controller
{
    //

    public function index(){

        
        $titles=Title::aprobados();
        //dd($titles);

        return view('index',compact('titles'));

    }
}
