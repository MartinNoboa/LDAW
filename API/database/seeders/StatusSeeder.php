<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statuses")->insert([
            /* 
            * No debe confundirse con "aprobacion de los juegos", 
            * esta tabla guarda los posibles estados de una transaccion 
            */ 
            //id,estado_aprobacion, descripcion
            [
                "estado_aprobacion" => "Esperando aprobación",
                "descripcion" => "La oferta ha sido realizada, esperando la aprobación del usuario.", 
            ], 
            [
                "estado_aprobacion" => "Aprobado",
                "descripcion" => "El intercambio fue aceptado.", 
            ], 
            [
                "estado_aprobacion" => "Negada",
                "descripcion" => "El intercambio fue rechazado.", 
            ]
        ]);
    }
}
