<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;


class ConditionController extends Controller
{
    //

    public function index(){
        
        $condition = Condition::all();
        return $condition;
    }
}
