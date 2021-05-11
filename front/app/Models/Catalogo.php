<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Catalogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'path',
    ];


    public static function juegos(){
        $juegos = DB::table('games')
        ->join('games_titles','games.id','=','games_titles.game_id')
        ->join('titles','games_titles.title_id','=','games_titles.title_id')
        ->select('games.nombre','games_titles.id','titles.nombre','titles.path','title.descripcion');


        return $juegos;
    }

    public static function titulos(){
        $titulos = DB::table('titulos');
        return $titulos;
    }

}
