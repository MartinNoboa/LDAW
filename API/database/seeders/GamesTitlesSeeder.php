<?php

namespace Database\Seeders;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GamesTitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("games_titles")->insert([
            //id"game_id,title_id,created at,edited at
            [
                "game_id" => 1,
                "title_id" => 1, //pacman
            ], 
            [
                "game_id" => 2,
                "title_id" => 3, //For Honor
            ], 
            [
                "game_id" => 3,
                "title_id" => 2, //Fifa 2020
            ],
            [
                "game_id"=> 4,
                "title_id"=> 4, //Spider-man
            ],
            [
                "game_id"=>5,
                "title_id"=>6, //AC Odyssey
            ],
            [
                "game_id"=>6,
                "title"=>1, //Pacman
            ],
            [
                "game_id"=>7,
                "title_id"=>5, //Tomb Raider
            ],
            [
                "game_id"=>8,
                "title_id"=>4, //Spider-man
            ],
            [
                "game_id"=>9,
                "title_id"=>1, //Pacman
            ]
        ]);
    }
}
