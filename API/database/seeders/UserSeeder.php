<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        DB::table("users")->insert([
            //id,nombre,apellido,mail, email_verified_at(N), fecha_naciemiento ,remember_token(N), created_at(N),updated_at(N)
            [
                "nombre" => "Martin", 
                "apellido" => "Noboa",
                "email"=> "martinnoboa@gmail.com",
                "password"=> Hash::make("admin"),
                "fecha_nacimiento"=>"2000-10-15"
            ], 
            [
                "nombre" => "Samuel", 
                "apellido" => "Gonzalez",
                "email"=> "samuelgonzalez@gmail.com",
                "password"=> Hash::make("admin"),
                "fecha_nacimiento"=>"1999-11-27"
            ],
        ]);
    }
}
