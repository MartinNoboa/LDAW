<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class Games 
{
    use HasFactory;

    public static function crear($data){
         
        //dd($title);
         $token = session('token');
         $response=Http::withToken($token)->post(env('API_URL'). "games", $data);
         //dd($response->body());
 
         return $response->json();
    }

    public static function list(){
        
        //dd($title);
         $token = session('token');
         $response=Http::withToken($token)->get(env('API_URL'). "games");
         //dd($response->body());
 
         return $response->json();
    }

    public static function destroy($id){

        $token = session('token');

        $response=Http::withToken($token)
            ->delete(env('API_URL'). "games/$id");

        //dd($response->body());

        $wasSuccessful = ($response->status() == 200);
        $message = $response->json()['message'];

        return array($wasSuccessful, $message);
    }

    
}
