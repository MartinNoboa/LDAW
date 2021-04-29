<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         $this->call([
             /* 
             * Tablas de RBAC
             */
            //Tablas sin llaves foráneas
            UserSeeder::class,
            RoleSeeder::class,
            PermitSeeder::class,
            //Tablas de relacion
            PermitRoleSeeder::class,
            RoleUserSeeder::class,

            /* 
            * Tablas de caractericticas de juegos
            */
            ConsoleSeeder::class,
            ConditionSeeder::class,

            /* 
            * Tablas relevantes a los juegos
            */
            TitleSeeder::class,
            
            /* 
            * Tablas relevantes a la transaccion de 2 juegos
            */
            StatusSeeder::class,
            
        ]);
    }
}
