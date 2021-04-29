<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la base de datos
use Illuminate\Support\Facades\DB;
class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titles")->insert([
            //id, nombre, edicion, version, aprobado, descripcion, path
            // juegos aprobados (6)
            [
                //pacman
                "nombre" => "Pacman",
                "edicion" => "Estandar",
                "version" => "Fisica",
                "aprobado" => 1,
                "descripcion" => "Juego clasico de Pacman.", 
                "path" => "img/pac-man.jpg",
            ], 
            [
                //fifa 2020
                "nombre" => "Fifa 2020",
                "edicion" => "Champions",
                "version" => "Fisica",
                "aprobado" => 1,
                "descripcion" => "Juego de futbol.", 
                "path" => "img/fifa20.jpg",
            ], 
            [
                //For honor
                "nombre" => "For Honor",
                "edicion" => "Estandar",
                "version" => "Fisica",
                "aprobado" => 1,
                "descripcion" => "For Honor es un videojuego de acción en tercera persona que destacó por su sistema de combate tridireccional.", 
                "path" => "img/for-honor.jpg",
            ], 
            [
                // Spider-man
                "nombre" => "Spider-man",
                "edicion" => "Estandar",
                "version" => "Fisica",
                "aprobado" => 1,
                "descripcion" => "Peter Parker es un chico de 23 años, becario en un laboratorio Whilst y próximo a graduarse de la universidad. ​ 
                                  Peter ha sido el Hombre Araña por ocho años y se ha desempeñado como el protector de la Ciudad de Nueva York.", 
                "path" => "img/spider-man.jpg",
            ], 
            [
                // Tomb Raider
                "nombre" => "Tomb Raider",
                "edicion" => "Estandar",
                "version" => "Fisica",
                "aprobado" => 1,
                "descripcion" => "Tomb Raider es un videojuego de acción-aventura desarrollado por Crystal Dynamics y distribuido por Square Enix. 
                                  Es el décimo título de la serie Tomb Raider y el quinto título desarrollado por Crystal Dynamics.", 
                "path" => "img/tomb-raider.jpg",
            ], 
            [
                // AC Odyssey
                "nombre" => "Assassin's Creed Odyssey",
                "edicion" => "Estandar",
                "version" => "Fisica",
                "aprobado" => 1,
                "descripcion" => "Está ambientado dentro de los años 431 a 422 AC, narra una historia acerca de la Guerra del Peloponeso entre Atenas y Esparta, 
                                  concretamente en la Antigua Grecia, cuna de la civilización occidental..", 
                "path" => "img/pac-man.jpg",
            ],
            // juegos no aprobados (2)
            [
                // Smite
                "nombre" => "Smite",
                "edicion" => "Estandar",
                "version" => "Digital",
                "aprobado" => 0,
                "descripcion" => "SMITE es un videojuego de acción MOBA en tercera persona.", 
                "path" => "img/smite.png",
            ], 
            [
                // Cuphead
                "nombre" => "Cuphead",
                "edicion" => "Estandar",
                "version" => "Fisica",
                "aprobado" => 0,
                "descripcion" => "Cuphead es un videojuego de plataformas de scroll lateral en 2D de tipo \"shot 'em up\" ya que se pueden recolectar poderes y modificarlos.", 
                "path" => "img/cuphead.jpg",
            ]
        ]);
    }
}
