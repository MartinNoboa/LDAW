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
            //Tablas sin llaves foráneas
            UserSeeder::class,
            RoleSeeder::class,
            PermitSeeder::class,
           
            //Tablas de relacion
            PermitRoleSeeder::class,
            RoleUserSeeder::class,
            
        ]);
    }
}
