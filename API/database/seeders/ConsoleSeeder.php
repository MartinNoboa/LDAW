<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("consoles")->insert([
            //id,consola,descripcion
            [
                "consola" => "PS4",
                "descripcion" => "PS4 es la cuarta videoconsola del modelo PlayStation.", 
            ], 
            [
                "consola" => "XBox Series X",
                "descripcion" => "XBox Series X es la cuarta generación de la familia de consolas Xbox.", 
            ], 
            [
                "consola" => "PC",
                "descripcion" => "Las PC son ordenadores que están especialmente diseñados para jugar a videojuegos.", 
            ]
        ]);
    }
}
