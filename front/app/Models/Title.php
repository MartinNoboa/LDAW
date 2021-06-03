<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Title 
{
    use HasFactory;

    public static function newTitle($title){

        //dd($title);
        $token = session('token');
        $response=Http::withToken($token)->post(env('API_URL'). "title", ['employee'=>$title]);
        //dd($response);
        return $response->json();
    }
}
