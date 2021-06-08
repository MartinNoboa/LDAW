<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Characteristic_Games
{
    public static function crear($data){
        //dd($title);
        $token = session('token');
        $response=Http::withToken($token)->post(env('API_URL'). "characteristic", $data);
        //dd($response->body());

        return $response->json();
    }
}
