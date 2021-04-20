<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
class PermitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table("permits")->insert([
            //id,permiso,descripcion, created_at(N), updated_at(N)
            [
                "permiso" => "manejarAdministradores", 
                "descripcion" => "Permite registrar o eliminar un administrador",
            ],
            [
                "permiso" => "editarTitulos", 
                "descripcion" => "Agregar,editar y eliminar titulos de la pagina",
            ], 
            [
                "permiso" => "verTitulos", 
                "descripcion" => "Leer informacion adicional sobre tituols de la pagina",
            ],  
        ]);
    }
}
