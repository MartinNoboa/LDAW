<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Console 
{
    use HasFactory;

    public static function getAll(){
       
        $token = session('token');
        $response=Http::withToken($token)
            ->get(env('API_URL'). 'console');
        //dd($response->body());
        return $response->json();

    }

    
}
