<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;

class PermitRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permits_roles")->insert([
            //id,permit_id, role_id, created_at(N), updated_at(N)
            [
                "permit_id" => 1, //manejarAdministradores
                "role_id" => 1,//superAdmin
            ], 
            [
                "permit_id" => 2, //editarTitulos
                "role_id" => 1,//superAdmin
            ], 
            [
                "permit_id" => 2, //editarTitulos
                "role_id" => 2,//admin
            ], 
            [
                "permit_id" => 3, //verTitulos
                "role_id" => 1,//superAdmin
            ],  
            [
                "permit_id" => 3, //verTitulos
                "role_id" => 2,//admin
            ], 
            [
                "permit_id" => 3, //verTitulos
                "role_id" => 3,//usuarioRegistrado
            ], 
        ]);
    }
}
