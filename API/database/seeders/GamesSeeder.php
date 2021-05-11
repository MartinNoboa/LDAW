<?php

namespace Database\Seeders;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("games")->insert([
            //id,nombre,created at,edited at
            [
                "nombre" => "Pacman",
            ], 
            [
                "nombre" => "For Honor",
            ], 
            [
                "nombre" => "Fifa 2020",
            ],
            [
                "nombre"=> "Spider-man",
            ],
            [
                "nombre"=>"AC Odyssey",
            ],
            [
                "nombre"=>"Pacman",
            ],
            [
                "nombre"=>"Tomb Raider",
            ],
            [
                "nombre"=>"Spider-man",
            ],
            [
                "nombre"=>"Pacman",
            ]
        ]);
    }
}
