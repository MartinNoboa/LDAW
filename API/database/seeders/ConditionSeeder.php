<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("conditions")->insert([
            //id,condicion,descripcion
            [
                "condicion" => "Nuevo",
                "descripcion" => "El juego no fue usado. Perfectas condiciones.", 
            ], 
            [
                "condicion" => "Seminuevo",
                "descripcion" => "El juego se uso muy pocas veces. Excelentes condiciones.", 
            ], 
            [
                "condicion" => "Usado",
                "descripcion" => "El juego ya fue usado. Buenas condiciones.", 
            ]
        ]);
    }
}
