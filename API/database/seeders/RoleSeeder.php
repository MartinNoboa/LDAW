<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table("roles")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "rol" => "superAdmin", 
                "descripcion" => "Usuario con control absoluto sobre la pagina",
            ],  
            [
                "rol" => "admin", 
                "descripcion" => "Usuario con control sobre la mayoria de la funcionalidad de la pagina",
            ],   
            [
                "rol" => "usuarioRegistrado", 
                "descripcion" => "Usuario que se ha registrado en la pagina. No posee control sobre la funcionalidad de la pagina.",
            ], 
        ]);
    }
}
