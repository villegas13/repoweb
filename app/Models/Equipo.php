<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos';

    protected $fillable = [
        'nombre',
        'marca',
        'modelo',
        'estado',
        'partidos_jugados',
        'juegos_ganados',
        'juegos_perdidos',
        'juegos_empatados',
        'goles_favor',
        'goles_contra',
        'diferencia_goles',
        'puntos',
        'posicion',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'partidos_jugados' => 'integer',
        'juegos_ganados' => 'integer',
        'juegos_perdidos' => 'integer',
        'juegos_empatados' => 'integer',
        'goles_favor' => 'integer',
        'goles_contra' => 'integer',
        'diferencia_goles' => 'integer',
        'puntos' => 'integer',
        'posicion' => 'integer',
    ];
}
