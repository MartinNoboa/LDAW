<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Title extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'edicion',
        'version',
        'aprobado',
        'descripcion',
    ];

   
    public static function getTitles(){
        $token = session('token');
        $response=Http::withToken($token)
        ->get(env('API_URL'). 'title');
        //dd($response);
    return $response->json();
    }

    public static function aprobados(){
        $token = session('token');
        $response=Http::withToken($token)
            ->get(env('API_URL'). 'title/aprobados');
        //dd($response->body());
        return $response->json();
    }

    public static function newTitle($data){

        //dd($title);
        $token = session('token');
        $response=Http::withToken($token)->post(env('API_URL'). "title", $data);
        //dd($response->body());

        return $response->json();
    }

    public static function aprobar($id){
        
                
        $token = session('token');

        $response=Http::withToken($token)
            ->put(env('API_URL'). "title/aprobar/$id");
        //dd($response->body());
        
        $wasSuccessful = ($response->status() == 200);
        $message = $response->json()['message'];

        return array($wasSuccessful, $message);
    }
    

    


    public static function destroy($id){
        
        //dd($id);
        
        $token = session('token');

        $response=Http::withToken($token)
            ->delete(env('API_URL'). "title/$id");

        $wasSuccessful = ($response->status() == 200);
        $message = $response->json()['message'];

        return array($wasSuccessful, $message);
    }
}
