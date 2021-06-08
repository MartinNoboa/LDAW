<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Console;


class ConsoleController extends Controller
{
    //

    public function index(){
        
        $consoles = Console::all();
        return $consoles;
    }
}
